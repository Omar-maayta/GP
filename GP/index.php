<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"> <?php echo $_GET['error'] ;?> </p>
            <?php } ?>
        <div class="regster">
            <label for="uname">Username</label>
            <input id="uname" type="text" name="user_name" placeholder="User Name"> <br>
        </div>
        <div class="regster">
            <label for="upass">Password</label>
            <input id="upass" type="password" name="password" placeholder="Password"> <br>
        </div>
        <div class="button">
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>