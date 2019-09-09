<?php

include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$mensagem = $_POST['mensagem'];

$busca = mysqli_query($con, $sql); //executa o sql
$linhas=$busca->num_rows;//verifica a quantidade de linhas que voltou do Select

if($linhas!0){
    echo "<script>alert('EMAIL JÁ EXISTENTE NO SISTEMA');window.location.href='Contato.html';</script>
}
else{
    $sql="insert into contato (nome,email,telefone,endereco,mensagem) values ('$nome','$email','$telefone','$endereco','$mensagem');
    mysqli_query($con,$sql);
    mysqli_close($con);
    header('location:Contato.html');
}
?>