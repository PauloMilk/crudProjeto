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
		$routes['cadastroFuncionario'] = array(
			'route' => '/cadastros/funcionario',
			'controller' => 'indexController',
			'action' => 'cadastroFuncionario'
		);

		$routes['cadastroDepartamento'] = array(
			'route' => '/cadastros/departamento',
			'controller' => 'indexController',
			'action' => 'cadastroDepartamento'
		);

		$routes['cadastroProjeto'] = array(
			'route' => '/cadastros/projeto',
			'controller' => 'indexController',
			'action' => 'cadastroProjeto'
		);

		$this->setRoutes($routes);
	}

}

?>