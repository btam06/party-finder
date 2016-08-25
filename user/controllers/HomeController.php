<?php

use Inkwell\Controller;

class HomeController extends Controller\BaseController
{

	public function __construct(Inkwell\View $view) {
		$this->view = $view;
	}

	public function main() {

		return $this->view->load('master.html');
	}

}
