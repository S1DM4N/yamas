<?php
require_once "classes/Database.php";

session_start([
    'cookie_lifetime' => 50000000,
]);

if (empty($_SESSION['id_user'])) {
    $_SESSION['id_user'] = 0;
}

if (!defined('ROOT')) define('ROOT', "C:\xampp\htdocs\yamas");

//URLROOT (Dynamic links)
define('URLROOT', 'http://localhost/yamas/');
