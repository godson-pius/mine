<?php
require_once "config/dbconfig.php";

session_destroy();

redirect("sign-in.php");
