<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ateliê do Livro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
<nav>
<div id="logo">
<img width="150" src="images/logo_livro.png" alt="Logo do Livro">
</div>

<ul class="nav nav-pills">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Agenda</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?page=lis-agenda">Listar</a>
      <a class="dropdown-item" href="index.php?page=cad-agenda">Cadastrar</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Não Disponível</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Serviços</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Listar</a>
      <a class="dropdown-item" href="#">Cadastrar</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Disabled</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?page=lis-cliente">Listar</a>
      <a class="dropdown-item" href="index.php?page=cad-cliente">Cadastrar</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tom. Serv.</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?page=lis-ts">Listar</a>
      <a class="dropdown-item" href="index.php?page=cad-ts">Cadastrar</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Relatórios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<p>Sistema Gerenciador de Processos / Ateliê do Livro</p>
</nav>
</header>
<section>

    <?php include('config.php'); ?>

</section>
<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>