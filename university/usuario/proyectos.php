<?php include("../assets/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<form  action="guardar.php" method="POST" class="row g-3 p-5">
  <h1>Proyectos</h1>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombre del Estudiante</label>
    <input type="text" class="form-control" id="validationDefault01" name="Nombre_estudiante" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Nombre del Proyecto</label>
    <input type="text" class="form-control" id="validationDefault02" name="Nombre_proyecto"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Nombre del Tutor</label>
    <input type="text" class="form-control" id="validationDefault02" name="Nombre_tutor" required>
  </div>
  <div class="col-md-4">
  <label for="validationDefault04" class="form-label">Facultad</label>
    <select class="form-select" id="validationDefault04" name="Facultad" required>
    <option selected disabled value="">Seleccionar Facultad</option>
    <option>Ingeniería</option>
    <option>Ciencia y Tecnología</option>
    <option>Administración y Contaduria</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Carrera</label>
    <select class="form-select" id="validationDefault04" name="Carrera" required>
    <option selected disabled value="" >Seleccionar Carrera</option>
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
    <button class="btn btn-primary" name="guardar_proyectos" type="submit">Registrar</button>
  </div>
  <div class="col-12">
    <a class="btn btn-primary" href="administrador.php">Regresar</a>
  </div>
</form>
<p class="p-3">
<?php include("../assets/footer.php")?>
