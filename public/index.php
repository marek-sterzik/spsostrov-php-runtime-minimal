<?php

use SPSOstrov\SSO\SSO;
use SPSOstrov\SSO\SSOUser;

require_once dirname(__DIR__) . "/vendor/autoload.php";

session_start();

$user = $_SESSION["user"] ?? null;
?>
<!doctype html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php if ($user !== null): ?>
            <strong><?php echo $user->getName(); ?></strong>
            (<a href="logout.php">odhlásit</a>)
        <?php else: ?>
            Nikdo není přihlášen
            (<a href="login.php">přihlásit</a>)
        <?php endif ?>
    </header>
    <div class="main">
        <?php if ($user !== null): ?>
            <?php $user->prettyPrint(); ?>
        <?php endif ?>
    </div>
</body>