<?php
/**
 * Developer: Alvin Gil Saldaña.
 * @copyright	Copyright © 2023 - All rights reserved.
 * @license		GNU General Public License v2.0
 */
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_darkmodetoggle/assets/css/style.css");
require JModuleHelper::getLayoutPath('mod_darkmodetoggle', $params->get('layout', 'default'));
