<?php

// pegar o id - post só em formulário
$id = $_GET["id"];

// abrir conexão com o banco
include_once'./conexao.php';

//montar a instrução sql
$sql = "Delete from cliente where idcliente =".$id;

//igual ao gravar
if(mysqli_query($con,$sql)){
    $msg = "Excluido com sucesso!";
}else{
    $msg = "Erro ao escluir!";
}
mysqli_close($con);
echo "<script> alert('".$msg."');
location.href='consultar.php'; </script>";

