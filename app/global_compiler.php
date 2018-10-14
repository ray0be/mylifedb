<?php
ob_start();

# Includes
require 'app/html/layout.php';

# Output minified final code
$all = ob_get_contents();
$all_minified = minify_html($all);
file_put_contents('myLife-DB.html', $all_minified);

# Display content
ob_end_flush();
