<?php include("assets/header.php")?>
<form action="validacion.php" method="post">
<section class="p-5">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-left align-items-left h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./img/login.png" class="img-fluid"
          alt="Sample image">
      </div>
       <!-- Email input -->
        <div >
       <div class="form-outline mb-4">
            <input type="email" style="width:30%;" name="correo" class="form-control form-control-lg"
              placeholder="ingrese un correo electronico valido" />
            <label class="form-label" >Correo Electronico</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" style="width:30%;" name="password" class="form-control form-control-lg"
              placeholder="ingrese contraseña" />
            <label class="form-label" >contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2"  type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Recordarme
              </label>
           

          <div class="text-center text-lg-start mt-4 pt-5">
            <button type="button " class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0 p-5">¿No tienes una cuenta registrate? <a href="registro.php"
                class="link-danger">Registrarse</a></p>
                </div>
            <a href="#!" class="text-body" style="text-align:left">¿Olvidaste tu contraseña?</a>
          </div>
          </div>
        </div>
       <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="facebook.com" class="text-black me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="twitter.com" class="text-black me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="google.com" class="text-black me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="linkedin.com" class="text-black">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
      </section>
  <p class="p-5"></p>
</form>
<?php include("assets/footer.php")?>
