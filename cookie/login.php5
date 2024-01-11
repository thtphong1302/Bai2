<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "aloalo" && $password == "123123"){
            $cookie_name = "user";
            $cookie_value = $cookie_name;
            $timeline = 60;
            setcookie($cookie_name,$cookie_value,time()+$timeline,"/");
        }
        header("Location: Welcome.php5");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
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
