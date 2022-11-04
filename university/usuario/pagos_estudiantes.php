<?php include("../assets/header.php")?>
<?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php session_unset(); } ?>
<p class="p-1">
<form action="guardar.php" method="POST" class="credit-card-div">
<div class="panel panel-default p-5"  style="text-align:center"> 
 <div class="panel-heading">
     <h1  style="text-align:center">Pagos Estudiantes</h1>
      <div class="row ">
              <div class="col-md-12 ">
                  <input  style="width:30%;" type="text" class="form-control" name="Numero" placeholder="Ingrese el número de tarjeta" />
              </div>
          </div>
     <div class="row ">
              <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >Mes de Vencimiento</span>
                  <input  type="text" class="form-control" name="Mes_venc" placeholder="MM" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >Año de Vencimiento</span>
                  <input  type="text" class="form-control" name="year_venc" placeholder="AA" />
              </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >  CVV</span>
                  <input   type="text" class="form-control" name="CVV" placeholder="CVV" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
<img src="img/" class="img-rounded" />
         </div>
          </div>
     <div class="row ">
              <div class="col-md-12 pad-adjust">

                  <input style="width:30%;" type="text" class="form-control" placeholder="Name On The Card" />
              </div>
          </div>
     <div class="row">
<div class="col-md-12 pad-adjust">
    <div class="checkbox">
    <label>
      <input type="checkbox" checked class="text-muted"> Save details for fast payments <a href="#"> learn how ?</a>
    </label>
  </div>
</div>
     </div>
       <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                 <input type="submit"  class="btn btn-danger" value="CANCEL" />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit" name="guardar_pagos_estudiantes" class="btn btn-warning btn-block" value="PAY NOW" />
              </div>
          </div>
                   </div>
              </div>
</form>
<p class="p-4">
  

<?php include("../assets/footer.php")?>
