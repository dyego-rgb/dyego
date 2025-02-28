<?php include 'bebidas.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Bebidas</title>
<link rel="stylesheet" href="style.css"> <!-- Adicione estilo se necessário -->
</head>
<body>
<h1>Cadastro de Bebidas</h1>
<div>
<h2>Adicionar Vinho</h2>
<form method="POST">
<input type="hidden" name="tipo" value="vinho">
<input type="text" name="nome" placeholder="Nome do Vinho" required>
<input type="number" name="ano" placeholder="Ano" required>
<input type="number" name="preco" placeholder="Preço" required>
<button type="submit">Adicionar Vinho</button>
</form>
</div>
<div>
<h2>Adicionar Refrigerante</h2>
<form method="POST">
<input type="hidden" name="tipo" value="refrigerante">
<input type="text" name="nome" placeholder="Nome do Refrigerante" required>
<input type="text" name="marca" placeholder="Marca" required>
<input type="number" name="preco" placeholder="Preço" required>
<button type="submit">Adicionar Refrigerante</button>
</form>
</div>
<div>
<h2>Adicionar Suco</h2>
<form method="POST">
<input type="hidden" name="tipo" value="suco">
<input type="text" name="nome" placeholder="Nome do Suco" required>
<input type="text" name="tipo" placeholder="Tipo" required>
<input type="number" name="preco" placeholder="Preço" required>
<button type="submit">Adicionar Suco</button>
</form>
</div>
<h2>Bebidas Cadastradas</h2>
<ul>
<?php foreach ($_SESSION['bebidas'] as $bebida): ?>
<li><?php echo $bebida->mostrarBebida(); ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>