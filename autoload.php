<?php

/**
 * @package   PaQuRe
 * @version   0.6.0
 * @author    Roderic Linguri
 * @copyright 2017 Digices LLC
 * @license   MIT
 */

/** Autoload **/

namespace digices\paqure;

if (!function_exists('digices\\paqure\\load_src')) {

  function load_src() {
    $path = __DIR__.DIRECTORY_SEPARATOR.'src';
    $di = new \DirectoryIterator($path);
    foreach ($di as $item) {
      $fn = $item->getFilename();
      if (substr($fn, 0, 1) != '.') {
        require_once $path.DIRECTORY_SEPARATOR.$fn;
      }
    }
  } // ./load_src

  \digices\paqure\load_src();

}
