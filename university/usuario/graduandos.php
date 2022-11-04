<?php include("../assets/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<p class="p-5">
<form action="guardar.php" method="POST" class="row g-3 p-5">
    <h1>Graduandos</h1>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombre y Apellido del Graduando</label>
    <input type="text" class="form-control" name="Nombre_Apellido" id="validationDefault01"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Cedula de Identidad</label>
    <input type="number" class="form-control" name="Cedula" id="validationDefault02"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaul04" class="form-label">Periodo</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="" name="Periodo">Seleccionar Periodo</option>
      <option>2022</option>
      <option>2023</option>
      <option>2024</option>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"></span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Carrera</label>
    <select class="form-select" id="validationDefault04" required>
    <option selected disabled value="" name="Carrera">Seleccionar Carrera</option>
    <option>Tecnología de la información</option>
    <option>Tecnología de Sistemas</option>   
    <option>Administración de Empresas</option> 
    <option>Contaduria</option> 
    <option>Ingeniería Biomedica</option>   
    <option>Ingeniería Mecatrónica</option>   
    <option>Ingeniería Electrónica</option>   
    <option>Ingeniería de Sistemas y Afines</option>
    <option>Estudios Internacionales</option>
    <option>Diseño Gráfico </option>
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="guardar_graduandos" type="submit">Registrar</button>
  </div>
  <div class="col-12">
    <a class="btn btn-primary" href="administrador.php">Regresar</a>
  </div>
</form>
<p class="p-5">
<?php include("../assets/footer.php")?>

