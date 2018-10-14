<?php

use Leafo\ScssPhp\Compiler;


/**
 * Compiles SCSS source and returns the resulting CSS content
 * 
 * Uses SCSSPHP - SCSS compiler written in PHP [MIT]
 * https://github.com/leafo/scssphp
 */
function compile_scss($scss)
{
    $compiler = new Compiler();
    return $compiler->compile($scss);
}
