<?php

/**
 * Created by PhpStorm.
 * User: vancleipicolli
 * Date: 15/01/2016
 * Time: 13:18
 */
class View{

	public function __construct($viewLoader){
		$this->viewLoader = $viewLoader;
	}

	public function display($viewName){
		echo $this->viewLoader->load($viewName);
	}
}