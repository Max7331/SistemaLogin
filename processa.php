<?php

/*foreach($_POST as $key => $value)
{
    printf('<br>%s = %s',$key,$value);
}
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if(empty($email))
    echo "<br>false";
else
    echo "<br>verdadeiro";
*/

include_once("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nome,sobrenome,nascimento,email,senha) values ('$nome','$sobrenome','$nascimento','$email','$senha')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>