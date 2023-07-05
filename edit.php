<?php
include("connection.php");
$con = connection();

$id =$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$sexo=$_POST["sexo"];
$curso=$_POST["curso"];
$turno=$_POST["turno"];
$ciclo=$_POST["ciclo"];
$monto=$_POST["monto"];
$fecha=$_POST["fecha"];

$sql="UPDATE registro SET name='$name',
lastname='$lastname', username='$username',
password='$password', email='$email', sexo='$sexo',
 curso='$curso', turno='$turno', ciclo='$ciclo', monto='$monto'
 , fecha='$fecha' WHERE id='$id'";

$query = mysqli_query($con, $sql);

if($query) {
    header("location: index.php");
}else{

}
?>