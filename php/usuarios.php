<?php
require_once("db.php");

    function adicionarUsuario(string $nome, string $email) : bool{
        $pdo = getConnection();

        $cmd = $pdo->prepare("insert into usuarios (nome, email, datacad) 
        values(:nome, :email, default)");
        $cmd->execute([
            ':nome' => $nome,
            ':email' => $email
        ]);

        return $cmd;
    }

?>