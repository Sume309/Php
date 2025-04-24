<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales amount</title>
</head>
<body>
<form action="" method="post">
    <label for="">Enter your total sales amount</label>
    <input type="text" name="amount"><br>
    <input type="submit" name="calc">
</form>
</body>
</html>




<?php 
function abc ($z){
    if ($z>5000) {return $z*0.10;
    }
    else {
    return $z*0;
    }
}

if(isset($_POST["calc"])){
    $bc=$_POST["amount"];
    $result = abc($bc);
    echo "<b>Sales amount:</b> ".$bc."<br><b>Discount amount:</b>".$result;
}

?>