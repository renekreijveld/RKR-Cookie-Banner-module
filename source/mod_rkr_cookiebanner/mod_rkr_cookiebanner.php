<?php

/**
 * @version 1.2.1 stable
 * @package RKR Cookie Banner
 * @copyright Copyright (C) 2018 René Kreijveld Webdevelopment, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author url: https://www.renekreijveld.nl
 * @author email email@renekreijveld.nl
 * @developer René Kreijveld
 *
 * Code improvements by dGrammatiko 
 *
 * RKR Cookie Banner is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version. See <http://www.gnu.org/licenses/>.
 *
 * RKR Cookie Banner is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

if (!isset($_COOKIE['rkr_accept_cookies'])) require JModuleHelper::getLayoutPath('mod_rkr_cookiebanner', 'default');
