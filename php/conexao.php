<?php
//conecção com o servidor

$usuario="root";
$senha="";

//$usuario="001aluno";
//$senha="123456";

$host="localhost";
$banco="anamikaela_site";

$con=mysqli_connect($host,$usuario,$senha,$banco);
if(mysqli_connect_errno())
    {
        echo "falha na conexao com o MySQL: ".mysqli_connect_error();
    }

?>