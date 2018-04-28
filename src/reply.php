<?php

/**
 * @package   PaQuRe
 * @version   0.6.4
 * @author    Roderic Linguri
 * @copyright 2012-2018 Digices LLC
 * @license   MIT
 */

namespace digices\paqure;

/**
* $reply = new \digices\paqure\Reply('events','fetch-all','GET','XD4r5tY7');
**/

class Reply
{

  /** @property Meta **/
  protected $meta;
  
  /** @property array **/
  protected $data;

  /** @method constructor **/
  public function __construct($model, $action, $method, $state)
  {
    $this->meta = new \digices\paqure\Meta($model, $action, $method, $state);
    $this->data = array();
  } // ./__construct

  /**
    * @method  append data
    * @param   object
    */
  public function appendData($object)
  {
    array_push($this->data, $object);
  } // ./appendData

  /**
    * @method  set data
    * @param   object
    */
  public function setData($data)
  {
    $this->data = $data;
  } // ./setData

  /**
    * @method  get data
    * @return array
    */
  public function getData()
  {
    return $this->data;
  } // ./getData

  /**
    * @method  set message
    * @param   string
    */
  public function setMessage($string)
  {
    $this->meta->setMessage($string);
  } // ./set message

  /**
    * @method  output
    * @return  assoc
    */
  public function output()
  {
    $this->meta->setCount(count($this->data));
    return array('meta' => $this->meta->output(),'data' => $this->data);
  } // ./output

} // ./Reply
