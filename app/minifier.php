<?php

use voku\helper\HtmlMin;
use MatthiasMullie\Minify;


/**
 * Minifies HTML and returns the resulting content
 * 
 * Uses HtmlMin - HTML Compressor and Minifier via PHP [MIT]
 * https://github.com/voku/HtmlMin
 */
function minify_html($html)
{
    $htmlMin = new HtmlMin();

    // options
    $htmlMin->doOptimizeViaHtmlDomParser(true);
    $htmlMin->doRemoveComments(true);
    $htmlMin->doSumUpWhitespace(true);
    $htmlMin->doRemoveWhitespaceAroundTags(true);
    $htmlMin->doOptimizeAttributes(true);
    $htmlMin->doRemoveDefaultAttributes(true);
    $htmlMin->doRemoveDeprecatedAnchorName(true);
    $htmlMin->doRemoveDeprecatedScriptCharsetAttribute(true);
    $htmlMin->doRemoveDeprecatedTypeFromScriptTag(true);
    $htmlMin->doRemoveDeprecatedTypeFromStylesheetLink(true);
    $htmlMin->doRemoveValueFromEmptyInput(true);
    $htmlMin->doRemoveSpacesBetweenTags(true);

    $htmlMin->doRemoveHttpPrefixFromAttributes(false);
    $htmlMin->doRemoveEmptyAttributes(false);
    $htmlMin->doSortCssClassNames(false);
    $htmlMin->doSortHtmlAttributes(false);
    $htmlMin->doRemoveOmittedQuotes(false);
    $htmlMin->doRemoveOmittedHtmlTags(false);

    return $htmlMin->minify($html); 
}


/**
 * Minifies CSS and returns the resulting content
 * 
 * Uses minify - CSS & JavaScript minifier, in PHP [MIT]
 * https://github.com/matthiasmullie/minify
 */
function minify_css($css)
{
    $minifier = new Minify\CSS($css);
    return $minifier->minify();
}


/**
 * Minifies JS and returns the resulting content
 * 
 * Uses minify - CSS & JavaScript minifier, in PHP [MIT]
 * https://github.com/matthiasmullie/minify
 */
function minify_js($js)
{
    $minifier = new Minify\JS($js);
    return $minifier->minify();
}
