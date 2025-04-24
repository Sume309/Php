<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial number</title>
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
$bcd=1;
for ($abc; $abc > 1 ; $abc--) {
    $bcd = $bcd*$abc; 
    
}
echo "<b> Factorial value: </b>". $bcd;
}

?>