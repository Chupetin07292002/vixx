<?php
include("connection.php");
$con=connection();

$sql="SELECT*FROM usuarios";
$query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css"rel="stylesheet">
    <title>USUARIOS</title>
</head>
<body> 

<div class="administrador-form">

        <h1>BIENVENIDOS </h1>
        <div class="home7-custom-column-1 wpb_column vc_column_container vc_col-sm-7"><div class="vc_column-inner vc_custom_1536841877459"><div class="wpb_wrapper"><div class="rt-vc-text-title  style4" style="">
			<h2 class="rtin-title">CETPRO ILAVE</h2>
				<p class="rtin-content">&nbsp;</p>
<h3><span style="vertical-align: inherit"><span style="vertical-align: inherit">Centro de Educación Técnico Productiva.</span></span></h3>
<p>Somos una institución educativa lider en la formación tecnológica de la Región Puno, Contamos con una gran experiencia en la capacitación modular que permite insertar a nuestros capacitandos al mercado laboral.</p>
<p>Contamos con infraestructura propia y adecuada para la enseñanza – aprendizaje en situaciones reales de trabajo.</p>
				<div class="rtin-btn">
	</div></div></div></div>
        </form>
    </div>

</body>


<body>
    <div class ="users-form">
        
            <h1>CREAR USUARIO</h1>
            <form action="insert_user.php" method="post">
            <input type="text"name="name"placeholder="name"></br>
            <input type="text"name="lastname"placeholder="lastname"></br>
            <input type="text"name="username"placeholder="username"></br>
            <input type="password"name="password"placeholder="password"></br>
            <input type="email"name="email"placeholder="email"></br>
            <input type="submit"value="agregar usuario"></br>

           
            <a name="" id="" class="btn btn-primary" href="crear.php" role="button">crear registros</a>
            <a name="" id="" class="btn btn-primary" href="usuario.php" role="button">usuarios registrados</a>
            <a name="" id="" class="btn btn-primary" href="alu.php" role="button">alumnos registrados</a>
    </div>
</body>
 