<?php

/**
 * JS files to load after the DOM content
 * Minified and concatened.
 */

$other = array(
    'app/js/icons.js',
    'app/js/main.js',
    'app/js/app.js',
);

$minified = '';
foreach ($other as $file) {
    $temp = file_get_contents($file);
    
    if ($must_compile) {
        $temp = minify_js( $temp );
    }

    $minified .= $temp;
}

echo $minified;
