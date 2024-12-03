<?php

if(isset($_FILES['imagen'])){
    $imagen = $_FILES['imagen'];
    // if($imagen['size']> 2097152)//limita o tamanho da imagen
    //     die("Arquivo Muito Grande!")
    // var_dump($imagen);//informações da imagen
    $pasta = "arquivos/";
    $nomeDoArquivo = $imagen['name'];
    $novoNomeDoArquivo = uniqid();
    $extencao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    if($extencao!= "jpg" && $extencao !="png"){
        die("Extenção da imagen não aceita");
    }
    $path = $pasta.$novoNomeDoArquivo.".".$extencao;
    $move = move_uploaded_file($imagen["tmp_name"],$path);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register of Product</title>
</head>
<body>
    <h1>Register of Product</h1>
    <form action="cadastro.php" enctype="multipart/form-data" method="POST">
        <p>Name: </p>
        <input type="text" name="txt_name"><br>
        <p>image: </p>    
        <input type="file" name="imagen" >
        <p>Description: </p>
        <input type="text" name="txt_Description"><br>
        <!-- <p>Modelo: </p>
        <input type="text" name="txt_modelo"><br>
        <p>Família: </p>
        <input type="text" name="txt_familia"><br>
        <p>Arquitetura: </p>
        <input type="text" name="txt_arquitetura"><br>
        <p>Socket: </p>
        <input type="text" name="txt_socket"><br>
        <p>Frequência: </p>
        <input type="text" name="txt_frequencia"><br>
        <p>Frequência Turbo: </p>
        <input type="text" name="txt_freq_turbo"><br>
        <p>Núcleos Turbo: </p>
        <input type="text" name="txt_nucleo"><br> -->
        <!-- <p>Gráficos integrados: </p>
        <input type="radio" name="grafic" value="sim">
        <input type="radio" name="grafic" value="não"> -->
        <!-- <p>Litografia: </p>
        <input type="text" name="txt_lotografia"><br>
        <p>Consumo: </p>
        <input type="text" name="txt_consumo"><br>
        <p>comentario: </p>
        <input type="text" name="txt_comentario" id=""><br> -->

        
       
        <input type="submit" value="cadastrar"><br><br>
    </form>
    
    <?php
        if(count($_POST) > 0){
            include('Conexao.php');
            
            

            $name=$_POST['txt_name'];
            $Description=$_POST['txt_Description'];

            $execultar_query = mysqli_query($conexao,"insert into product(pro_name,pro_description,pro_path_image) values ('$name','$Description','$path')");

            if($execultar_query == true)
            {
                echo" produto cadastrado com sucesso ";
            }
            else
            {
                echo" Erro no cadastro ";
            }
            mysqli_close($conexao);
        }
        echo "<a href=\"logof.php\">Sair</a>"
        

    ?>


</body>
</html>
                                                                          
