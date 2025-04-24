<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number</title>
</head>
<body>
<form action="" method="post">
    <label for="">Enter number</label>
    <input type="number" name="number"><br>
    <input type="submit" name="calc">
</form>

</body>
</html>




<?php
if(isset($_POST["calc"])){
   $abc=$_POST["number"];
   $bcd="Prime number";
   for ($i=2; $i < $abc ; $i++) { 
    if ($abc % $i == 0) {
$bcd = "Not prime";
      
    }
   } 

   echo "<b>  $bcd </b>";
}

?>

