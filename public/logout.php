<?php
use SPSOstrov\SSO\SSO;

require_once dirname(__DIR__) . "/vendor/autoload.php";

session_start();

$_SESSION["user"] = null;

header("Location: index.php");

