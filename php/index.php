<?php
require_once("produtos.php");
require_once("usuarios.php");


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['cad-usuario'])){
            adicionarUsuario(
                $_POST['nome-usuario'],
                $_POST['email-usuario']
            );
        }

        if(isset($_POST['cad-produto'])){
            $resultado = adicionarProduto(
                $_POST['nome-produto'],
                (float)$_POST['preco-produto']
            );
        }
    }    

    $produtos = listaProdutos();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" defer crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container-fluid text-center py-3 bg-dark text-white">
        <h1>Cadastro de produto</h1>
    </header>    
    <main class="d-flex justify-content-center flex-column flex-md-row my-5 flex-wrap gap-5">
        <div class="shadow-sm p-3 mx-5 col-10 col-md-4">
            <h2 class="text-center">Usuario</h2>
            <form action="" method="post">
                <label for="" class="form-label">
                    Nome:
                </label>
                <input type="text" class="form-control" name="nome-usuario">
                <label for="" class="form-label">
                    Email:
                </label>
                <input type="email" class="form-control mb-3" name="email-usuario">

                <button class="btn btn-primary" type="submit" name="cad-usuario">Cadastrar</button>
            </form>
        </div>

        <div class="shadow-sm p-3 mx-5 col-10 col-md-4">
            <h2 class="text-center">Produto</h2>
            <form action="" method="post">
                <label for="" class="form-label">
                    Nome:
                </label>
                <input type="text" class="form-control" name="nome-produto">

                <label for="" class="form-label">
                    Preço:
                </label>
                <input type="number" class="form-control mb-3" name="preco-produto">

                <button class="btn btn-primary" type="submit" name="cad-produto">Cadastrar</button>
            </form>
        </div>
        <table class="table table-bordered table-striped col-6">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
            <?php foreach($produtos as $produto):?>
                <tr>
                    <td><?= $produto['id']?></td>
                    <td><?= $produto['nome']?></td>
                    <td><?= $produto['preco']?></td>
                    <td><?= date('d/m/Y H:i', strtotime($produto['datacad'])) ?></td>
                </tr>
            <?php endforeach;?>
        </table>

        
    </main>
    <footer>

    </footer>
</body>
</html>