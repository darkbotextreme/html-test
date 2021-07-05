<?php
$conexao = new PDO('sqlite:dw.db');
$query = "SELECT * FROM categoria";
$resultado = $conexao->query($query);
$lista = $resultado->fetchAll();

$conexao = new PDO('sqlite:dw.db');
$query = "SELECT * FROM produto";
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

  <title>DW2020 - Listagem de Produtos</title>
  <!-- Principal CSS do Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Estilos customizados para esse template -->
  <link href="css/navbar-top-fixed.css" rel="stylesheet">
  <!-- Stick footer -->
  <link href="css/sticky-footer.css" rel="stylesheet">

</head>

<body>

  <?php require_once 'nav.php' ?>

  <main role="main" class="container-fluid">
    <div class="row p-3">
      <div class="col-12 col-md-2 col-xl-3">
        <div  class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-tudo-tab" data-toggle="pill" href="#v-pills-tudo" role="tab" aria-controls="v-pills-tudo" aria-selected="true">Tudo</a>
          <?php foreach ($lista as $item) { ?>
            <a class="nav-link" id="v-pills-frutas-tab" data-toggle="pill" href="#v-pills-frutas" role="tab" aria-controls="v-pills-frutas" aria-selected="true">
              <td><?php echo $item['nome']; ?></td>
            </a>
          <?php } ?>
        </div>
      </div>
      <div class="col-12 col-md-10 col-xl-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-tudo" role="tabpanel" aria-labelledby="v-pills-tudo-tab">
            <?php foreach ($listaPro as $item) { ?>
              <div style="width: 35%; margin: 10px" class="card">
                <img class="card-img-top img-fluid imagem " src="<?php echo $item['imagem']; ?>" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">
                    <td><?php echo $item['nome']; ?></td>
                  </h5>
                  <p class="card-text text-justify">
                    <td><?php echo $item['descricao']; ?></td>
                    <br>
                    <strong style="font-size: 40px;">
                      <td><?php echo $item['preco']; ?></td>
                    </strong>
                  </p>
                  <td><a href="detalhe.php?id=<?php echo $item['id']; ?>" class="btn btn-primary stretched-link">Saiba Mais!</a></td>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="tab-pane fade" id="v-pills-frutas" role="tabpanel" aria-labelledby="v-pills-frutas-tab">
            <?php foreach ($listaPro as $item) { ?>
              <div style="width: 35%; margin: 10px" class="card">
                <img class="card-img-top img-fluid imagem " src="<?php echo $item['imagem']; ?>" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">
                    <td><?php echo $item['nome']; ?></td>
                  </h5>
                  <p class="card-text text-justify">
                    <td><?php echo $item['descricao']; ?></td>
                    <br>
                    <strong style="font-size: 40px;">
                      <td><?php echo $item['preco']; ?></td>
                    </strong>
                  </p>
                  <td><a href="detalhe.php?id=<?php echo $item['id']; ?>" class="btn btn-primary stretched-link">Saiba Mais!</a></td>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require_once 'footer.php' ?>

  <!-- Principal JavaScript do Bootstrap
    ================================================== -->
  <!-- Foi colocado no final para a página carregar mais rápido -->
  <script src="js/jquery-3.5.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>