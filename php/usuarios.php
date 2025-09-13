<?php
require_once("db.php");

    function AdicionarUsuario(string $nome, $string $email) : bool{
        $pdo = getConnection();

        $cmd = $pdo->prepare("insert into usuarios (nome, email, datacad)
        values(:nome, :email, default");
        return $cmd->execute([
            ':nome' => $nome,
            ':email' => $email
        ]);

?>