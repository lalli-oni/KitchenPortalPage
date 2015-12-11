<?php

class StartReminder
{

    /**
     * @var int $desiredTemperature
     * @access public
     */
    public $desiredTemperature = null;

    /**
     * @param int $desiredTemperature
     * @access public
     */
    public function __construct($desiredTemperature)
    {
      $this->desiredTemperature = $desiredTemperature;
    }

}
