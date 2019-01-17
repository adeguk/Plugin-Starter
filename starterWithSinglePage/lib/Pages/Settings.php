<?php
/**
 * @package  PluginStarter
 */

namespace Ldinc\Pages;

use \Ldinc\Base\BaseController;

class Settings extends BaseController {
	
	public function register() {
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
	}

	public function add_admin_pages() {
		add_menu_page( 'Plugin Starter', 'Plugin Starter', 'manage_options', 'plugin_starter', array( $this, 'settings_index' ), 'dashicons-store', 20 );
	}

	public function settings_index() {
		$this->plugin_path . '/templates/settings.php';
	}
}