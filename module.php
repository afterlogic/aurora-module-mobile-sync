<?php

class MobileSyncModule extends AApiModule
{
	public function GetInfo()
	{
		$mResult = array();
		
		$this->broadcastEvent('GetInfo', array(&$mResult));

		$aLoginList = array();
		
		$this->broadcastEvent('GetUserAuthAccountLogin', array(&$aLoginList));
		
		$mResult['LoginList'] = $aLoginList;
		
		return $mResult;
	}
	
}
