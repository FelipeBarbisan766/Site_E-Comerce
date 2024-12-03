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
          <a class="navbar-brand" href="index.php"><img src="arquivos/logo.png" alt="Bootstrap" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">MontePC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">sobre nós</a>
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
      <!-------------------------------------------------------------------------------------------->

      <?php
        include('Conexao.php');
        $id = $_GET['id'];
        $search = mysqli_query($conexao,"SELECT * FROM processador WHERE id='$id'");
        $result = mysqli_fetch_array($search);

        echo '<img src="'.$result['path_image'].'" alt="imagem do processador" height="400" >';
        echo '<h1>'.$result['nome'].'</h1>';
        echo'<table class="table">';
        echo'<tbody>';
          echo'<tr>';
            echo'<th scope="row">fabricante</th>';
            echo'<td>'.$result['fabricante'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Modelo</th>';
            echo'<td>'.$result['modelo'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Familia</th>';
            echo'<td>'.$result['familia'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Arquitetura</th>';
            echo'<td>'.$result['arquitetura'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Socket</th>';
            echo'<td>'.$result['socket'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Frequencia</th>';
            echo'<td>'.$result['frequencia'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Frequencia Turbo</th>';
            echo'<td>'.$result['frequencia_turbo'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Nucleo</th>';
            echo'<td>'.$result['nucleo'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Litografia</th>';
            echo'<td>'.$result['lotografia'].'</td>';
          echo '</tr>';
          echo'<tr>';
            echo'<th scope="row">Consumo</th>';
            echo'<td>'.$result['consumo'].'</td>';
          echo '</tr>';
        
        
        mysqli_close($conexao);

?>
</table>
       
</body>
</html>