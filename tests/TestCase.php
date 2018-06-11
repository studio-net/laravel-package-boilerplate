<?php
namespace StudioNet\%%PROJECT_NAME%%\Test;

use StudioNet\%%PROJECT_NAME%%\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra {
	/**
	 * getPackageProviders
	 *
	 * @param \Illuminate\Foundation\Application $app
	 * @return array
	 */
	protected function getPackageProviders($app) {
		return [
			ServiceProvider::class,
		];
	}

	/**
	 * Set up the environment.
	 *
	 * @param \Illuminate\Foundation\Application $app
	 */
	protected function getEnvironmentSetUp($app) {
		// ...
	}
}
