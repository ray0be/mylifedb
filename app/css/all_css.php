<?php
$all_css = '';


/**
 * Already minified CSS files
 */

$already_minified = array(
    'app/css/spectre.min.css',
);

foreach ($already_minified as $file) {
    $all_css .= file_get_contents($file);
}


/**
 * Custom files to be compiled (for SCSS) & minified
 */

$files = array(
    'app/css/main.scss',
    'app/css/icons.css',
);

foreach ($files as $scss_file) {
    if (substr($scss_file, -5) == '.scss') {
        $css = compile_scss( file_get_contents($scss_file) );
    }
    else {
        $css = file_get_contents($scss_file);
    }
    $all_css .= minify_css($css);
}

echo $all_css;
