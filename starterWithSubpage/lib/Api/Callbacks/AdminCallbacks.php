<?php
/**
 * Created by PhpStorm.
 * User: Adewale Adegoroye
 * Date: 17/01/2019
 * Time: 08:38
 */

namespace Ldinc\Api\Callbacks;

use Ldinc\Base\BaseController;

class AdminCallbacks extends BaseController {
	public function adminDashboard(  ) {
		return require_once ("$this->plugin_path/templates/admin.php");
	}

	public function psManager(  ) {
		return require_once ("$this->plugin_path/templates/ps-manager.php");
	}

	public function subpageTwo(  ) {
		return require_once ("$this->plugin_path/templates/subpage-2.php");
	}

	public function subpageThree(  ) {
		return require_once ("$this->plugin_path/templates/subpage-3.php");
	}
}