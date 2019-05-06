<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function cadastros() {
		$this->render('cadastros');
	}

	public function cadastroFuncionario() {
		$this->render('cadastros/formFuncionario');
	}

	public function cadastroDepartamento() {
		$this->render('cadastros/formDepartamento');
	}

	public function cadastroProjeto() {
		$this->render('cadastros/formProjeto');
	}

}


?>