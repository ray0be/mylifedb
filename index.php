<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

$must_compile = isset($_GET['compile']);

require 'app/minifier.php';
require 'app/scss_compiler.php';
require 'app/global_compiler.php';
