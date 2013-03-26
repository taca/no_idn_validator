<?php

/**
 * Copyright (C) 2011-2013
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
 * @copyright  Takahiro Kambe 2013
 * @author     Takahiro Kambe
 * @package    NoIDN_Validator
 * @license    lgpl3 or later
 * @filesource
 */

/**
 * Class NoIDNvalidator
 *
 * @copyright  Takahiro Kambe 2013
 * @author     Takahiro Kambe 
 * @package    NoIDNvalidator
 */

/**
 * Class NoIDNvalidator
 *
 * Add additional validations.
 *
 * @copyright  Takahiro Kambe 2013
 * @author     Takahiro Kambe 
 * @package    NoIDNvalidator
 */

class NoIDNvalidator extends Frontend
{
    /**
     * Validate emali and url without handling IDN
     * @param string $rgxp Type of validation
     * @param string $varInput String to validate
     * @param object $widget Widget to store error message
     *
     * @return boolean True if validation success
     */
    function validate($rgxp, $varInput, $widget)
    {
        $status = true;

        switch ($rgxp)
        {
        case 'email-noidn':
            if (!preg_match('/^(\w+[!#\$%&\'\*\+\-\/=\?^_`\.\{\|\}~]*)+(?<!\.)@\w+([_\.-]*\w+)*\.[A-Za-z]{2,6}$/', $varInput))
            {
                $widget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['email-noidn'], $widget->strLabel));
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
