<?php

class MobileSyncModule extends AApiModule
{
	/**
	 * Collects the information about mobile sync from other modules and returns it.
	 * 
	 * @return array
	 */
	public function GetInfo()
	{
		$mResult = array();
		
		$this->broadcastEvent('GetInfo', array(&$mResult));

		return $mResult;
	}
	
}
