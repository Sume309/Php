<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
<form action="" method="post">
    <label for="">Enter your grade value(A+,A,B,C,F)</label>
    <input type="text" name="grade"> <br>
    <input type="submit" name="calc">
</form>
</body>
</html>
<?php
function abc ($z){
    if ($z == "A+") {return "Outstanding";
       
    }
    elseif ($z == "A") {return "Very good";
       
    }
   elseif ($z == "B") {return "Good";
    
}
elseif ($z == "C") {return "Poor";
  
}
else {
return "Fail";
}

}
if(isset($_POST["calc"])){
    $bc=$_POST["grade"];
    $result=abc($bc);
    echo "<b> Result: </b>". $result;
}

?>