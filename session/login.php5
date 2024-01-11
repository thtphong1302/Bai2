<?php
    require "init_session.php5";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //Query Database check valid username && password
//        if (){
//        }else{
//            $message = "Invalid";
//        }
        //If exist session_id
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form name="form_login" method="post">
    <fieldset>
        <legend>Thong tin dang nhap</legend>
        <p>
            <label for="username">Username:</label>
            <input name="username" id="username" type="text">
        </p>
        <p>
            <label for="password">Password:</label>
            <input name="password" id="password" type="password">
        </p>
        <p>
            <input type="submit" value="login">
            <input type="reset" value="cancel">
        </p>
    </fieldset>
</form>
</body>
</html>