<?php
/**
 * This code is licensed under AGPLv3 license or Afterlogic Software License
 * if commercial version of the product was purchased.
 * For full statements of the licenses see LICENSE-AFTERLOGIC and LICENSE-AGPL3 files.
 */

namespace Aurora\Modules\MobileSync;

/**
 * Allows for syncing data with mobile devices or any application/platform which offers CalDAV/CardDAV support.
 *
 * @license https://www.gnu.org/licenses/agpl-3.0.html AGPL-3.0
 * @license https://afterlogic.com/products/common-licensing Afterlogic Software License
 * @copyright Copyright (c) 2023, Afterlogic Corp.
 *
 * @property Settings $oModuleSettings
 *
 * @package Modules
 */
class Module extends \Aurora\System\Module\AbstractModule
{
    public function init()
    {
    }

    /**
     *
     * @return Module
     */
    public static function Decorator()
    {
        return parent::Decorator();
    }

    /**
     *
     * @return Settings
     */
    public function getModuleSettings()
    {
        return $this->oModuleSettings;
    }

    /***** public functions might be called with web API *****/
    /**
     * Collects the information about mobile sync from other modules and returns it.
     *
     * @return array
     */
    public function GetInfo()
    {
        \Aurora\System\Api::checkUserRoleIsAtLeast(\Aurora\System\Enums\UserRole::NormalUser);

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
