<?php require_once("./consumir-api.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumir Api</title>
    <link rel="icon" href="api.png">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<a href="https://reqres.in/api/users" target="_blank" class="btn btn-success m-3">API</a>
    <div class="container d-flex justify-content-center align-item-center flex-direction-row w-100 h-100">
    <form action="./index.php" method="GET" class="form w-50 mt-4">
        <div class="row">
        <label for="" class="form-label text-center"><h1>API CONSUMIDA</h1></label>
        <!-- <input type="text" class="form-control" name="direccion">

        <input type="submit" name="enviar" value="Enviar" class="btn btn-success mt-4">     -->
    </form>

    <!-- TABLA DATOS DE LA API -->
<table class="table table-bordered table-striped text-center" id="tblDatos">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>EMAIL</th>
      <th>FIRST_NAME</th>
      <th>LAST_NAME</th>
      <th>AVATAR</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $dato) {?>
    <tr>
      <th><?php echo $dato['id'] ?></th>
      <td><?php echo $dato['email'] ?></td>
      <td><?php echo $dato['first_name'] ?></td>
      <td><?php echo $dato['last_name'] ?></td>
      <td> <img src="<?php echo $dato['avatar']?>" class="w-50"> </td>
    </tr>
    <?php };?>
  </tbody>
</table>

<!-- PAGINADOR -->
        <div class="container-fluid d-flex justify-content-center align-item-center w-100">
            <div class="" id="paginador"></div>
        </div>
</div>


<script src="./js/paginacion.js"></script>
</body>
</html>

