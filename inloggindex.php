<?php
session_start();

include_once ('connection.php');
include_once ('login.php');
?>

<!DOCTYPE>
<html>
    <head>
        <title>Shopping</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="inloggstyle.css" type="text/css" />
        <script src="jquery-1.6.4.js" language="javascript"></script>
        <script src="login_popup.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="wrapper">
           <h1>JUST DO IT.</h1>
                    <div id="inlogg">

            <form action="inloggindex.php" method="post">
                Användarnamn:<br>
                <input type="text" name="username" required><br>
                Lösenord:<br>
                <input type="password" name="password" required><br>
                <input type="submit" name="submit" value="Logga in" id="login" class="storknapp">
            </form>

            <p>Inget konto ?</p>
            <a href="javascript:loadContent('#inlogg', 'login_popup.php')">Registrera dig</a>
            <div id="registrera"></div>
        </div>
                </body>
</html>
