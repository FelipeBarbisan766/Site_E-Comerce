<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MontePC</title>
    <link rel="stylesheet" href="style.css">
    <!-- Codigo do Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="arquivos/logo.png" alt="sem imagem" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">MontePC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- ----------------------------------------------------------------------------------------------- -->
      <div class="container text-center">
      <div class="row">
  <?php
    include('Conexao.php');
    $result = mysqli_query($conexao,"SELECT * FROM product");
    $quantidade = $result -> num_rows;
    while ($linha = mysqli_fetch_array($result)){

          if($quantidade >= 3){
             echo '<div class="row">';
             $quantidade = 0;
          }
          echo' <div class="col">';
          echo '<div class="card" style="width: 18rem;">';
            echo'<img src="'.$linha['pro_path_image'].'" class="card-img-top" alt="image of production" height="300">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$linha ['pro_name'].'</h5>';
                  echo '<p class="card-text">'.$linha ['pro_description'].'</p>';
                  echo'<form action="analize.php" method="get"><button class="btn btn-primary" name="id" type="submit" value="'.$linha['pro_cod'].'">Visualizar</button></form>';
                 echo'</div>';
                echo'</div>';
        echo ' </div>';
    }
    
    mysqli_close($conexao);
  ?>
  </div>
</body>
</html>