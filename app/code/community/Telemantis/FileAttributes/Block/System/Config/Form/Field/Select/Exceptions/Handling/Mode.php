<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Telemantis
 * @package    Telemantis_FileAttributes
 * @copyright  Copyright (c) 2011 Benoît Leulliette <benoit.leulliette@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Telemantis_FileAttributes_Block_System_Config_Form_Field_Select_Exceptions_Handling_Mode
    extends Telemantis_FileAttributes_Block_System_Config_Form_Field_Select_Abstract
{
    protected function _getSourceModelName()
    {
        return 'fileattributes/system_config_source_exceptions_handling_mode';
    }
}