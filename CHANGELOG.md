## 1.1.10 (February 02, 2023)
  - removed old files

## 1.1.9 (February 02, 2023)
  - bumped python library, added more Make targets
  - Merge branch 'stable' into devel
  - bumped python library
  - removed old files

## 1.1.8 (July 06, 2022)
  - fixed issue with git ref sha not available anymore in new versions of git
  - bug fix in side_bar
  - added utility JS function `seconds_since_epoch`
  - minor

## 1.1.7 (July 11, 2021)
  - added sandbox
  - entrypoint.sh: now chmodding g+rw the COMPOSE_USERDATA_DIR
  - added Core::RESERVED_PAGES array

## 1.1.6 (April 05, 2021)
  - Merge branch 'devel' into stable
  - package_store/list: now using a smaller JSON string to pass data from PHP to JS

## 1.1.5 (March 20, 2021)
  - Merge branch 'devel' into stable
  - fixed bug with NULL default values in EditableConfiguration.php being shown in forms as "null" strings

## 1.1.4 (March 19, 2021)
  - minor
  - dropped Jenkinsfile, CI is now using the Makefile
  - minor

## 1.1.3 (February 28, 2021)
  - updating from devel source now pulls from `stable` branch; by default only tagged versions are considered updates.

## 1.1.2 (February 28, 2021)
  - fixed update helper button to play nice with the modern theme.
  - updating from devel source now pulls from `stable` branch; by default only tagged versions are considered updates.

## 1.1.1 (February 28, 2021)
  - added small logo option; removed developed by string; added option to hide compose credits
  - bug fixes
  - Database.php: reformatting
  - bug fix
  - improved compose_form.js: added support for hidden fields, partial support for arrays and templates
  - added utility function Utils::arrayPaths
  - fixed bugs in Utils::pathToNS and package-specific settings tab w/ missing default values;
  - minor
  - re-revert: fixed bug in php_info
  - Revert "fixed bug in setting/php_info tab"
  - Revert "improved support for arrays in compose_form.js"
  - Revert "working on removables for ComposeForm"
  - Revert "minor"
  - Revert "added Utils::arrayPaths"
  - Revert "added Remove button to arrays in ComposeForm"
  - Revert "fixed bug in package settings tab where default values were missing"
  - Revert "fixed bug in missing configuration default values"
  - Merge branch 'stable' into devel
  - fixed bug in missing configuration default values
  - fixed bug in package settings tab where default values were missing
  - added Remove button to arrays in ComposeForm
  - added EditableConfiguration::asArray(use_defaults), EditableConfiguration::getDefaults()
  - added Utils::arrayPaths
  - minor
  - working on removables for ComposeForm
  - improved support for arrays in compose_form.js
  - fixed bug in setting/php_info tab

## 1.1.0 (February 19, 2021)
  - utility script ./run now works with debug version of the image
  - now supporting `composer`
  - added Core::getPackageScriptURL
  - removed phpinfo() from debug image
  - added "PHP Info" tab to Settings page

## 1.0.9 (January 21, 2021)
  - compose updates are now checked against `git tags` instead of `github releases`
  - added new targets to Makefile

## 1.0.8 (January 21, 2021)
  - fixed regression bug in API
  - API now checks for access level before checking the token
  - minor
  - fixed bug in EditableConfiguration w/ default values and array values
  - fixed bug in API parameters value parsing

## 1.0.7 (January 15, 2021)
  - Merge branch 'devel' into stable
  - added JS utility functions `copyToClipboard`, `getAbsoluteURLtoResource`, `getCurrentAbsoluteURL`
  - minor

## 1.0.6 (October 18, 2020)
  - fixed bug in package manager (update)

## 1.0.5 (August 11, 2020)
  - Merge branch 'stable' into devel
  - added support for custom favicons
  - alert messages are now cleared in Core::close()
  - minor

## 1.0.4 (August 05, 2020)
  - added vertical_fit CSS class
  - fixed bug in devel watermark

## 1.0.3 (August 05, 2020)
  - reduced size of developer watermark
  - minor

## 1.0.2 (August 03, 2020)
  - minor adjustment to theme
  - cleaned up commented code
  - minor
  - minor
  - adapted to new schema walk function
  - improved Schema.php, implemented new walk function
  - minor
  - minor
  - added JS humanTime utils function
  - in compose_form selects are flushed to the right
  - fixed bug w/ autoscroll to top on openAlert

## 1.0.1 (July 24, 2020)
  - bumped compose-cms lib to 1.0.3
  - developer watermark now supports themes
  - minor
  - now using compose-cms library v1.0.1

## 1.0.0 (July 23, 2020)
  - added new version to doxygen docs file
  - Merge branch 'devel' into stable
  - Merge branch 'stable' of github.com:afdaniele/compose into stable
  - minor
  - mission control menu now supports new theme
  - improved SmartFormModal.php
  - fixed bug in first setup, step3 with default values not appearing in form
  - renamed Schema->as_array() -> Schema->asArray()
  - renamed Schema->as_array() -> Schema->asArray()
  - fixed broken footer in default schema
  - fixed bug in package store
  - bug fix
  - implemented support for assets store v3
  - minor
  - format code
  - reformat RESTfulAPI.php
  - reformatted; adapted all pages to new page-title functionality
  - fixed first setup page
  - renamed page data -> 404
  - minor
  - fixed bug in sidebar button in modern theme
  - fixed bug
  - removed timezone enum filler function
  - fixed bug in EditableConfiguration.php
  - minor
  - added CSS class page-title-static
  - new features: - added support for themes - added global progress bar - added theme_configuration API service
  - minor CSS improvements
  - added clearCache JS function
  - added Schema and Color PHP classes
  - core now using schema.json for configuration
  - improved Utils.php
  - minor
  - EditableConfiguration now using ComposeSchema
  - renamed build 'devel' -> 'debug'
  - improved new compose form
  - bug fixes
  - reformat Configuration.php
  - added support for themes
  - reformatted index.php
  - Update README.md

## 1.0.0-rc6 (July 04, 2020)
  - added support for remote docker endpoint in Makefile
  - added String.prototype.[l|r]split; fixed bug;

## 1.0.0-rc5 (July 03, 2020)
  - now installing compose-cms python library for easy configuration

## 1.0.0-rc4 (July 03, 2020)
  - dropped configure.py
  - fixed bug in Core::pageExists
  - fixed bug in git_ref
  - now printing raw commands in package manager

## 1.0.0-rc3 (July 02, 2020)
  - fixed bug in git ref

## 1.0.0-rc2 (July 02, 2020)
  - fixed GIT_REF in Dockerfile

## 1.0.0-rc (July 02, 2020)
  - BREAKING: modified function `string_to_valid_filename`
  - added humanFileSize to JS
  - now supporting JS namespace window.compose
  - now importing new JS color palette
  - added new compose color palette
  - fixed bug in entrypoint
  - added string.capitalize.js
  - chowned /user-data
  - fixed bug in configure.py
  - Merge remote-tracking branch 'origin/devel' into devel
  - added support for custom HTTP and HTTPS ports in Docker (for apps that need --net=host)
  - minor JS stuff
  - fixed bug in login page not refreshing after login
  - Update README.md
  - Update README.md
  - Merge remote-tracking branch 'origin/devel' into devel
  - minor
  - Update README.md
  - Merge remote-tracking branch 'origin/devel' into devel
  - Update README.md
  - improved updateBase
  - Update README.md
  - fixed bug
  - renamed unstable branch master -> devel
  - temporary disabled unset of app_id|secret in webapi
  - updated remote head from 'master' to 'devel' in update helper
  - added compose-form JS and SmartForm modal
  - formatted yes_no_modal.php
  - minor
  - minor
  - minor
  - fixed bug in APIinterpreter
  - now allowing image.php script to accept relative image paths
  - reformatted navbar.php
  - added support for pre-formatted query strings (string object) in Core::getURL
  - added front-end for user groups
  - minor
  - minor
  - fixed bug in form template
  - reformatted web-api/index and removed support for preformatting of the API output by the action handler
  - reformat of API utils and fixed bug in the handling of boolean arguments in API calls
  - added Core::getGroupInfo
  - removed pre-formatting of the API endpoints' results by the action handler
  - renamed parameter userid -> user in userprofile/edit API endpoint
  - minor
  - typo
  - added user groups feature
  - minor
  - reformat Core
  - StringType::KEY and Utils::string_to_valid_filename are now aligned
  - minor
  - minor
  - minor
  - reformat
  - added StringType::getHTML5TypeByTypeName
  - minor
  - added support for arrays and objects in API request body
  - added _bad_request and _illegal_arg help functions
  - added API_DEBUG function
  - API: parameters of type array are turned into arrays even if single-valued
  - API now supports arrays in POST body
  - added Core::getPackageRootDir
  - minor changes in Core
  - added authentication parameters section to API reference page
  - minor
  - deprecated generateForm function, improved readability of forms.php
  - fixed bug in record_editor_modal.php
  - added template PHP script
  - reformat EditableConfiguration.php
  - removed unused code
  - fixed warning in packages' core import
  - fixed no reload with empty $BASE; fixed deprecated location.reaload(forceReload=true) calls
  - minor
  - pinned xdebug version to 2.4.1 (working with Chrome)
  - added xdebug settings for PhpStorm
  - simplified devel-build target
  - fixed entrypoint for fast docker stop
  - pinned xdebug version
  - Merge branch 'stable' into devel
  - minor
  - fixed bug in index.php
  - added plugins for ChartJS to main index.php
  - reformat index.php
  - added plugins for ChartJS
  - auto-format compose.js
  - improved mission control
  - fixed bugs in MissionControl.php
  - minor
  - fixed bug in Core.php > isPackageEnabled
  - fixed bug in entrypoint.sh
  - code format Core
  - added conecpt of volatileSession; fixed bug;
  - added QEMU for arm64v8
  - minor
  - added support for external \compose\ host in smartAPI
  - added support for CORS
  - added PHP utils startsWith and endsWith
  - added tableToObject to compose.js
  - bootstrap-select is now part of \compose\
  - minor
  - added bootstrap-select from https://developer.snapappointments.com/bootstrap-select/
  - exposing BASE and TOKEN to JS
  - now String.prototype.format supports JS objects with keys
  - added API_VERSION const to compose.js; added smartAPI function to compose.js
  - fixed bug
  - redirect stdout/stderr from healthcheck to /dev/null
  - new default userdata directory in Docker is /user-data
  - fixed configure.py and package_manager.py with new USERDATA
  - importing utils in Core
  - minor
  - using remote head instead of local for cache handling
  - fixed bug
  - fixed bug
  - fixed bug
  - added support for SESSION before login
  - minor
  - removed check for SERVER_NAME
  - Merge branch 'stable' into devel
  - minor
  - administrators can now change user roles
  - removed __PACKAGES__DIR__
  - bug fixes
  - added target devel-build to Makefile
  - fixed cache in Dockerfile
  - Merge branch 'devel-no-chown' into devel
  - minor
  - replaced chown with smart user/group creation
  - removed chown from entrypoint
  - google_signin is now imported only when not logged or logged with google
  - fixed bug in coreclass loader for packages
  - added trailing '/' to pkg['root']
  - deprecated $BASE_URL, now using $BASE
  - Merge branch 'devel-relative-paths' into devel
  - Merge branch 'devel-user-data' into devel
  - changed server_name string checker
  - EditableConfiguration and RESTfulAPI classes use user-data
  - removed trailing slashes
  - changed (image|css|js|script).php to use user-data
  - Merge branch 'devel-user-data' into devel
  - improved SERVER_NAME in html check
  - fixed bug in the way we compute depth to root
  - added special __NR (no-redirect) argument (debug only)
  - [TEMPORARY]: added check for SERVER_NAME in html
  - changed how we compute Configuration::$BASE(_URL)
  - minor
  - renamed htaccess arg -> __arg__; avoid conflicts
  - removed HOSTNAME
  - bug fixes
  - fixed codebase info
  - packages are now loaded from two locations
  - added HTMLRendererBlock
  - improved MissionControl
  - devel stuff re-added
  - Merge branch 'stable' into devel
  - Merge branch 'stable' into devel
  - now devel builds on stable
  - Merge branch 'stable' into devel
  - removing COMPOSE_VERSION env variable
  - minor
  - Merge branch 'patch-smart-build' into devel
  - test on Jenkinsfile
  - minor
  - Merge branch 'patch-smart-build' into devel
  - Merge branch 'patch-retry' into devel
  - merge
  - modified Makefile to build the right tag
  - added Core::getBrowserHostname()
  - added column Version to Packages list in Settings page
  - added space to the right of mission control for the menu
  - Merge branch 'master' into devel
  - Merge branch 'jenkins-branch' into devel
  - Merge branch 'stable' into devel
  - databases moved to user-data/databases/; configuration db renamed to __configuration__
  - added placeholders
  - Merge branch 'master' into devel
  - json format
  - fixed google sign-in errors by introducing $_SESSION['LOGIN_SYSTEM']
  - Merge branch 'devel' of github.com:afdaniele/compose into devel
  - fixed bug in Database::list_dbs()
  - minor
  - updated `configure.py` to use DBs in user-data instead of old `configuration.json`
  - fixed bug
  - improved Database::is_writable
  - default config values are used but never written to the config file
  - EditableConfiguration now uses DBs
  - removed explicit default value from `Core::getSetting` calls
  - added `is_writable` to Database
  - removed `disabled.flag` from .gitignore
  - enable/disable pages now use DBs
  - minor
  - fixed bug
  - enable/disable packages now use DBs
  - databases are now stored in `system/user-data`
  - removed read-only message from Databases
  - fixed bug in Database::list_dbs()
  - minor
  - updated `configure.py` to use DBs in user-data instead of old `configuration.json`
  - fixed bug
  - improved Database::is_writable
  - default config values are used but never written to the config file
  - EditableConfiguration now uses DBs
  - removed explicit default value from `Core::getSetting` calls
  - added `is_writable` to Database
  - removed `disabled.flag` from .gitignore
  - enable/disable pages now use DBs
  - minor
  - fixed bug
  - Merge branch 'package-status-on-db' of github.com:afdaniele/compose into package-status-on-db
  - removed old code
  - enable/disable packages now use DBs
  - merge
  - enable/disable packages now use DBs
  - databases are now stored in `system/user-data`

## 0.9.9 (January 09, 2020)
  - removed devel stuff
  - added _build_all and _clean_all to Makefile
  - APT packages moved to dependencies-apt.txt
  - added rretry
  - Merge branch 'patch-smart-build' into stable
  - added fix for Jenkins pull
  - improved makefile
  - added retry
  - minor
  - implemented smart-build
  - modified Dockerfile to accept COMPOSE_VERSION

## 0.9.8 (January 02, 2020)
  - Merge branch 'stable' of github.com:afdaniele/compose into stable
  - modified Makefile to build the right tag
  - Merge pull request #23 from afdaniele/afdaniele-patch-1
  - Update userprofile.json
  - Merge pull request #22 from afdaniele/patch-2
  - Merge pull request #21 from afdaniele/patch

## 0.9.7 (November 30, 2019)
  - updated Makefile

## 0.9.6 (November 30, 2019)
  - updated Jenkinsfile
  - updated version in Dockerfile
  - Merge pull request #20 from afdaniele/master

## 0.9.5 (November 30, 2019)
  - developer login now goes through the API
  - added JS Configuration class
  - improved COMMIT_ID
  - added COMMIT_ID to Dockerfile to invalidate the cache
  - added --cache-from to docker build in Jenkinsfile
  - added Pull stage to Jenkinsfile
  - DBs in PACKAGES_DIR are writeable again (it was a breaking change)
  - minor
  - Merge branch 'user-data'
  - minor
  - fixed git-based update of compose
  - added log_errors configuration
  - minor
  - added devel-build target to Makefile
  - source is now git cloned (again)
  - added devel Docker version
  - exclude private data and config files in docker
  - copied .git to docker image
  - Merge branch 'master' into fixing-git-update
  - enabled logging of PHP errors in apache2 log file
  - increased healthcheck interval
  - fixed bug
  - added .git dir to docker build context
  - Database now supports pkg and user DBs
  - added support for pinned version in package manager
  - excluded packages from build context
  - setup/step4 -> setup/step_complete
  - setup page now supports modules
  - added Core::getPackageDetails
  - removed old image
  - fixed bug
  - minor
  - fixed Makefile
  - added QEMU
  - updated Makefile
  - added clear cache public btn
  - minor
  - added apcu to Docker
  - config moved up
  - minor
  - set umask to 0002
  - fixed issue with ob_clean on empty buffer
  - fixed bug in makefile
  - removed Jenkins_arm
  - added help to setup page
  - tilde autocompletes to http(s)://SERVER_HOSTNAME
  - fixed issue with rendering of select inputs
  - new Jenkinsfile
  - added .dockerignore, source is now copied and not git cloned
  - removed env from Jenkinsfile
  - Jenkinsfile now uses Makefile
  - added default arch to makefile
  - SSL-enabled entrypoint
  - minor
  - removed setup.sh
  - added makefile
  - moved dockerfile to root
  - first building cross-arch Dockerfile
  - platform.js is now fetched from google website
  - added SSL vars to Dockerfile
  - simplified SSL configuration
  - improved handling of SSL files
  - better logs from package manager
  - minor
  - minor
  - re-added pip3 to arm32v7 as well
  - re-added pip as deps but with no-install-recommends
  - removed pip3 from deps on arm and moved entrypoint script
  - nevermind, removed python3-pip
  - added python3-pip as deps
  - lowered timeout in package manager
  - package manager now takes an empty list as well
  - minor
  - removed `depth=1` from git clone in Dockerfile
  - refactored docker files
  - removed devel code
  - Merge branch 'master' of https://github.com/afdaniele/compose
  - fixed bug
  - fixed bug in web-api
  - added healthcheck to Dockerfile
  - added support for default package in script.php

## 0.9.4 (July 06, 2019)
  - added package scripts

## 0.9.3 (June 06, 2019)
  - added global and local background modules feature
  - added entrypoints to module loader
  - minor
  - added Core::getPackagesModules

## 0.9.2 (June 06, 2019)
  - fixed bug in package and base updaters
  - minor
  - Fixed login error when google client id is not set
  - fixed #18
  - improved package manager
  - package manager improved
  - removed yaml
  - added timeout to package manager index http req
  - removed python-git as deps from Dockerfiles
  - improved package manager, removed python-git dependency
  - hightlight.js moved to showdown

## 0.9.1 (May 03, 2019)
  - minor
  - bug fixes
  - fixed bug
  - minor
  - minor

## 0.9 (May 03, 2019)
  - minor
  - documentation moved to afdaniele/compose-docs repo
  - added updates helper and auto-update feature
  - improved VERSION regex in StringType
  - minor
  - Update README.md
  - minor
  - improved docs
  - added page-title css
  - updated docs
  - improved docs
  - removed doxygen
  - moved images for html-layout page in docs
  - removed doxygen images
  - minor
  - added fake data page to core package. this is our 404 page
  - updated docs
  - added developer mode page to docs
  - when the first user is created, the Developer Mode is disabled
  - added Core::requestAlert
  - minor
  - improved login buttons
  - added developer_mode to setup page
  - minor
  - added size to yesNoModal
  - code format
  - added login as developer feature
  - code format
  - minor
  - added developer mode setting and watermark
  - minor
  - format Core
  - format
  - removed videojs and momentjs from standard libraries
  - minor
  - code format
  - Merge pull request #16 from afdaniele/remove-date
  - removed date, last modif
  - Merge branch 'master' of github.com:afdaniele/compose
  - minor
  - improved docs
  - improved Setup page
  - refactored google sign-in to use events.
  - bug fix
  - added menu to mission control
  - saving package-specific settings now refreshes the page
  - fixed bug in form template
  - improved mission control and blocks; added mission control menu
  - minor
  - format
  - format
  - added pre_update to package manager
  - minor
  - added Core::getAPIurl
  - added Database::delete_db
  - minor
  - updated bump-version
  - added bump-version
  - removed Debug page. It is now part of the developer package
  - solved #12
  - minor
  - added clear cache button to Cache collapse in Settings page
  - added is_JSON function
  - minor
  - format
  - fixed bug in record editor modal
  - added list_dbs to Database class
  - format
  - minor
  - format
  - fixed bug in RestAPI docs page
  - format
  - format
  - added Core::getURL
  - added redirect-after-login feature
  - added SSL support to Dockerfile
  - fixed bug in http/https protocol selection
  - fixed maintenance<>setup loop
  - added update action to package_store
  - added Core::openAlert function
  - minor
  - minor
  - we now read ASSETS_STORE_URL and ASSETS_STORE_BRANCH from php config file in package manager
  - package store page now shows installed version and available version
  - minor
  - refactored package manager. It now supports tab-based package upgrade
  - added __COMPOSE__DIR__ to globals
  - switched to assets-store index v1
  - added menu to MissionControl
  - we now retrieve the codebase info (version) for each package we load
  - updated debug Dockerfile
  - we can now logout when not logged in with google
  - minor
  - allow for Jenkins to fail cleaning up
  - Moved arm to another Jenkins file
  - added arm32v7 to Jenkins
  - added Jenkinsfile
  - fixed bug in API end-point configuration/set
  - added profile add-on loader
  - fixed problem with google signin id
  - added first-setup case to configuration.set api
  - added toposort as dependency
  - added toposort as dependency
  - added dependency graph to package manager
  - migrated to python3
  - minor
  - added login add-ons loader
  - minor
  - Core::regenerateSessionID is now public
  - added response 412 to API utils
  - added css for custom login button
  - cleaned up deps
  - renamed page 'packages' -> 'package_store'
  - minor
  - python package manager now supports post_install step and error report
  - Core::install/remove now return errors
  - format fix in Cache
  - minor
  - moved name and description to index file, avoid fetching all packages in list.php
  - added ASSETS_STORE_BRANCH to Configuration
  - sanitized URL in package manager
  - renamed page 'packages' -> 'package_store'
  - minor
  - added package store, install/uninstall functions in Core
  - handled errors while installing packages
  - pulled platform.js locally
  - implemented python package manager and ability to install packages from web
  - implemented install/uninstall selection
  - fixed format/wording in setup page
  - implemented github/bitbucket package list fetching
  - added JS yaml library
  - added packages page
  - Merge branch 'master' of https://github.com/afdaniele/compose
  - refactored some code; format update
  - added Setup page
  - Update changelog
  - moved jquery to loval js folder
  - minor
  - minor
  - improved select objects in form template
  - added transparent block
  - minor
  - blocks can now be removed in MissionControl grids, added BlockRenderers options
  - added JS libraries
  - minor
  - added options to BlockRenderer class
  - added options to BlockRenderer class
  - added new ideas for package versioning
  - minor
  - search in User page is now case-insensitive
  - added class to Block title and subtitle in BlockRenderer
  - minor
  - added $ignoreKeys to `toQueryString` function
  - fixed bug
  - fixed bug
  - missing keys in custom config are filled with default from metadata
  - fixed bug in user_roles section of settings page
  - fixed bug in debug module
  - minor
  - added ARRAY format option
  - added dependencies graph between packages
  - fixed default page
  - added per-package user roles
  - added package to the configure python script
  - remove apt-utils
  - chmod +x now in shell form
  - extended ARM section
  - a2enmod -> cp
  - minor
  - added qemu for cross-building
  - minor
  - minor
  - warn when no volume is used
  - no need to reinstall \compose\ when mounting a volume
  - updated docker
  - minor
  - removed port from hostname
  - minor
  - init gapi only if login_enabled
  - add google-signin-client_id meta only if login_enabled
  - added $HOSTNAME to Configuration class
  - it is now possible to register custom CSS stylesheets
  - fixed typo
  - docker: compose installed via entrypoint
  - docker: compose is now installed by the entrypoint
  - compose is now installed as ONBUILD
  - removed VOLUME from base dockerfile(s)
  - improved configure.py
  - replaced `*.disabled.flag` files with DBs in core package to keep track of disabled API service/action
  - minor
  - hide dropdown in navbar if no buttons are present
  - added python to arm32v7 dockerfile
  - merge
  - minor
  - implemented user enable/disable
  - Added VOLUME to Docker file
  - added VOLUME for Docker Compose
  - Added a Python configuration script (useful for Docker)
  - Moved all config params from /system/config/configuration.php to core settings
  - updated API docs. Added authentication details
  - Merge branch 'arm32v7'
  - minor
  - BASE and BASE_URL now are populated from HTTP_HOST
  - replaced `bootstrap-switch` with `bootstrap-toggle`
  - Merge branch 'arm32v7'
  - Merge branch 'arm32v7' of https://github.com/afdaniele/compose into arm32v7
  - minor
  - added fallback File-based cache when selected cache system is not available
  - Merge branch 'arm32v7' of github.com:afdaniele/compose into arm32v7
  - added arm32v7 dockerfile
  - updated docker docs
  - minor
  - updated docker file
  - added app_info API endpoint
  - fixed bug
  - debug section moved from Settings to bottom of each page, added debug page for error analysis
  - added debug module to index.php
  - changelog updated
  - changed icon
  - minor
  - implemented check on package core initialization function
  - minor
  - minor
  - minor
  - index.php now inits Core within <head> tag
  - updated docker
  - minor
  - minor
  - added `Database::database_exists()` function; added check on package name in `Database::__construct()`
  - updated datetime format
  - renamed `RestfulAPI.php`->`RESTfulAPI.php`
  - added `Core::throwErrorF()`
  - bug fixed
  - added 'authentication' bit to each API action
  - implemented API applications
  - moved `token` from mandatory to optional list of parameters
  - fixed style in API docs
  - removed `read_only_session` from API service descriptor files
  - added key filter to Database class
  - removed old API service `session`
  - refactored /api/ page, introduced API Apps w/ API endpoints (create/update/delete), added delete() to Database
  - minor fixes
  - minor
  - added POST method to callAPI function
  - cleaned up CSS
  - renamed RestfulAPI->RESTfulAPI (2)
  - Databases now stored in /data/private/databases/
  - changelog updated
  - renamed RestfulAPI->RESTfulAPI
  - cleaned up repo
  - fixed bug in webapi
  - implemented maintenance mode
  - minor
  - split _load_API_setup in _load_settings and _load_configuration
  - updating settings clears both pkg-cache and core-cache
  - renamed Core::initCore()->Core::init()
  - minor
  - clear cache after enabling/disabling pages or packages
  - minor
  - switched from Apc to Apcu cache system
  - added __DATA__DIR__ global var
  - fixed description
  - minor
  - package private data is now stored in /<pkg>/data/private/
  - added safe_mode
  - refactored RestfulAPI. It is now modeled by the class RestfulAPI
  - minor
  - cache section added to settings page
  - docker images revisited
  - refactoring cache
  - minor
  - docker images revisited
  - minor
  - fixed typo in docs
  - added class Formatter to standardize object formatting; added debug tab to settings page w/ DEBUG flag in Configuration class
  - refactored the code to use StringType as an enum for string validation in \compose\
  - minor
  - updated branch in Docker file for v0.9
  - refactored Docker files
  - minor
  - added README for docker images
  - added Dockerfile based on Ubuntu 16.04.4 LTS, Apache2, PHP7
  - added template configuration file
  - default configuration file updated. removed duckietown stuff
  - user_info now passed by reference to createNewUserAccount()
  - the first user to login is always an administrator
  - fixed bug in chmod call
  - Update setup.md
  - added new classes to doxygen project
  - readme updated
  - update form template
  - cleaned up Configuration class
  - added string_to_valid_filename as utility function
  - minor
  - minor
  - new classes loaded in index.php
  - js library improved
  - added Database interface to private data storage for packages
  - added block renderers
  - documentation updated
  - minor
  - new favicon
  - compose now supports static enumerations as configuration parameters
  - settings page now supports default values from `metadata.json`
  - base config file cleaned up
  - doxygen now takes as input php files
  - navbar: decreased width triggering responsive behavior
  - minor
  - Merge branch 'master' of github.com:afdaniele/compose
  - documentation updated
  - minor
  - documentation corrected; libraries page completed;
  - documentation improved
  - doxygen now generates XML as well
  - Update dependencies.json
  - docs for old versions linked to v0.9
  - documentation WIP added
  - doxygen project updated
  - doxygen project updated
  - doxygen project updated
  - README updated
  - doxygen project updated
  - doxygen project updated
  - disabled packages now are not initialized
  - bug fixed with guest always redirected to login page
  - Bootstrap callout CSS library added
  - footer now shows the version tag
  - ARG1 and ARG2 added to the Configuration
  - URL Rewrite feature added
  - dependencies updated
  - README updated
  - minor
  - bug fixed in EditableConfiguration, the keys were checked against the JSON rather than the MetaData
  - minor
  - minor style change
  - administrator can now select the default page per user role in the settings menu
  - bug fixed in function getting the latest tag of the codebase
  - minor

