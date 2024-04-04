<?php
use SPSOstrov\SSO\SSO;

require_once dirname(__DIR__) . "/vendor/autoload.php";

session_start();

$user = $_SESSION["user"] ?? null;
?>
<!doctype html>
<html>
    <head>
        <style>
            * {margin: 0; padding: 0;}
            div.header { background-color: lightblue; padding: .5em; text-align: right;}
            .sso_user_table {margin: 1em auto;}
        </style>
    </head>
    <body>
        <div class="header">
            <?php if ($user !== null): ?>
                Přihlášený uživatel: <?php echo $user->getName(); ?>
                (<a href="logout.php">odhlásit</a>)
            <?php else: ?>
                Nikdo není přihlášen
                (<a href="login.php">přihlásit</a>)
            <?php endif ?>
        </div>
        <?php if($user !== null): ?>
                <?php $user->prettyPrint(); ?>
        <?php endif ?>
    </body>
</html>