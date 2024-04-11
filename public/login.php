<?php

use SPSOstrov\SSO\SSO;
use SPSOstrov\SSO\SSOUser;

require_once dirname(__DIR__) . "/vendor/autoload.php";

session_start();

$sso = new SSO();
$user = $sso->doLogin();

$_SESSION["user"] = $user;

header("Location: index.php");