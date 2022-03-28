<?php
require "./conf.php";
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $insert = "INSERT INTO `user`(`name`, `pass`) VALUES ('$name', '$pass')";

    $res = $conn->query($insert);
    if ($res) {
        echo "<script>alert('Account Created!')</script>";
        header("location:Login.php");
    } else {
        echo "<script>alert('Sign up Error!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <small>Signup</small>
    <form method="post">
        <small>username </small><input type="text" name="name"><br>
        <small>password </small><input type="text" name="password"><br>
        <input type="submit" value="Signup" name="signup"><br>
        <small><a href="Signup.php">Sign up here</a></small>

    </form>
</body>

</html>