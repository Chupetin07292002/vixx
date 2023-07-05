<?php
include("connection.php");
$con=connection();

$id=null;
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$sexo=$_POST["sexo"];
$curso=$_POST["curso"];
$turno=$_POST["turno"];
$ciclo=$_POST["ciclo"];
$monto=$_POST["monto"];
$fecha=$_POST["fecha"];



$sql="INSERT INTO registro
values('$id','$name','$lastname','$username','$password','$email','$sexo','$curso','$turno','$ciclo','$monto','$fecha')";
$query=mysqli_query($con,$sql);
if($query){
    header("location:index.php");
}
else{

}
