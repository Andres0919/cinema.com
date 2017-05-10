<?php

require('../model/user.php');

$user = new user();
$user->logout();
$user = null;
header("location:../views/index.php");
