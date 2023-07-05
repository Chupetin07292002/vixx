<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM registro WHERE id='$id'";
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
<link rel="stylesheet"href="style.css"rel="stylesheet">
    <div class ="administrador-form">
        <FORM action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?=$row['id']?> ">
            <input type="text" name="name" placeholder="name" value="<?= $row['name'] ?>">
            <input type="text" name="lastname" placeholder="lastname" value="<?= $row['lastname'] ?>">
            <input type="text" name="username" placeholder="username" value="<?= $row['username'] ?>">
            <input type="password" name="password" placeholder="password" value="<?= $row['password'] ?>">
            <input type="email" name="email" placeholder="email" value="<?= $row['email'] ?>">
            <input type="text" name="sexo" placeholder="sexo" value="<?= $row['sexo'] ?>">
            <input type="text" name="curso" placeholder="curso" value="<?= $row['curso'] ?>">
            <input type="text" name="turno" placeholder="turno" value="<?= $row['turno'] ?>">
            <input type="text" name="ciclo" placeholder="ciclo" value="<?= $row['ciclo'] ?>">
            <input type="text" name="monto" placeholder="monto" value="<?= $row['monto'] ?>">
            <input type="text" name="fecha" placeholder="fecha" value="<?= $row['fecha'] ?>">

            <input type="submit" value="actualizar">
        </form>
    </div>

    
</body>
</html>