<?php


include_once('../BD/config.php');
$sql = "SELECT MAX(in_user) FROM test_users";

$resultado = $conexao->query($sql);

$row = mysqli_fetch_array( $resultado );

?>
