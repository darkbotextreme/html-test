<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/unifebe.png">

    <title>Cadastrar</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/signin.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <?php require_once 'nav.php' ?>

    <form class="form-signin">
      <img class="mb-4" src="img/unifebe.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Cadastrar novo usuário</h1>
      <label for="inputEmail" class="sr-only">Nome</label>
      <input type="text" id="inputNome" class="form-control" placeholder="Seu nome" required autofocus>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputSenha" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; DW 2020</p>
    </form>
  </body>
</html>