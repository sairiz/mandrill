<?php namespace Saiffil\Mandrill\Facades;

use Illuminate\Support\Facades\Facade;

class Mandrill extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return  string
	 */
	protected static function getFacadeAccessor() { return 'mandrill'; }
}