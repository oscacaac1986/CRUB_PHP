<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>Sistema de Facturacion</title>
</head>
<body>
<header>
  <div class="container-fluit">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="../crub_PHP/img/avataaars.svg" width="40" height="40" alt="" loading="lazy">
        Bienvenido: 
        </a>
        <h3><p aling=center class="navbar-nav mr-auto mt-2 mt-lg-0">CRUB PHP </p></h3>
  
  <div class=" navbar-inline">
    
    <a  class="nav-link" id="logout" href="logout.php">Cerrar Sesión</a>
    
  </div>
  
</nav>
</header>
<h1 class='text-center text-secondary'>PRODUCTOS</h1>

<div class="container">
    
    <div class="row ">

    <div class="col-sm-4 py-3 border rounded-sm">
        <form action="" class="">
            <div class="form-group">
                <label for="">Referencia</label>
                <input type="text" name="reference" id="" class="form-control" require="true">
            </div>
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" name="name" id="" class="form-control" require="true">
            </div>
            <div class="form-group">
                <label for="">Valor:</label>
                <input type="number" name="value" id="" class="form-control" require="true">
            </div>
            <div class="form-group">
                <label for="">Cantidad</label>
                <input type="" name="cant" id="" class="form-control" require="true">
            </div>

            <button type="submit" class="btn btn-secondary">Registrar</button>

        </form>
    </div>
    <div class="col-sm-8">
        <div class="row text-center" id="mensaje"></div>
        <h2><p class="text-center text-secondary">Tabla de Productos</p></h2>
        <div class="table-responsive-md d-flex justify-content-center">
            <table class="table ">
                <thead class="thead-light">
                    <tr>
                    <th class="text-center" scope="col">Referencia</th>
                    <th class="text-center" scope="col">Nombre</th>
                    <th class="text-center" scope="col">Unidades disponibles</th>
                    <th class="text-center" scope="col">Valor</th>
                    </tr>
                </thead>
            </table>
            <tbody></tbody>
        </div>
    </div>
    </div>
    
</div>





     
</body>
</html>