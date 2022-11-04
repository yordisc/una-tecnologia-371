<?php
include("bdAdmin.php");

if (isset($_POST['guardar_calificaciones'])){
    $nombre = $_POST['Asignatura'];
    $calificacion= $_POST['Calificacion'];
    $estudiante= $_POST['Estudiante'];
    $semestre= $_POST['Semestre'];

    $query = "INSERT INTO calificaciones(Asignatura,Calificacion,Estudiante,Semestre) 
    VALUES ('$asignatura','$calificacion','$estudiante','$semestre')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: calificaciones.php");
} 

if (isset($_POST['guardar_graduandos'])){
    $Nombre_Apellido = $_POST['Nombre_Apellido'];
    $Cedula= $_POST['Cedula'];
    $Periodo= $_POST['Periodo'];
    $Carrera= $_POST['Carrera'];

    $query = "INSERT INTO graduandos(Nombre_Apellido,Cedula,Periodo,Carrera) 
    VALUES ('$Nombre_Apellido','$Cedula','$Periodo','$Carrera')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: graduandos.php");
} 

if (isset($_POST['guardar_pago_estudiantes'])){
    $Numero = $_POST['Numero'];
    $Mes_venc= $_POST['Mes_venc'];
    $year_venc= $_POST['year_venc'];
    $CVV= $_POST['CVV'];

    $query = "INSERT INTO pago_estudiantes(Numero,Mes_venc,year_venc,CVV) 
    VALUES ('$Numero','$Mes_venc','$year_venc','$CVV')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: pago_estudiantes.php");
} 

if (isset($_POST['guardar_proyectos'])){
    $Nombre_estudiante = $_POST['Nombre_estudiante'];
    $Nombre_proyecto= $_POST['Nombre_proyecto'];
    $Nombre_tutor= $_POST['Nombre_tutor'];
    $Facultad= $_POST['Facultad'];
    $Carrera =$_POST['Carrera'];

    $query = "INSERT INTO proyectos(Nombre_estudiante,Nombre_proyecto,Nombre_tutor,Facultad,Carrera) 
    VALUES ('$Nombre_estudiante','$Nombre_proyecto','$Nombre_tutor','$Facultad','$Carrera')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: proyectos.php");
} 

if (isset($_POST['guardar_titulaciones'])){
    $Nombre_Graduando = $_POST['Nombre_Graduando'];
    $Fecha_Entrega= $_POST['Fecha_Entrega'];
    $Estado_Entrega= $_POST['Estado_Entrega'];
    $Facultad= $_POST['Facultad'];
    $Carrera =$_POST['Carrera'];

    $query = "INSERT INTO titulaciones(Nombre_Graduando,Fecha_Entrega,Estado_Entrega,Facultad,Carrera) 
    VALUES ('$Nombre_Graduando','$Fecha_Entrega','$Estado_Entrega','$Facultad','$Carrera')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: titulaciones.php");
} 

if (isset($_POST['guardar_tutores'])){
    $Nombre_Tutor= $_POST['Nombre_Tutor'];
    $Nombre_proyecto= $_POST['Nombre_proyecto'];
    $Estado_Entrega= $_POST['Estudiante'];
    $Carrera =$_POST['Carrera'];

    $query = "INSERT INTO tutores(Nombre_Tutor,Nombre_proyecto,Estudiante,Carrera) 
    VALUES ('$Nombre_Tutor','$Nombre_proyecto','$Estudiante','$Carrera')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: titulaciones.php");
} 

if (isset($_POST['guardar_registro'])){
    $Nombre= $_POST['Nombre'];
    $Correo= $_POST['Correo'];
    $Password= $_POST['Password'];
    $Fecha_Nac =$_POST['Fecha_Nac'];
    $Direccion=$_POST['Direccion'];
    $Cedula_de_Identidad =$_POST['Cedula_de_Identidad'];
    $Discapacidad =$_POST['Discapacidad'];
    $Telefono =$_POST['Telefono'];
    $Telefono_Local=$_POST['Telefono_Local'];
    $Carrera=$_POST['Carrera'];
    $Modalidad=$_POST['Modalidad'];
    $Turno =$_POST['Turno'];

    $query = "INSERT INTO registro(Nombre,correo,password,Fecha_Nac,Direccion,Cedula_de_Identidad,Discapacidad,Telefono
    ,Telefono_Local,Carrera,Modalidad,Turno) 
    VALUES ('$Nombre','$Correo','$Password','$Direccion','$Cedula_de_Identidad','$Discapacidad','$Telefono'
    ,$Telefono_Local,'$Carrera','$Modalidad','$Turno')";
   $result = mysqli_query($conn,$query);
if(!$result){
    die("Query Failed");
}
$_SESSION['message'] = 'Task Saved succesfully';
$_SESSION['message_type'] = 'success';
header("Location: registro.php");
} 


?>