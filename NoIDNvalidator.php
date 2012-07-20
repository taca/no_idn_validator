<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Copyright (C) 2011
 * Takahiro Kambe.  All rights reserved.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe
 * @package    NoIDN_Validator
 * @license    lgpl3 or later
 * @filesource
 *
 */

/**
 * Class NoIDNvalidator
 *
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe 
 * @package    NoIDNvalidator
 */

class NoIDNvalidator extends Frontend
{
    function validate($rgxp, $varInput, $widget)
    {
        $status = true;

        switch ($rgxp)
        {
        case 'email-noidn':
            if (!$widget->isValidEmailAddress($varInput))
            {
                $widget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['email-noidn'], $widget->strLabel));
            }
            if ($this->rgxp == 'friendly' && $strName != '')
            {
                $varInput = $strName . ' [' . $varInput . ']';
            }
            break;
        case 'url-noidn':
            if (!preg_match('/^[a-zA-Z0-9\.\+\/\?#%:,;\{\}\(\)\[\]@&=~_-]*$/', $varInput))
            {
                $widget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['url-noidn'], $widget->strLabel));
            }
            break;
        default:
            $status = false;
        }
        return $status;
    }
}

?>