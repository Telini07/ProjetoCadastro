<?php
include("conexao.php");
// upload foto
$nome_foto = "";
if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'fotos/';
    $extensao = strtolower ( substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His"). $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
}
// fim upload


$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];

echo "<h1>Dados do Usuário</h1>";
echo "<strong>Nome: </strong>$nome <br>";
echo "<strong>Email: </strong>$email <br>";
echo "<strong>Telefone: </strong>$fone <br>";
echo "<strong>Senha: </strong>$senha <br>";

$sql = "SELECT email_usuario FROM usuario WHERE email_usuario = '$email'";
$result= mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    echo "<strong><p>Email já cadastrado!</p></strong>";
}else{
    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, senha, foto)";
    $sql .= " VALUES ('".$nome."','".$email."','".$fone."','".$senha."','".$nome_foto."')";
    
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    
    if($result)
        echo "<strong>Dados cadastrados com sucesso!</strong>";
    else
        echo "<strong>Erro ao tentar cadastrar!<strong>";    
}

?>
<br>
<a href="index.php"><button>Voltar</button></a>