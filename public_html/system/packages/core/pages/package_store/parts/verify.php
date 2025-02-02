<?php
# @Author: Andrea F. Daniele <afdaniele>
# @Email:  afdaniele@ttic.edu
# @Last modified by:   afdaniele

use \system\classes\Core;
use \system\classes\Configuration;

$errors = [];

if (!isset($_GET['install']) && !isset($_GET['update']) && !isset($_GET['uninstall'])) {
    Core::redirectTo('');
}

$to_install = explode(',', str_ireplace(' ', '', $_GET['install']));
$to_update = explode(',', str_ireplace(' ', '', $_GET['update']));
$to_uninstall = explode(',', str_ireplace(' ', '', $_GET['uninstall']));

// handle empty string cases
if (count($to_install) == 1 && strlen($to_install[0]) < 2) {
    $to_install = [];
}
if (count($to_update) == 1 && strlen($to_update[0]) < 2) {
    $to_update = [];
}
if (count($to_uninstall) == 1 && strlen($to_uninstall[0]) < 2) {
    $to_uninstall = [];
}

// get list of installed packages
$installed_packages = Core::getPackagesList();
$installed_packages_ids = array_keys($installed_packages);

// get list of packages that failed to install/uninstall
$failed_to_install = array_diff($to_install, $installed_packages_ids);
$failed_to_update = [];
$failed_to_uninstall = array_intersect($to_uninstall, $installed_packages_ids);

// get list of successes
$successfully_installed = array_diff($to_install, $failed_to_install);
$successfully_updated = array_diff($to_update, $failed_to_install);
$successfully_uninstalled = array_diff($to_uninstall, $failed_to_uninstall);
?>

<style type="text/css">
    .panel > .panel-heading a {
        color: inherit;
        text-decoration: none;
    }

    select.form-control {
        height: 26px !important;
    }
</style>


<h2 class="page-title"></h2>

<?php
$tasks = [
    [
        'name' => 'Successfully installed',
        'icon' => 'download',
        'color' => 'green',
        'data' => $successfully_installed
    ],
    [
        'name' => 'Successfully updated',
        'icon' => 'cloud-download',
        'color' => 'green',
        'data' => $successfully_updated
    ],
    [
        'name' => 'Successfully uninstalled',
        'icon' => 'trash',
        'color' => 'green',
        'data' => $successfully_uninstalled
    ],
    [
        'name' => 'Failed to install',
        'icon' => 'download',
        'color' => 'red',
        'data' => $failed_to_install
    ],
    [
        'name' => 'Failed to update',
        'icon' => 'cloud-download',
        'color' => 'red',
        'data' => $failed_to_update
    ],
    [
        'name' => 'Failed to uninstall',
        'icon' => 'trash',
        'color' => 'red',
        'data' => $failed_to_uninstall
    ]
];

foreach ($tasks as $task) {
    if (count($task['data']) > 0) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab">
                <a aria-expanded="true" aria-controls="">
                    <h4 class="panel-title">
                        <span class="fa fa-<?php echo $task['icon'] ?>"
                              style="color:<?php echo $task['color'] ?>" aria-hidden="true"></span>
                        &nbsp;
                        <strong><?php echo $task['name'] ?>:</strong>
                    </h4>
                </a>
            </div>
            <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="">
                <div class="panel-body">
                    <?php
                    foreach ($task['data'] as $package_id) {
                        $package_metadata = $installed_packages[$package_id];
                        $package_name = isset($package_metadata['name']) ? $package_metadata['name'] : 'Package';
                        echo sprintf(
                            '<h5>&bullet; %s (<span class="mono" style="color:grey">%s, %s</span>)</h5>',
                            $package_name,
                            $package_id,
                            sprintf(
                                '<span class="fa fa-tag" style="color:black" aria-hidden="true"></span> %s',
                                $package_metadata['codebase']['head_tag']
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<a class="btn btn-success" role="button" style="float:right"
   href="<?php echo Configuration::$BASE ?>">
    <i class="fa fa-check" aria-hidden="true"></i>
    &nbsp;
    Done!
</a>
