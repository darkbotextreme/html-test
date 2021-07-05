<?php
$conexao = new PDO('sqlite:dw.db');
$query = "SELECT * FROM categoria";
$resultado = $conexao->query($query);
$lista = $resultado->fetchAll();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/unifebe.png">

  <title>DW2020 - Adicionar Produto</title>
  <!-- Principal CSS do Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Estilos customizados para esse template -->
  <link href="css/navbar-top-fixed.css" rel="stylesheet">
  <!-- Stick footer -->
  <link href="css/sticky-footer.css" rel="stylesheet">

</head>

<body>

  <?php require_once 'nav.php' ?>

  <main role="main" class="container">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Adicionar novo produto</h4>
      <form class="needs-validation" action="novo_produto_post.php" method="post">
        <div class="mb-3">
          <label for="endereco">Nome do produto</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" required autofocus>
          <div class="invalid-feedback">
            Por favor, insira o nome do produto.
          </div>
        </div>

        <div class="mb-3">
          <label for="primeiroNome">Preço</label>
          <input type="text" class="form-control" id="preco" value="R$ " name="preco" placeholder="Preço" required>
          <div class="invalid-feedback">
            É obrigatório inserir um preço válido.
          </div>
        </div>

        <div class="mb-3">
          <label for="primeiroNome">Imagem</label>
          <input type="text" class="form-control" id="imagem" name="imagem" placeholder="Digite a URL da Imagem" required>
        </div>

        <div class="mb-3">
          <label for="primeiroNome">Estoque</label>
          <input type="text" class="form-control" id="estoque" name="estoque" placeholder="Estoque" required>
        </div>

        <label for="primeiroNome">Categoria</label> <br>
        <select style="border-radius: 5px;" name="field" readonly="readonly">
          <?php foreach ($lista as $item) { ?>
            <option value="fghfdgh">
            <td><?php echo $item['nome']; ?></td>
            </option>
          <?php } ?>
        </select>

        <div class="mb-3">
          <br>
          <label for="primeiroNome">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" id="descricao" placeholder="Descrição" value="" required>
          <div class="invalid-feedback">
            É obrigatório inserir uma descrição válida.
          </div>
        </div>


        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar produto</button>
      </form>
    </div>
    </div>
  </main>

  <?php require_once 'footer.php' ?>

  <style>

  </style>

  <!-- Principal JavaScript do Bootstrap
    ================================================== -->
  <!-- Foi colocado no final para a página carregar mais rápido -->
  <script src="js/jquery-3.5.js"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    $('#customFile').on('change', function() {
      //get the file name
      var fileName = $(this).val();
      var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(cleanFileName);
    })
  </script>
</body>

</html>