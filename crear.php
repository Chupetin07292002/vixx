<?php
include("connection.php");
$con=connection();

$sql="SELECT*FROM registro";
$query=mysqli_query($con,$sql);

?>
<link rel="stylesheet"href="style.css"rel="stylesheet">
<body>
    <div class ="users-form">
        
            <h1>INGRESAR DATOS DEL NUEVO ESTUDIANTE</h1>
            <form action="insert.php" method="post">
                
            <input type="text"name="name"placeholder="name"></br>
            <input type="text"name="lastname"placeholder="lastname"></br>
            <input type="text"name="username"placeholder="username"></br>
            <input type="password"name="password"placeholder="password"></br>
            <input type="email"name="email"placeholder="email"></br>
            <input type="sexo"name="sexo"placeholder="sexo"></br>
            <input type="curso"name="curso"placeholder="curso"></br>
            <input type="turno"name="turno"placeholder="turno"></br>
            <input type="ciclo"name="ciclo"placeholder="ciclo"></br>
            <input type="monto"name="monto"placeholder="monto"></br>
            <input type="fecha"name="fecha"placeholder="fecha"></br>
            <input type="submit"value="agregar usuario"></br>

           
            
    </div>
</body>