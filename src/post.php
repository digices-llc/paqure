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
$post_req = \digices\paqure\Post::shared();
**/

class Post
{

  /** @property Post **/
  protected static $shared;
  
  /**
    * @method  shared (getter)
    * @return  Post (singleton)
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
    foreach ($_POST as $k=>$v) {
      $this->$k = $v;
    }  
  }

} // ./Post