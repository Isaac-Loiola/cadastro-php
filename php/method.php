<?php
require_once("produtos.php");
require_once("usuarios.php");

    if(isset($_POST['cad-usuario'])){
        $resultado = adicionarUsuario(
            $_POST['nome-usuario'],
            $_POST['email-usuario']
        );
        if($resultado){
            echo "Usuario ".$_POST['nome-usuario']." cadastrado!";
        }
        else{
            echo "Usuario ".$_POST['nome-usuario']." não cadastrado cadastrado!";
        }
    }

    if(isset($_POST['cad-produto'])){
        $resultado = adicionarProduto(
            $_POST['nome-produto'],
            $_POST['preco-produto']
        )
        if($resultado){

        }
    }


?>