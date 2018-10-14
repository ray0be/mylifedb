<?php
$all_js = '';


/**
 * Already minified JS files
 */

$already_minified = array(
    'app/js/react/react.development.js',
    'app/js/react/react-dom.development.js',
    //'app/js/react/react.production.min.js',
    //'app/js/react/react-dom.production.min.js',
);

foreach ($already_minified as $file) {
    $all_js .= file_get_contents($file);
}


/**
 * Custom files to be minified
 */

$files = array(
    'app/js/icons.js'
);

foreach ($files as $file) {
    $all_js .= minify_js( file_get_contents($file) );
}

echo $all_js;
