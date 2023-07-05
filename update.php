<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar usuarios</title>
</head>
<body>
    <div class ="administrador-form">
        <FORM action="edith.php" method="POST">
            <input type="hidden" name="id" value="<?=$row['id']?> ">
            <input type="text" name="name" placeholder="name" value="<?= $row['name'] ?>">
            <input type="text" name="lastname" placeholder="lastname" value="<?= $row['lastname'] ?>">
            <input type="text" name="username" placeholder="username" value="<?= $row['username'] ?>">
            <input type="password" name="password" placeholder="password" value="<?= $row['password'] ?>">
            <input type="email" name="email" placeholder="email" value="<?= $row['email'] ?>">

            <input type="submit" value="actualizar">
        </form>
    </div>

    
</body>
</html>