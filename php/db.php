<?php 
    // Criar um função para conectar com o banco, que retorne um objeto PDO
    // Criar um objeto nulo estático
    // Verificar se esse objeto é nulo
    // Adicione referencia do objeto para á classe PDO ( com host de conexão  e propriedades )
    // Retorno o objeto do tipo PDO

    function getConnection() : PDO{
        static $pdo;
        if ($pdo == null){
            $pdo = new PDO("mysql:host=10.91.47.77;dbname=modelophp_db",
             "root", 
             "123", 
             [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        }
        return $pdo;
    }
?>