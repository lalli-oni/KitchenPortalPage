<?php

class StopReminderResponse
{

    /**
     * @var boolean $StopReminderResult
     * @access public
     */
    public $StopReminderResult = null;

    /**
     * @param boolean $StopReminderResult
     * @access public
     */
    public function __construct($StopReminderResult)
    {
      $this->StopReminderResult = $StopReminderResult;
    }

}
