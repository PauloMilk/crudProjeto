<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['cadastros'] = array(
			'route' => '/cadastros',
			'controller' => 'indexController',
			'action' => 'cadastros'
		);

		$this->setRoutes($routes);
	}

}

?>