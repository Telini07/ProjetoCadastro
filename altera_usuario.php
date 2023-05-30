<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "SELECT * FROM usuario where id_usuario = $id_usuario";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="altera_usuario_exe.php" method="post">
        <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']?>">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome_usuario']?>">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" value="<?php echo $row['email_usuario']?>">
        </div>
        <div>
            <label for="fone">Telefone: </label>
            <input type="tel" name="fone" id="fone" placeholder="(18)9999-8888" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['fone_usuario']?>">
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>">
        </div>
        <div>
            <input type="file" name="foto" id="foto" accept="image/*">
        </div>
        <input type="submit" value="Salvar">
    </form>
    <a href="listar_usuarios.php"><button>Voltar</button></a>
</body>
</html>