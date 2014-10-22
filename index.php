<!--frank-->
 <?php require("validation.php"); ?>

<!DOCTYPE HTML>

<html>
   <head>
		<title>2. periood -6 ja 7-praktikum</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		.form_message{
			font-weight: bold;
		}
      .form_error{
         color: red;
      }
   .form_notice{
         color: green;
      }
		</style>
  
   </head>
  
 <body>
   	<pre><?php print_r($_POST); ?></pre>	
      

<form action="index.php" method="post">
   	
   <div class= "form_message">
   	<?php if ($isSubmitted) {echo $usernameMessage;}?>
   		
         <label for="username">Kasutajanimi:</label>
   	
      <input id="username" type="text" name="username">
   </div>
   <br>
   <div class= "form_message">
      <?php  if ($isSubmitted) {echo $ageMessage;}?>
         
         <label for="age">Vanus:</label>
      
      <input id="age" type="text" name="age">
   </div>
   <br>
     <div class= "form_message">
      <?php  if ($isSubmitted) {echo $foodMessage;}?>
         
         <label for="name">Food:</label>
      
      <input id="food" type="text" name="food">
   </div>
   <div>
   	
      <input type="submit" value="Saada" name="submit">
  
   </div>

</form>
</body>
</html>
