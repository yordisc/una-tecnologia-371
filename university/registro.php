<?php
include("./administrador/bdAdmin.php")
?>
<?php include("assets/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<form action="./administrador/guardar.php" method="post">
<section class="p-5">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-8">
        <img src="./img/registro.png" class="img-fluid"
          alt="Sample image">
      
       <!-- Email input -->
       
       <div class="container pt-5" >
<h1  style="margin-left:20%;">Registro</h1>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1">Nombre y Apellido</label>
  <input type="name" class="form-control input-log" style="width:50%" name="name">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1">Correo Electrónico</label>
    <input type="email" class="form-control input-log" style="width:50%"  name="email">
  </div>
  <div class="mb-3 ">
  <label for="exampleFormControlTextarea1">contraseña</label>
    <input type="password" class="form-control input-log" style="width:50%" name="password" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Fecha de Nacimiento</label>
    <input type="date" name="Fecha_Nac" step="1" min="2021-01-01" max="2030-12-31" style="width:23rem" value="<?php echo date("Y-m-d");?>"> 
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Dirección</label>
    <input type="text" class="form-control" style="width:30rem" name="direccion" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Cedula de Identidad</label>
    <input type="text" class="form-control" style="width:30rem" name="Cedula_de_Identidad" id="formGroupExampleInput" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">¿Tiene una discapacidad?</label>
    <select class="form-control" style="width:30rem" name="Discapacidad" >
      <option>Si</option>
      <option>No</option>
    </select>
    <h2>Información de Contacto</h2>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Telefono</label>
    <input type="text" class="form-control" style="width:30rem" name="Telefono" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Telefono local</label>
    <input type="text" class="form-control" style="width:30rem" name="Telefono_Local" >
  </div>
  <h2>Información de Carrera</h2>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Seleccionar Carrera</label>
    <select class="form-control" style="width:30rem" name="Carrera" >
    <option>Tecnología de la información</option>
    <option>Tecnología de Sistemas</option>   
    <option>Administración de Empresas</option> 
    <option>Contaduria</option> 
    <option>Ingeniería Multimedia</option>   
    <option>Ingeniería Mecatrónica</option>   
    <option>Ingeniería Electrónica</option>   
    <option>Ingeniería de Sistemas y Afines</option>
    <option>Estudios Internacionales</option>
    <option>Diseño Gráfico </option>
    </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Modalidad</label>
    <select class="form-control" style="width:30rem" name="Modalidad" >
      <option>Presencial</option>
      <option>Semipresencial</option>
      <option>Online</option>
    </select>
  </div>
  <div class="form-group pb-2">
    <label for="exampleFormControlSelect1">Turno</label>
    <select class="form-control" style="width:30rem" name="Turno" >
      <option>Dia</option>
      <option>Tarde</option>
      <option>Noche</option>
    </select>
  </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5" style="margin-left:20%;" name="guardar_registro" value="submit" style="margin-bottom: 15px;" >Submit</button>
  </div>
  </div>
</form>
<?php include("assets/footer.php")?>

