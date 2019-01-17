<?php
/**
 * @package  PluginStarter
 */

namespace Ldinc\Pages;

use Ldinc\Api\SettingsApi;
use \Ldinc\Base\BaseController;
use Ldinc\Api\Callbacks\AdminCallbacks;

class Admin extends BaseController {

	public $settings;
	public $all_pages = array();
	public $subpages = array();

	/**
	 * Register all page and subpages here
	 */
	public function register() {
		// Call an instance of SettingsApi from SettingsApi
		// via use settingsApi declared above
		$this->settings = new SettingsApi();

		// Call an instance of callbacks from AdminCallbacks
		// via use AdminCallbacks declared above
		$this->callbacks = new AdminCallbacks();

		// Use data from setPages method
		// to Set the required page(s)
		$this->setPages();

		// Use data from setSubpages method
		// to set the subpage(s) when available
		$this->setSubpages();

		$this->settings
			->addPages($this->all_pages)
			->withSubPage('Dashboard')
			->addSubPages($this->subpages)
			->register();
	}

	private function setPages() {
		// Create parent page
		$this->all_pages = [[
			'page_title'    => 'Plugin Starter With Subpage',
			'menu_title'    => 'Plugin Starter',
			'capability'    => 'manage_options',
			'menu_slug'     => 'plugin_starter',
			'callback'      => array( $this->callbacks, 'AdminDashboard' ),
			'icon_url'      => 'dashicons-palmtree',
			'position'      => 20
		]];
	}

	private function setSubpages() {
		// Create list of subpages
		$this->subpages = [
			[
				'parent_slug'   => 'plugin_starter',
				'page_title'    => 'Plugin Starter With Subpage',
				'menu_title'    => 'PS Manager',
				'capability'    => 'manage_options',
				'menu_slug'     => 'plugin_starter_manager',
				'callback'      => array( $this->callbacks, 'psManager' )
			],
			[
				'parent_slug'   => 'plugin_starter',
				'page_title'    => 'Subpage Two',
				'menu_title'    => 'Subpage 2',
				'capability'    => 'manage_options',
				'menu_slug'     => 'subpage_2',
				'callback'      => array( $this->callbacks, 'subpageTwo' )
			],
			[
				'parent_slug'   => 'plugin_starter',
				'page_title'    => 'Subpage Three',
				'menu_title'    => 'Subpage 3',
				'capability'    => 'manage_options',
				'menu_slug'     => 'subpage_3',
				'callback'      => array( $this->callbacks, 'subpageThree' )
			]
		];
	}

}