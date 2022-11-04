<?php
include("bdAdmin.php");
?>
<?php include("../assets/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<p class="p-5">
<form  action="guardar.php" method="POST" class="row g-3 p-5">
    <h1>Registro de Calificaciones</h1>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Asignatura</label>
    <input type="text" class="form-control"  name="Asignatura" id="validationDefault01"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Calificación</label>
    <input type="number" class="form-control" name="Calificacion" id="validationDefault02"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" name="Semestre" class="form-label">Estudiante</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"></span>
      <input type="text" class="form-control" name="Estudiante" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Semestre</label>
    <select class="form-select" name="Semestre" id="validationDefault04" required>
      <option selected disabled value="">Seleccionar Semestre</option>
      <option>Semestre 1</option>
      <option>Semestre 2</option>
      <option>Semestre 3</option>
      <option>Semestre 4</option>
      <option>Semestre 5</option>
      <option>Semestre 6</option>
      <option>Semestre 7</option>
      <option>Semestre 8</option>
      <option>Semestre 9</option>
      <option>Semestre 10</option>
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="guardar_calificaciones" type="submit">Registrar</button>
  </div>
  <div class="col-12">
    <a class="btn btn-primary" href="administrador.php">Regresar</a>
  </div>
</form>
<p class="p-5">
<?php include("../assets/footer.php")?>
