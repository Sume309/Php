<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max & Min</title>
</head>
<body>
<form action="" method="post">
    <label for="">Enter 1st number</label>
    <input type="text" name="fnumber"><br>

    <label for="">Enter 2nd number</label>
    <input type="text" name="snumber"><br>

    <label for="">Enter 3rd number</label>
    <input type="text" name="tnumber"><br>

    <input type="submit" name="calc">
</form>
</body>
</html>



<?php
if(isset($_POST["calc"])){
$fNumber=$_POST["fnumber"];
$sNumber=$_POST["snumber"];
$tNumber=$_POST["tnumber"];

if($fNumber >= $sNumber && $fNumber >= $tNumber){
    $maxVal = $fNumber;
}
elseif($sNumber >= $fNumber && $sNumber >= $tNumber){
    $maxVal = $sNumber;
}
else{
    $maxVal = $tNumber;
}

if($fNumber <= $sNumber && $fNumber <= $tNumber){
    $minVal = $fNumber;
}
elseif($sNumber <= $fNumber && $sNumber <= $tNumber){
    $minVal = $sNumber;
}
else{
    $minVal = $tNumber;
}

// $maxVal=max($fNumber,$sNumber,$tNumber);
// $minVal=min($fNumber,$sNumber,$tNumber);

echo "<h2> Maximum Value:". $maxVal ."<br></h2>";
echo "<h2> Minimum Value:". $minVal."</h2>";

}

?>