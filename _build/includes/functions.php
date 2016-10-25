<?php
/**
 * Theme.Shop
 *
 * @package themeshop
 */
/**
 * Helper method for grabbing files
 *
 * @package themeshop
 * @subpackage build
 */

/**
 * @param string $filename
 * @return mixed|string
 */
function getSnippetContent($filename) {
    $o = file_get_contents($filename);
    $o = str_replace('<?php','',$o);
    $o = str_replace('?>','',$o);
    $o = trim($o);
    return $o;
}