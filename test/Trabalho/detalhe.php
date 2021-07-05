<?php
$id = $_GET['id'];
$conexao = new PDO('sqlite:dw.db');
$query = "SELECT * FROM produto WHERE id = $id";
$resultado = $conexao->query($query);
$listaPro = $resultado->fetchAll();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/unifebe.png">

  <title>DW2020 - Detalhe do produto</title>
  <!-- Principal CSS do Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Estilos customizados para esse template -->
  <link href="css/navbar-top-fixed.css" rel="stylesheet">
  <!-- Stick footer -->
  <link href="css/sticky-footer.css" rel="stylesheet">

</head>

<body>

  <?php require_once 'nav.php' ?>
  <?php foreach ($listaPro as $item) { ?>

    <main role="main" class="container">

      <h1 class="my-4">Detalhes do produto</h1>

      <div class="row">

        <div class="col-md-7">
          <img class="img-fluid" src="<?php echo $item['imagem']; ?>" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Categoria</h3>
          <p>
            <td><?php echo $item['nome']; ?></td>
          </p>
          <h3 class="my-3">Nome</h3>
          <p>
            <td><?php echo $item['nome']; ?></td>
          </p>
          <h3 class="my-3">Valor</h3>
          <p>
            <td><?php echo $item['preco']; ?></td>
          </p>
        </div>
      </div>
      <h3 class="my-3">Descrição</h3>
      <td><?php echo $item['descricao']; ?></td>
    </main>
  <?php } ?>

  <?php require_once 'footer.php' ?>

  <!-- Principal JavaScript do Bootstrap
    ================================================== -->
  <!-- Foi colocado no final para a página carregar mais rápido -->
  <script src="js/jquery-3.5.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>