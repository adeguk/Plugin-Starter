<?php
/**
 * @package  PluginStarter
 */

namespace Ldinc\Base;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}