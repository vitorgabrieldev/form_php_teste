<?php
include('conexao.php');

$datas = $_POST['data'];

$nome     =    $datas['nome'];
$email    =    $datas['email'];
$senha    =    $datas['senha'];

echo "<h3>nome:   $nome</h3>";
echo "<h3>email:  $email</h3>";
echo "<h3>senha:  A senha é secreta</h3>";


/*FORMA PROCEDURAL*/

$cad_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', md5('$senha'))";

if (mysqli_query($conn, $cad_usuario)) {
      echo "<h1>Novo cadastro realizado </h1></br>";
} else {
      echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
