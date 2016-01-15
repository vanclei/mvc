<?php
/**
 * Created by PhpStorm.
 * User: vancleipicolli
 * Date: 15/01/2016
 * Time: 13:22
 */

require('config.php');

require('core/autoload/autoload.php');

$autoloader = new Autoload();

spl_autoload_register([$autoloader, 'load']);

$autoloader->register('viewloader', function(){
	return require(BASEPATH.'/core/view/viewLoader.php');
});

$view = new View( new ViewLoader(BASEPATH.'/views/') );
$router = new Router();