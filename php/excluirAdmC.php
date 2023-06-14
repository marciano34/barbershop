<?php
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/barbearia/php/";
    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once($serve_file.'conexao.php');

    $id = @$_POST['id'];

    $sql = "DELETE from empresa where id_empresa = '$id'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_affected_rows($conn);
    if($rows > 0){
        echo "<script>alert('Administrador Excluido Com Sucesso!');window.location.href='/barbearia/equipe.php';</script>";
    }else{
        echo "Erro ao excluir Administrador!";
    }
    ?>