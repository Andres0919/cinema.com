<?php
$path = 'controller/'.(!isset($_GET['controller']) ? 'indexController.php' : $_GET['controller'].'Controller.php');
if(!file_exists($path))  die('controller no exist');
require($path);