<?php 
require_once("db.php");

    // Método para adicionar um produto no banco de dados!
    function adicionarProduto(string $nome, float $preco) : bool{
        $pdo = getConnection();
        $cmd = $pdo->prepare("insert into produtos (nome, preco, datacad)
        values (:nome, :preco, default)");
        $cmd->execute([
            ':nome' => $nome,
            ':preco' => $preco
        ]);
    
        return (bool)$cmd;
    }

    function listaProdutos() : array{
        $pdo = getConnection();
        $cmd = $pdo->query("select * from produtos");
        return $cmd->fetch();
    }
?>