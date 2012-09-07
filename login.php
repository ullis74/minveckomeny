<?php
include_once ('connection.php');

?>

<!DOCTYPE>
<html>
    <head>
        <title>Shopping</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="inloggstyle.css" type="text/css" />
        <script src="jquery-1.6.4.js" language="javascript"></script>
        

    </head>
    <body>
    </body>
</html>
<?php
// Om inte inloggad visa formulär, annars logga ut-länk 
if (!isset($_SESSION['sess_user'])){

   // Visa felmeddelande vid felaktig inloggning 
   if (isset($_GET['wronglogin'])){
      echo "Fel användarnamn eller lösenord!<br>\n";
      echo "Försök igen!\n";
   }
      echo "<a href=\"inloggindex.php?logout=\">Logga ut</a>";
}

//När man tryckt på logga in, kollar om användaren finns//

if (isset($_POST['submit'])){

   $sql = "SELECT id FROM user
   WHERE username='{$_POST['username']}'
   AND password='{$_POST['password']}'";
   $result = mysql_query($sql);

   // Hittades inte användarnamn och lösenord 
   // skicka till formulär med felmeddelande 
   if (mysql_num_rows($result) == 0){
     header("Location: inloggindex.php?wronglogin=");
     exit;
   }

   // Sätt sessionen med unikt index 
   $_SESSION['sess_id'] = mysql_result($result, 0);
   $_SESSION['sess_user'] = $_POST['user'];
   header("Location: login.php");
   exit;
}

// Utloggning 
if (isset($_GET['logout'])){
   session_unset();
   session_destroy();
   header("Location: inloggindex.php");
   exit;
}  

?>


