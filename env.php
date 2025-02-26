<?php
/*
*   Here we set enviroment variables for our project
*/

// --------------------------------------------------------------------
// USER CONFIGURABLE SETTINGS.  EDIT BELOW THIS LINES FOR CHANGES
// --------------------------------------------------------------------

/*
* Set ENV variable below,
*/
$env_variables = [
    'base_url' => '',
    'environment' => '',
];

/*
* Set Routes Names bellow
* Can define your own path here too
*/

$env_routes = [
    'APP' => __DIR__ . '/app/',                        // App files path

    'SYSTEM' => __DIR__ . '/system/',                  //System files path

    'CONFIG' => __DIR__ . '/app/config/',                //Config folder path
    'CONTROLLERS' => __DIR__ . '/app/controllers/',     //controlelrs path
    'VIEWS' => __DIR__ . '/app/views/',                //views path
    'MODELS' => __DIR__ . '/app/models/',              //Model Folder Path

    'IMAGES' => __DIR__ . '/assets/images/',             // Path to iamges folder
    'CSS' => __DIR__ . '/assets/css/',                  // Path to CSS folder
    'JS' => __DIR__ . '/assets/js/',                   // Path to js folder
];

// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

foreach ($env_variables as $key => $value) {
    $_ENV[$key] = $value;
}

foreach ($env_routes as $key => $value)
    define("$key", "$value");
