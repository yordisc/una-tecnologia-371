<?php include("../assets/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<p class="p-5">
<form  action="guardar.php" method="POST" class="row g-3 p-5">
    <h1>Titulaciones</h1>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombre del Graduando</label>
    <input type="text" class="form-control" id="validationDefault01" name="Nombre_Graduando"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Fecha de Entrega del Titulo</label>
    <input type="date" name="date" step="1" min="2021-01-01" max="2030-12-31" name="Fecha_Entrega" style="width:23rem" value="<?php echo date("Y-m-d");?>"> 
    <div class="col-md-4">
    <label for="validationDefault04" class="form-label">Estado de Entrega del Titulo</label>
    <select class="form-select" id="validationDefault04" required>
    <option selected disabled value="" name="Estado_Entrega">Seleccionar Estado</option>
    <option>Entregado</option>
    <option>No Entregado</option>
    </select>
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
    <button class="btn btn-primary" name="guardar_titulaciones" type="submit">Registrar</button>
  </div>
  <div class="col-12">
    <a class="btn btn-primary" href="administrador.php">Regresar</a>
  </div>
</form>
<p class="p-5">
<?php include("../assets/footer.php")?>
