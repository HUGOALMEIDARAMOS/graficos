<?php 	
try {
	
 require_once 'conexao.php';

 $sql = "SELECT id, texto FROM frases ORDER BY id";
 $prepare_conn = $pdo->prepare($sql);
 $prepare_conn->execute();
 $dados=$prepare_conn->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
	$dados=array();
	echo "Ocorreu um erro ao se conectar com banco de dados. Error:{$e->getMessage()}".PHP_EOL;
}


 