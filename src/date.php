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
* $date = new \digices\paqure\Date(1435342671);
* $date = new \digices\paqure\Date('2018-04-17 19:00:00');
**/

class Date
{

  /** @property integer **/
  public $posix;

  /** @property string **/
  public $mysql;

  /** @property signed integer **/
  public $offset;

  /** @property string **/
  public $iso8601;

  /**
    * @method constructor
    * @param  integer | string
    */
  public function __construct()
  {
    $args = func_get_args();
    if (count($args) < 1) {
      $this->initWithPosix(date('U'));
    } else {
      if (is_integer($args[0])) {
        $this->initWithPosix($args[0]);
      } else {
        $this->initWithMySQL($args[0]);
      }
    } // ./one or more args
  } // ./__construct

  /**
    * @method init with posix
    * @param  integer
    */
  public function initWithPosix($int)
  {
    $this->posix = intval($int);
    $tz = new \DateTimeZone(date_default_timezone_get());
    $dt = date_create_from_format('U', strval($this->posix), $tz);
    $dt->setTimezone($tz);
    $this->mysql = $dt->format('Y-m-d H:i:s');
    $this->offset = $tz->getOffset($dt);
    $tz = new \DateTimeZone('UTC');
    $dt->setTimezone($tz);
    $this->iso8601 = $dt->format(\DateTime::ATOM);
  } // ./initWithPosix

  /**
    * @method init with mysql
    * @param  string
    */
  public function initWithMySQL($str)
  {
    $this->mysql = $str;
    $tz = new \DateTimeZone(date_default_timezone_get());
    $dt = date_create_from_format('Y-m-d H:i:s', $this->mysql, $tz);
    $dt->setTimezone($tz);
    $this->posix = intval(date_format($dt, 'U'));
    $this->offset = $tz->getOffset($dt);
    $tz = new \DateTimeZone('UTC');
    $dt->setTimezone($tz);
    $this->iso8601 = $dt->format(\DateTime::ATOM);
  } // ./initWithMySQL

} // ./Date
