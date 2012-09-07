<?php
session_start();  

include ('connection.php'); // Databasanslutningen 



?>
<link rel="stylesheet" type="text/css" href="sokruta.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

<div id="sokwrapper">

		<div id="sokruta" >
			<form>
			<input autofocus="autofocus" type="text" name="sokrubrik" id="sokrubrik" class="sok" placeholder="Sök på recept eller råvara..." value="">
			<input name="sokknapp" type="submit" value="Sök" id="sokknapp" class="sokknapp">
			</form>
		</div>
</div>
<div id="add">
	<h3>lägg till recept</h3>
	<form method="post" action="">
	title:<br>
	<input type="text" name="title" required>
	<br>
	description: <br>
	<input type="text" name="description" required>
	<br><br>
	ingredient_id: <br>
	<input type="text" name="ingredient_id" required>
	<br><br>
	amount: <br>
	<input type="text" name="amount" required>
	<br><br>
	<div class="floatleft">unitsid:</div>
	<select name="unitsid" required class="floatleftb">
		<optgroup label="vätska">
			<option value="l">Liter (l)</option>
			<option value="dl">Deciliter (dl)</option>
			<option value="cl">Centiliter (cl)</option>
			<option value="ml">Milliliter (ml)</option>
		</optgroup>
		<optgroup label="Mängd">
			<option value="kg">Kilo (kg)</option>
			<option value="hg">Hekto (hg)</option>
			<option value="g">gram (g)</option>
			<option value="mg">Milligram (mg)</option>
		</optgroup>
	</select>
	<input type="submit" name="Submit" value="Lägg till" class="floatright">
	</form>
</div>
<?php

if (isset($_POST['submit'])){
   

     if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['ingredient_id']) || empty($_POST['amount']) || empty($_POST['unitsid']) || 
        empty($_POST['username'])) {
         echo "Alla fält är inte ifyllda.";
         echo "<br/> ";
     }
    
      
 else{
    
     $sql = "INSERT INTO $recipe(title,description,ingredient_id,amount,unitsid)
             VALUES('{$_POST['title']}','{$_POST['description']}','{$_POST['ingredient_id']}','{$_POST['amount']}','{$_POST['unitsid']}')";
     mysql_query($sql);
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


mysql_close($conn);

   }
   
   
}
    
?>