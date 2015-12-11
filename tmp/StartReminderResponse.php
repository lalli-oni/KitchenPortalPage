<?php

class StartReminderResponse
{

    /**
     * @var boolean $StartReminderResult
     * @access public
     */
    public $StartReminderResult = null;

    /**
     * @param boolean $StartReminderResult
     * @access public
     */
    public function __construct($StartReminderResult)
    {
      $this->StartReminderResult = $StartReminderResult;
    }

}
