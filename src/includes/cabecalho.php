<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trashop</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link href="./assets/css/bootstrap.css" rel="stylesheet" />
  <link rel="shortcut icon" href="./imagens/icons/reciclagemIcon.ico" type="image/x-icon" />
  <style>
   /* html,
    body {
      height: 100%;
    }*/

    .wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex-grow: 1;
    }
  </style>
</head>

<body class=" background-color-black">
  <div class="wrapper container" >
    <nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php#">
          <img src="./imagens/icons/reciclagemImg.png" alt="Logo" width="30" height="30"
            class="d-inline-block align-text-top" />
          Trashop
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php#produtos">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php#trashcoin">Carteira(trashcoin)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php#about-us">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./cadastro.php">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>