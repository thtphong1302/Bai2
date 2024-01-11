<?php
    require "init_session.php5";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <h2>
        Successfully :
        <?php
            echo $_SESSION['counter']
        ?>
        time(s)
    </h2>
</body>
</html>
