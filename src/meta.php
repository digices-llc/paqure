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
$meta = new \digices\paqure\Reply('events','fetch-all','GET','XD4r5tY7');
**/

class Meta
{

  /** @property string **/
  protected $model;
  
  /** @property string **/
  protected $action;
  
  /** @property string **/
  protected $method;
  
  /** @property string **/
  protected $state;

  /** @property Timer **/
  protected $timer;
  
  /** @method constructor **/
  public function __construct($model, $action, $method, $state)
  {
    $this->timer = new \digices\paqure\Timer();
    $this->message = 'No Data';
    $this->model = $model;
    $this->action = $action;
    $this->method = $method;
    $this->state = $state;
  } // ./__construct

  /**
    * @method  set message
    * @param   string
    */
  public function setMessage($string)
  {
    $this->message = $string;
  } // ./set message

  /**
    * @method  set message
    * @return  assoc
    */
  public function output()
  {
    return array(
      'model'   => $this->model,
      'action'  => $this->action,
      'method'  => $this->method,
      'state'   => $this->state,
      'message' => $this->message,
      'timer'   => $this->timer->executionTime()
    );
  } // ./output

} // ./Meta