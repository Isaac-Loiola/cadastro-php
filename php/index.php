<?php 
    try{
        $pdo = new PDO("mysql:host=10.91.47.77;dbname=modelophp_db", "root", "123");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if(isset($_POST['nome-usuario']) and isset($_POST['email-usuario'])){

            $stmt = $pdo->prepare("insert into usuarios (nome, email, datacad)
            values (:nome, :email, default)");

            $stmt->execute([
                ":nome" => $_POST['nome-usuario'],
                ":email" => $_POST['email-usuario']
            ]);

            echo "<p>Usuário cadastrado</p>!";
        }
        else if(isset($_POST['nome-produto']) and isset($_POST['preco-produto'])){

            $stmt = $pdo->prepare("insert into produtos (nome, preco, datacad)
            values (:nome, :preco, default)");

            $stmt->execute([
                ":nome" => $_POST['nome-produto'],
                ":preco" => $_POST['preco-produto']
            ]);

            echo "Produto Cadastrado!";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>