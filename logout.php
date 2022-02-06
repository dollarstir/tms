<?php
require 'loader/autoloader.php';
 $york = new York();

session_start();

session_destroy();
$york->goto("/tms/login");
 