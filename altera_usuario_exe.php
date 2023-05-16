<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>alteração de dados</h1><hr>";
    echo "<h2>Usuario:$nome</h2>";
    $sql = "UPDATE usuario set nome_usuario = '$nome', 
    email_usuario = '$email', 
    fone_usuario = '$fone', 
    senha = '$senha' 
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
