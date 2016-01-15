<?php
/**
 * Created by PhpStorm.
 * User: vancleipicolli
 * Date: 15/01/2016
 * Time: 13:25
 */

$router->add('/',function() use ($view){
	$view->display('hello.php');
});

$router->add('/about-us',function() use ($view){
	$view->display('about.php');
});