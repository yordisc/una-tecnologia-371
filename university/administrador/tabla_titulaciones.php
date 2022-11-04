<?php
include("bdAdmin.php")
?>

<?php include("../assets/header.php")?>
<div class="col-12">
    <a class="btn btn-primary m-5"  href="administrador.php">Regresar</a>
  </div>
<h1 style="text-align:center">Titulaciones</h1>
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Graduando</th>
      <th scope="col">Fecha Entrega</th>
      <th scope="col">Estado Entrega</th>
      <th scope="col">Facultad</th>
      <th scope="col">Carrera</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $query ="SELECT * FROM titulaciones";
       $result_task = mysqli_query($conn,$query);
       while($row =mysqli_fetch_array($result_task)){ ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['Nombre_Graduando']?></td>
        <td><?php echo $row['Fecha_Entrega']?></td>
        <td><?php echo $row['Estado_Entrega']?></td>
        <td><?php echo $row['Facultad']?></td>
        <td><?php echo $row['Carrera']?></td>
        <td>
            <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
        </td>
        <td>
            <a href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
        </td>
     </tr>
     <?php } ?>
  </tbody>
</table>
<p class="p-5">
<p class="p-5">
<p class="p-5">
<p class="p-5">
<?php include("../assets/footer.php")?>
