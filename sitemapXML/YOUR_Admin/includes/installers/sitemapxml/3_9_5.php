<?php
/**
 * SitemapXML Installation
 * @package     SitemapXML
 * @copyright Copyright 2005-2017 Andrew Berezin eCommerce-Service.com
 * @copyright   Copyright 2017 iSO Network [www.isonetwork.net.au]
 * @copyright   Portions Copyright 2003-2017 Zen Cart Development Team
 * @copyright   Portions Copyright 2003 osCommerce
 * @license     http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version     $Id: 3_9_5.php 3.9.5 17.04.2017 15:55:55 AndrewBerezin $
 */

//var_dump(SITEMAPXML_VERSION, $current_version, $installer, (SITEMAPXML_VERSION != $current_version));
if ($current_version != $installer) {
  $ext_modules = new ext_modules;
  $ext_modules->install_configuration_group('SITEMAPXML_', 'BOX_CONFIGURATION_SITEMAPXML', 'SitemapXML', 'sitemapxmlConfig');
  $ext_modules->install_configuration($install_configuration);
}
