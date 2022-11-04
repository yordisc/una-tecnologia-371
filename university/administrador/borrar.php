<?php
include("bdAdmin.php");

/*Borrar Tabla de Calificaciones*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM calificaciones WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: tabla_calificaciones.php");
}

/*Borrar Tabla de graduandos */
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM graduandos WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: tabla_graduandos.php");
}

/*Borrar Tabla de pago_estudiantes */
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM pago_estudiantes WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: tabla_pago_estudiantes.php");
}

/*Borrar Tabla de proyectos*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM proyectos WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: tabla_proyectos.php");
}

/*Borrar Tabla de Titulaciones*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM titulaciones WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: tabla_tutores.php");
}

/*Borrar Tabla de Tutores*/
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="DELETE FROM tutores WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Task Removed Succefuly';
    $_SESSION['message_type'] = 'danger';
    header("Location: tabla_tutores.php");
}

?>