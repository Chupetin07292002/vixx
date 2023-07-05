<?php
include("connection.php");
$con=connection();

$sql="SELECT*FROM registro";
$query=mysqli_query($con,$sql);

?>
<link rel="stylesheet"href="style.css"rel="stylesheet">
<div class="usuario-table">
        <h2>ALUMNOS REGISTRADOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>usuario</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>curso</th>
                    <th>turno</th>
                    <th>ciclo</th>
                    <th>monto</th>
                    <th>fecha</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($query)):?>
                <tr>
                    <th><?=$row["id"]?></th>
                    <th><?=$row["name"]?></th>
                    <th><?=$row["lastname"]?></th>
                    <th><?=$row["username"]?></th>
                    <th><?=$row["password"]?></th>
                    <th><?=$row["email"]?></th>
                    <th><?=$row["sexo"]?></th>
                    <th><?=$row["curso"]?></th>
                    <th><?=$row["turno"]?></th>
                    <th><?=$row["ciclo"]?></th>
                    <th><?=$row["monto"]?></th>
                    <th><?=$row["fecha"]?></th>


                    <th><a href="updat.php?id=<?=$row['id']?>"class="users-table--edit">EDITAR</a></th>
                    <th><a href="delete.php?id=<?=$row['id']?>"class="users-table--edit">ELIMINAR</a></th>
                    
                </tr>
                <?php endwhile;?>
            </tbody>
            <tbody>
            
            <th><a href="index.php" class="users-table--edit">MENU PRINCIPAL</a></th>
            </tbody>
        </table>
    </div>