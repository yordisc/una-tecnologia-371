<?php
$user=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['correo']=$correo;

$conn=mysqli_connect("localhost","root","","base_datos_universidad");

$query="SELECT*FROM usuario where correo='$correo' and password='$password'";
$result=mysqli_query($conn,$query);

$rows=mysqli_fetch_array($result);

if($rows['id_rol']==1){ //manager
    header("location: administrador/administrador.php");

}else
if($rows['id_rol']==2){ //users
header("location: usuario/usuario.php");
}
else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($result);
mysqli_close($conn);