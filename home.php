<?php session_start();

if ($_SESSION['status'] != true) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>

<body>
    <p>welcome <?php echo $_SESSION['name']; ?></p>
    <a href="logout.php">logout</a>
</body>

</html>