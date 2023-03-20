<?php
require "conn.php";

$connection = DB::getInstance();
$result_usuario = $connection->query("SELECT * FROM dados");
$result_usuario->setFetchMode(PDO::FETCH_ASSOC);
$dados = $result_usuario->fetchAll();
// print_r($dados);
$dados2 = json_encode($dados);
echo $dados2;

//Verificar se encontrou resultado na tabela "usuarios"
// if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
// 	while($row_usuario = mysqli_fetch_assoc($result_usuario)){
// 		echo $row_usuario['nome'] . "<br>";
// 	}
// }else{
// 	echo "Nenhum usuário encontrado";
// }
?>