<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
<form action="" method = "post">
<label for="">Enter user name</label>
<input type="text" name="uname"><br>

<label for="">Enter email</label>
<input type="text" name="email"><br>

<input type="submit" name="calc">

</form>
</body>
</html>


<?php
if(isset($_POST["calc"])){
    $user=$_POST["uname"];
    $email=$_POST["email"];

    $userLength = strlen($user);
    if ($userLength < 4 || $userLength > 8) {
      echo "<h3> Username must be between 4 to 8 characters </h3>";
       
    }
    else {
        echo "<h3> Valid username </h3>";
    }

    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "<h3> Valid email </h3>";
       
    }
    else {
        echo "<h3> Invalid email</h3>";
    }
}

?>