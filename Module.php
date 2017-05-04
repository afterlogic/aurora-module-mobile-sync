<?php
/**
 * @copyright Copyright (c) 2017, Afterlogic Corp.
 * @license AGPL-3.0 or AfterLogic Software License
 *
 * This code is licensed under AGPLv3 license or AfterLogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\MobileSync;

/**
 * @package Modules
 */
class Module extends \Aurora\System\Module\AbstractModule
{
	/***** public functions might be called with web API *****/
	/**
	 * Collects the information about mobile sync from other modules and returns it.
	 * 
	 * @return array
	 */
	public function GetInfo()
	{
		\Aurora\System\Api::checkUserRoleIsAtLeast(\EUserRole::NormalUser);
		
		$mResult = array();
		$aArgs = array();
		$this->broadcastEvent(
			'GetInfo', 
			$aArgs,
			$mResult
		);
		
		return $mResult;
	}
	/***** public functions might be called with web API *****/
}
