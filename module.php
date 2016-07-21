<?php

class MobileSyncModule extends AApiModule
{
	public function GetInfo()
	{
		$mResult = array();
		
		$this->broadcastEvent('GetInfo', array(&$mResult));

		return $mResult;
	}
	
}
