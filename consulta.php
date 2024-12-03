<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <table class="table table-striped table-hover">
        <tr>
            <td> Id </td>
            <td> Nome </td>
            <td> Data de Nascimento </td>
            <td> Telefone </td>
            <td> Data do Cadastro </td>
        <tr>


<?php
    include('Conexao.php');
    $result = mysqli_query($conexao,"Select * from processador");
    while ($linha = mysqli_fetch_array($result)){
        echo "<tr>";
            // echo "<td>".$linha ['cli_id']."</td>";
            // echo "<td>".$linha ['cli_nome']."</td>";
            // echo "<td>".$linha ['cli_data_nasci']."</td>";
            // echo "<td>".$linha ['cli_telefone']."</td>";
            // echo "<td>".$linha ['cli_data_cad']."</td>";
            // echo "<td><a href='editar.php?id={$linha["cli_id"]'>Editar</a></td>";
            // echo "<td><a href='excluir.php?id={$linha["cli_id"]'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>"
    //mysqli_close($conexao);

?>
</body>
</html>