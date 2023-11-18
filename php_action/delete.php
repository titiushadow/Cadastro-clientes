<?php
// Sessão
session_start();

// Conexão
require_once './db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id = intval($_POST['id']);

    $sql = "DELETE FROM clientes WHERE ID = $id";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar: " . mysqli_error($connect);
        header('Location: ../index.php');
    endif;
endif;
?>
