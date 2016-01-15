<?php

/**
 * Created by PhpStorm.
 * User: vancleipicolli
 * Date: 15/01/2016
 * Time: 12:54
 */
class ViewLoader{

	public function __construct($path){
		$this->path = $path;
	}

	public function load($viewName){
		if( file_exists($this->path.$viewName) ){
			return file_get_contents($this->path.$viewName);
		}
		throw new Exception("View does not exist: ".$this->path.$viewName);
	}
}