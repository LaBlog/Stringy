<?php namespace Lablog\Stringy;

use Illuminate\Support\ServiceProvider;

class StringyServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('lablog/stringy');

		$twig = \Config::get('twigbridge::extensions');

		$twig[] = 'Lablog\Stringy\Twig\StringyLoader';

		\Config::set('twigbridge::extensions', $twig);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
