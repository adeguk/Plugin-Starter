<?php
/**
 * @package  PluginStarter
 */

/*
Plugin Name: Plugin Starter
Plugin URI: https://digital.loggcity.co.uk/downloads/wp-plugin-starters
Description: Scaffold of OOP WordPress plugin starter with subpage for a multi-page plugin creation.
Version: 1.0.0
Author: Adewale Adegoroye
Author URI: https://waleadegoroye.com
License: GPLv2 or later
Text Domain: plugin-starter

******************************************************************************************
  Copyright (C) 2019 Adewale Adegoroye

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*******************************************************************************************/

  // If this file is called firectly, abort!!!
  defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

  // Require once the Composer Autoload
  if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
  	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
  }

  /**
   * The code that runs during plugin activation
   */
  function activate_plugin_starter() {
  	Ldinc\Base\Activate::activate();
  }
  register_activation_hook( __FILE__, 'activate_plugin_starter' );

  /**
   * The code that runs during plugin deactivation
   */
  function deactivate_plugin_starter() {
  	Ldinc\Base\Deactivate::deactivate();
  }
  register_deactivation_hook( __FILE__, 'deactivate_plugin_starter' );

  /**
   * Initialize all the core classes of the plugin
   * using Ldinc as my namespace alias
   */
  if ( class_exists( 'Ldinc\\Init' ) ) {
  	Ldinc\Init::register_services();
  }