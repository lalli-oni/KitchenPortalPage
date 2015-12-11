<?php

class GetLastRoomDataResponse
{

    /**
     * @var int[] $GetLastRoomDataResult
     * @access public
     */
    public $GetLastRoomDataResult = null;

    /**
     * @param int[] $GetLastRoomDataResult
     * @access public
     */
    public function __construct($GetLastRoomDataResult)
    {
      $this->GetLastRoomDataResult = $GetLastRoomDataResult;
    }

}
