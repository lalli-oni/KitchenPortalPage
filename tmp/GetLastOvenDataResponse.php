<?php

class GetLastOvenDataResponse
{

    /**
     * @var int $GetLastOvenDataResult
     * @access public
     */
    public $GetLastOvenDataResult = null;

    /**
     * @param int $GetLastOvenDataResult
     * @access public
     */
    public function __construct($GetLastOvenDataResult)
    {
      $this->GetLastOvenDataResult = $GetLastOvenDataResult;
    }

}
