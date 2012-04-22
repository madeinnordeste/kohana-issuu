<?php defined('SYSPATH') or die('No direct script access.');

#route for Issuu example
Route::set('issuu', 'issuu(/<controller>(/<action>(/<id>(/<param_a>(/<param_b>(/<param_c>(/<param_d>)))))))')
		->defaults(array(
			'directory' => 'issuu',
			'controller' => 'examples',
			'action' => 'index',
		));



