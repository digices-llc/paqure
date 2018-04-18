<?php

/**
 * @package   PaQuRe
 * @version   0.6.0
 * @author    Roderic Linguri
 * @copyright 2012-2018 Digices LLC
 * @license   MIT
 */

namespace digices\paqure;

/**
$get_req = \digices\paqure\Get::shared();
**/

class Get
{

  /** @property Get **/
  protected static $shared;
  
  /**
    * @method  shared (getter)
    * @return  Get (singleton)
    **/
  public static function shared()
  {
    if (!isset(self::$shared)) {
      self::$shared = new self();
    }
    return self::$shared;
  } // ./shared

  /** @method constructor **/
  public function __construct()
  {
    foreach ($_GET as $k=>$v) {
      $this->$k = $v;
    }  
  }

} // ./Get
