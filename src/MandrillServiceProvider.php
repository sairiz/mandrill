<?php namespace Sairiz\Mandrill;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class MandrillServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->package('sairiz/mandrill', null, __DIR__);
	}	

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['mandrill'] = $this->app->share(function($app)
		{
			return new Mandrill($app['config']['mandrill::apiKey']);
		});

		$this->app->booting(function()
		{
			$loader = AliasLoader::getInstance();
			$loader->alias('Email','Sairiz\Mandrill\Facades\Mandrill');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('mandrill');
	}

}