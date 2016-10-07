<?php

namespace SalFay\LaravelHooks;

use Illuminate\Support\Facades\Facade;

class Hooks extends Facade {
	/**
	 * Get the binding in the IoC container
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'LaravelHooks';
	}
}
