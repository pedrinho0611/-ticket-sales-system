<!DOCTYPE html>
<html>
<head>
    <title>Comprar Ingressos</title>
</head>
<body>
    <div style="text-align:center; margin-top:50px;">
        <h2>Comprar Ingressos</h2>
        <form action="index.php?route=ticket/store" method="post">
            <label for="quantidade">Quantidade de ingressos:</label>
            <input type="number" name="quantidade" id="quantidade" min="1" required>
            <br><br>
            <button type="submit">Comprar</button>
        </form>
        <br>
        <a href="index.php">Voltar para a Home</a>
    </div>
</body>
</html>
