<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
    <h2>Minh hoa Cookie</h2>
    <?php
        try{
            if(isset($_COOKIE['user'])){
                $username = $_COOKIE['user'];
                echo "Welcome: " .$username;
            }else{
                die("die");
            }
        }catch (Exception $exception){
            echo $exception->getMessage();
        }
    ?>
</body>
</html>