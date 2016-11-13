<?php
/**
 * SitemapXML Installation
 * @package     SitemapXML
 * @copyright Copyright 2005-2016 Andrew Berezin eCommerce-Service.com
 * @copyright   Copyright 2016 iSO Network [www.isonetwork.net.au]
 * @copyright   Portions Copyright 2003-2016 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     $Id: 3_9_2.php 3.9.2 09.11.2016 13:37:18 AndrewBerezin $
 */

require_once(DIR_WS_MODULES . 'sitemapxml_install.php');
//var_dump(SITEMAPXML_VERSION, $current_version, (SITEMAPXML_VERSION != $current_version));
if (SITEMAPXML_VERSION != $current_version) {
  require_once(DIR_WS_CLASSES . 'ext_modules.php');
  $ext_modules = new ext_modules;
  $ext_modules->install_configuration_group('SITEMAPXML_', 'BOX_CONFIGURATION_SITEMAPXML', 'SitemapXML', 'sitemapxmlConfig');
  $ext_modules->install_configuration($install_configuration);
}