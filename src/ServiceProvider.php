<?php
namespace Rocketeer\Plugins\Hipchat;

use Rocketeer\Facades\Rocketeer;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	/**
	 * Stub register method.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register configuration.
		$package = 'hannesvdvreken/rocketeer-hipchat';
		$this->app['config']->package($package, base_path() .'/vendor/'. $package .'/config');
	}

	/**
	 * Boot method
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app['config']->get('rocketeer-hipchat::config.enabled')) {
			$this->app['rocketeer.tasks']->plugin('Rocketeer\Plugins\Hipchat\Notifier');
		}
	}
}