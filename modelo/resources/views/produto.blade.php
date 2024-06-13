<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Produto</title>
</head>
<body>
    <form action="{{Route('produto.store')}}" method="post">
        @csrf
        <label>Nome: </label>
        <input type="text" name="nome_produto" id="nome" placeholder="Nome do produto" required><br><br>

        <label>Valor: </label>
        <input type="text" name="valor_produto" id="valor" placeholder="Usar '.' para separar real do centavo" required><br><br>

        <label>Validade: </label>
        <input type="date" name="vencimento_produto" id="vencimento" required><br><br>

        <label>Categoria: </label>
        <input type="number" name="categoria_id" id="categoria" required><br><br>

        <button type="submit">Cadastar</button>

    </form>
</body>
</html>