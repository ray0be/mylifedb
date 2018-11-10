<?php
$all_css = '';


/**
 * Files to minify & concat
 */

// will only be concatened
$already_minified = array(
    'app/css/spectre.min.css',
);

// will be minified and concatened
$files = array(
    'app/css/main.scss',
    'app/css/icons.css',
);


/**
 * Already minified CSS files
 */

foreach ($already_minified as $file) {
    $all_css .= file_get_contents($file);
}


/**
 * Custom files to be compiled (for SCSS) & minified
 */

foreach ($files as $scss_file) {
    if (substr($scss_file, -5) == '.scss') {
        $css = compile_scss( file_get_contents($scss_file) );
    }
    else {
        $css = file_get_contents($scss_file);
    }

    if (!$must_compile) {
        $all_css .= $css;
    }
    else {
        $all_css .= minify_css($css);
    }
}

echo $all_css;
