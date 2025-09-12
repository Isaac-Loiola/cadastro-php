<?php 
require_once("db.php");

    // Método para adicionar um produto no banco de dados!
    function adicionarProduto(string $nome, float $preco) : bool{
        $pdo = getConnection();
        $cmd = $pdo->prepare("insert into produtos (nome, preco, datacad)
        values (:nome, :preco: default)");
        return $cmd->execute([
            ':nome' => $nome,
            ':preco' => $preco
        ]);
    }
?>