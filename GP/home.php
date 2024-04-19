<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    echo "Welcome " . $_SESSION["std_name"], " ", "<h1>" . $_SESSION["user_type"], "</h1>";
    ?>

</body>

</html>