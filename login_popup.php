<?php
session_start();  

include ('connection.php'); // Databasanslutningen 



?>
<script src="login_reg.js" type="text/javascript"></script>
<h3>Registrera dig</h3>
<form name="regForm" action="" method="post" onSubmit="return validateForm ();"> 
Förnamn:<br>
<input type="text" name="firstname"><br>
Efternamn:<br>
<input type="text" name="lastname"><br>
Email:<br>
<input type="text" name="email"><br>
Lösenord:<br>
<input type="password" name="password"><br>
Bekräfta lösenord:<br>
<input type="password" name="confirmPassword"><br>
Användarnamn:<br>
<input type="text" name="username"><br><br>
<input type="submit" name="regsubmit" value="Spara dina uppgifter" id="save" class="storknapp"><br><br>
<a href="">Till inloggningssidan...</a>
</form>
<?php
    
if (isset($_POST['regsubmit'])){
   

     if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword']) || 
        empty($_POST['username'])) {
         echo "Alla fält är inte ifyllda.";
         echo "<br/> ";
     }
    
      // Kolla om e-post kan tänkas vara ok
  else if (!preg_match('/^[-A-Za-z0-9_.]+[@][A-Za-z0-9_-]+([.][A-Za-z0-9_-]+)*[.][A-Za-z]{2,6}$/', $_POST['email'])) {
     echo "Ogiltig emailadress";    
   }
   
   else{
    
     $sql = "INSERT INTO user(firstname,lastname,email,username,password)
             VALUES('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['email']}','{$_POST['password']}','{$_POST['username']}')";
     mysql_query($sql);

     $_SESSION['sess_id'] = mysql_insert_id();
     $_SESSION['sess_username'] = $_POST['username'];
     
     exit;
   }
   
   
}
    
?>



