<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Produto</title>
</head>
<body>
    <form action="{{Route('produto.store')}}" method="post">
        @csrf
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do produto" required><br><br>

        <label>Valor: </label>
        <input type="text" name="valor" id="valor" placeholder="Usar '.' para separar real do centavo" required><br><br>

        <label>descrição: </label>
        <input type="text" name="vencimento" id="vencimento" required><br><br>
    </form>
</body>
</html>