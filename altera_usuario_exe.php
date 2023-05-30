<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];
    $nome_foto = "";
if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'fotos/';
    $extensao = strtolower ( substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His"). $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
}

    echo "<h1>alteração de dados</h1><hr>";
    echo "<h2>Usuario:$nome</h2>";
    $sql = "UPDATE usuario set nome_usuario = '$nome', 
    email_usuario = '$email', 
    fone_usuario = '$fone', 
    senha = '$senha',
    foto = '$nome_foto' 
    WHERE id_usuario = $id_usuario";

    echo $sql;
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h3>Dados alterados com sucesso!</h3><br>";
    }else{
        echo "<h3>Erro ao alterar dados: ". mysqli_error($con)."!</h3>";
    }
    
?>
 <a href = "listar_usuarios.php"><button>Voltar</button></a>
