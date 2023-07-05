<?php

include("connection.php");
$con = connection();
$id = $_GET["id"];

$sql="DELETE FROM registro WHERE id='$id'";
$query = mysqli_query($con, $sql); 

$sql="DELETE FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql); 

if($query){
    header("location: index.php");
}else {

}
?>