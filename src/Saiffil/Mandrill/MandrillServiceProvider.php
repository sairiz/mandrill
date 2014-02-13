<?php namespace Saiffil\Mandrill;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Config;

class MandrillServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->package('saiffil/mandrill');
	}	

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['mandrill'] = $this->app->share(function()
		{
			return new Mandrill(Config::get('mandrill::apiKey'));
		});

		$this->app->booting(function()
		{
			$loader = AliasLoader::getInstance();
			$loader->alias('Email','Saiffil\Mandrill\Facades\Mandrill');
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