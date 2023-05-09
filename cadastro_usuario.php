<?php
include("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];

echo "<h1>Dados do Usuário</h1>";
echo "<strong>Nome: </strong>$nome <br>";
echo "<strong>Email: </strong>$email <br>";
echo "<strong>Telefone: </strong>$fone <br>";
echo "<strong>Senha: </strong>$senha <br>";

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, senha)";
$sql .= " VALUES ('".$nome."','".$email."','".$fone."','".$senha."')";

echo $sql."<br>";
$result = mysqli_query($con, $sql);

if($result)
    echo "<strong>Dados cadastrados com sucesso!</strong>";
else
    echo "<strong>Erro ao tentar cadastrar!<strong>";    
?>
