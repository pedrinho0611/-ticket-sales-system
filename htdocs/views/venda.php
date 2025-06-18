<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container" style="max-width:400px; margin:50px auto;">
    <h2>Comprar Ingressos</h2>
    <form action="/index.php?route=ticket/store" method="POST">
        <div class="form-group">
            <label for="quantidade">Quantidade de Ingressos:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:15px;">Comprar</button>
    </form>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
