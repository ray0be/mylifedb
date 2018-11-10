<?php

/**
 * JS files to load before the DOM content
 * Already minified.
 */

$minified = '';

// will only be concatened
$already_minified = array(
    'app/js/vue/vue.min.js',
    'app/js/vue/vue-router.min.js',
);

foreach ($already_minified as $file) {
    $minified .= file_get_contents($file);
}

echo $minified;
