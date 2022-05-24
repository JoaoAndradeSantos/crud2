<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>

    <form action="/cadastrar-produtos" method="POST">
        @csrf
        <label for="lblnome">Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label for="lblvalor">Valor:</label>
        <input type="text" name="valor">
        <br><br>
        <label for="lblquantidade">quantidade:</label>
        <input type="text" name="estoque">
        <br><br>
        <button>cadastrar</button>
    </form>
    <br><br>
    <a href="http://127.0.0.1:8000/editar-produto/1">
        <button> Editar Produto </button>
</body>
</html>