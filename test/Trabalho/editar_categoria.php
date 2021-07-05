<?php
  $id = $_GET['id'];
  
  //conecta ao banco de dados
  $conexao = new PDO('sqlite:dw.db');

  // instrução para buscar um registro igual ao id
  $query = "SELECT * FROM categoria WHERE id = $id";
  
  //executa instrução no banco de dados
  $resultado = $conexao->query($query);

  //recupera o primeiro registro do banco de dados
  $categoria = $resultado->fetch();

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/unifebe.png">

    <title>DW2020 - Editar Categoria</title>
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
          <h4 class="mb-3">Editar categoria</h4>
          <form class="needs-validation" action="editar_categoria_post.php?id=<?php echo $categoria['id']?>" method="post" novalidate>
            <div class="mb-3">
              <label for="endereco">Nome da categoria</label>
              <input type="text" class="form-control" value="<?php echo $categoria['nome'];?>" id="nome" name="nome" placeholder="Nome da categoria" required autofocus>
              <div class="invalid-feedback">
                Por favor, insira o nome da categoria.
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Editar categoria</button>
          </form>
        </div>
      
    </main>

    <?php require_once 'footer.php' ?>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.5.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
  
  <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
</html>
