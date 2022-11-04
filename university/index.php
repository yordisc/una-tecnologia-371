
<?php include("assets/header.php")?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner p-5">
    <div class="carousel-item active ">
      <img src="./img/campus.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/aula.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/profesor.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card m-5">
  <div class="card-header">
    Noticias
  </div>
  <div class="card-body">
    <h5 class="card-title">Estudiantes desarrollan drones para la vigilancia de empresa</h5>
    <p class="card-text">El proyecto de grado ha tenido un notable interes por empresas que buscan
      proteger su patrimonio
    </p>
    <a href="facebook.com" class="btn btn-primary">Ir a la noticia</a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Cursos extracatedras vinculados con la tecnologia</h5>
    <p class="card-text">La universidad impartira nuevos cursos relacionados con programacion
      y electronica
    </p>
    <a href="facebook.com" class="btn btn-primary">Ir a la noticia</a>
  </div>
</div>
<div class="row justify-content-around m-5">
    <div class="col-6"><div class="card" style="width: 35rem;">
  <img src="./img/tecno.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Si le gusta la tecnología y no sabe qué carrera seguir, revise esta lista con las especialidades universitarias relacionadas a este campo</p>
  </div>
</div></div>
    <div class="col-5"><div class="card" style="width: 35rem;">
  <img src="./img/negocios.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">¿Te gustan los negocios y te gustaría trabajar diariamente para alcanzar los objetivos de tu empresa o la de tus clientes?</p>
  </div>
</div></div>
</div>


<?php include("assets/footer.php")?>
