<?php
include('conexao.php');
$id_usuario = $_GET['id_usuario'];


$sql = "DELETE FROM usuario WHERE id_usuario = $id_usuario";

echo $sql;
$result = mysqli_query($con,$sql);
if($result){
    echo "<h3>Dados alterados com sucesso!</h3><br>";
}else{
    echo "<h3>Erro ao alterar dados: ". mysqli_error($con)."!</h3>";
}

?>
<a href = "listar_usuarios.php"><button>Voltar</button></a>