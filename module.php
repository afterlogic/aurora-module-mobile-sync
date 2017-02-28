<?php
/**
 * @copyright Copyright (c) 2016, Afterlogic Corp.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 * 
 * @package Modules
 */

namespace Aurora\Modules;

class MobileSyncModule extends \Aurora\System\AbstractModule
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
