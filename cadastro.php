<?php

$nome = $_POST["nome"];
$cel = $_POST["cel"];
$email = $_POST["email"];

$server_name = "localhost";
$data_base = "trab_final";
$user = "marcio";
$pwd = "marcio";

$conn = mysqli_connect($server_name,$user,$pwd,$data_base);
                        
if(!$conn){
    die("conexao com o banco de dados falhou" .
                    mysqli_connect_error());
}

$sql = "insert into cadastro (nome,celular,email) 
                    values ('$nome','$cel','$email')";

if(mysqli_query($conn,$sql)){
    echo "sucesso na cadastro do usuário<br><br>";
}else{
    echo "ERROR no cadastro do contato!<br><br>";
}
mysqli_close($conn);


?>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<button onclick="location.href='contato.html'" type="button">
         Voltar</button>
