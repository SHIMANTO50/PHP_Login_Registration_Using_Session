<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login form</title>
</head>

<body>
    <div class="container">
        <h1>Login Form</h1>
        <hr>
    </div>
    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary" name="btnclick">Login!</button>
        </form>

    </div>
</body>

</html>

<!------------------------php code ------------------------>

<?php

if (isset($_POST["btnclick"])) {

    $email_id = $_POST["email_id"];
    $password = $_POST["password"];

    $_SESSION["status"] = false;

    //condition for checking valid input from user

    if ($email_id == "abc@gmail.com" && $password == "1234") {

        $_SESSION["email_id"] = $email_id;
        $_SESSION["status"] = true;
        header("Location: welcome.php");
    } else {
        echo "invalid credentials";
    }
}

?>