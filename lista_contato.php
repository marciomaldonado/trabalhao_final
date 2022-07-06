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

$query = "select * from cadastro";
$query = mysqli_query($conn,$query)
        or die(mysqli_error($conn));
echo "id - nome  &nbsp - celular  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- email<br>";
while($row = mysqli_fetch_array($query)){
    echo $row["id"] . " - " . $row["nome"] . " - " . $row["celular"] . " - " . $row["email"] . "</br>";
}

mysqli_close($conn);

?>
<br>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<button onclick="location.href='contato.html'" type="button">
         Voltar</button>
