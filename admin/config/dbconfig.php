<?php
session_start();

// define('HOST', 'localhost');
// define('USERNAME', 'root');
// define('PASSWORD', '');
// define('DBNAME', 'godsonpius');
define('HOST', 'localhost');
define('USERNAME', 'worlgmig_godsonpius');
define('PASSWORD', '100%godsonpius');
define('DBNAME', 'worlgmig_godsonpius');

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

require_once "functions.php";
require_once 'user_functions.php';