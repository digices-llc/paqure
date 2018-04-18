<?php

/**
 * @package   PaQuRe
 * @version   0.6.0
 * @author    Roderic Linguri
 * @copyright 2012-2018 Digices LLC
 * @license   MIT
 */

namespace digices\paqure;

class Timer
{

  /** @property float **/
  protected $start;

  /** @method constructor **/
  public function __construct()
  {
    $this->start = microtime(true);
  } // ./__construct

  /**
    * @method executionTime
    * @return float
    */
  public function executionTime()
  {
    return (microtime(true) - $this->start);
  } // ./executionTime

} // ./Timer
