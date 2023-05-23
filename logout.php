<?php
include('cria_sessao.php');

// limpa os dados
 session_unset();
 // destroi a sessao
 session_destroy();
 // manda para a pagina inicial
 header('Location: index.php')
?>