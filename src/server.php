<?php

/**
 * @package   PaQuRe
 * @version   0.6.0
 * @author    Roderic Linguri
 * @copyright 2012-2018 Digices LLC
 * @license   MIT
 */

namespace digices\paqure;

class Server
{

  /** @property object (singleton) **/
  protected static $shared;
  
  /** @property string **/
  protected $authType;
  
  /** @property string **/
  protected $clientId;
  
  /** @property string **/
  protected $clientSecret;
  
  /**
    * @method shared
    * @return object (singleton)
    */
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
  
    $this->authType = 'None'; // default value
    
    if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
      $auth_arr = explode(' ', $_SERVER['HTTP_AUTHORIZATION']);
      if (count($auth_arr) > 1) {
        $this->authType = $auth_arr[0];
      }
    }  

    if (isset($_SERVER['PHP_AUTH_USER'])) {
      $this->clientId = $_SERVER['PHP_AUTH_USER'];
    }

    if (isset($_SERVER['PHP_AUTH_PW'])) {
      $this->clientSecret = $_SERVER['PHP_AUTH_PW'];
    }

  } // ./__construct

  /** @method authType getter **/
  public function authType()
  {
    return $this->authType;
  } // ./authType

  /** @method clientId getter **/
  public function clientId()
  {
    return $this->clientId;
  } // ./clientId

  /** @method clientSecret getter **/
  public function clientSecret()
  {
    return $this->clientSecret;
  } // ./clientSecret

} // ./Server
