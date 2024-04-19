<?php
session_start();
include("db_conn.php");
if (isset($_POST["user_name"]) && isset($_POST["password"])) {

    function validate($data)
    {
        $data = trim($data); // remove the space from lest and right
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST["user_name"]);
    $pass = validate($_POST["password"]);

    if (empty($username) && empty($pass)) {
        header("Location: index.php?error=User Name and Password is requierd");
        exit();
    } else if (empty($username)) {
        header("Location: index.php?error=User Name is requierd");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Password is requierd");
        exit();
    } else {

        $sql = "SELECT * FROM students WHERE std_name ='$username' AND std_password = '$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row["std_name"] === $username && $row["std_password"] === $pass) {
                $_SESSION["std_name"] = $row["std_name"];
                $_SESSION["std_col"] = $row["std_col"];
                $_SESSION["id"] = $row["id"];
                $_SESSION["user_type"] = $row["user_type"];
                header("Location: home.php");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorect User name or Password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
