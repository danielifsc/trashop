<?php require_once './src/includes/cabecalho.php' ?>

  <section id="rells" class="mt-5">

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" >
      <div class="carousel-inner" >
        <div class="carousel-item active">
          <img src="./src/imagens/rells1.jpg" class="d-block w-100" alt="..."  style="height: 700px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h3>Reduzir, Reciclar e Reutilizar</h3>
          <p></p>
        </div>
        <div class="carousel-item ">
          <img src="./src/imagens/rells2.jpg" class="d-block w-100" alt="..." style="height: 700px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h3>Reduzir, Reciclar e Reutilizar</h3>
          <p></p>
        </div>
        <div class="carousel-item ">
          <img src="./src/imagens/rells3.jpg" class="d-block w-100" alt="..." style="height: 700px;">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <img src="./src/imagens/icons/reciclagemImg.png" alt="" style="height: 60px;">
          <h3>Reduzir, Reciclar e Reutilizar</h3>
          <p></p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section id="products" class="container my-5">
    <h2 class="text-center mb-4">Nossos Produtos</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- Card de exemplo para Roupas -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="./src/imagens/camisa.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
          <div class="card-body">
            <h5 class="card-title">Camiseta</h5>
            <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
            <p class="card-text"><strong>T$ 30,90</strong></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
              Ver detalhes
            </button>

          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Camiseta</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Card de exemplo para Itens -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="./src/imagens/eco_bag.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
          <div class="card-body">
            <h5 class="card-title">Ecobag Reutilizável</h5>
            <p class="card-text">Sacola durável e estilosa, perfeita para suas compras do dia a dia.</p>
            <p class="card-text"><strong>T$ 15,90</strong></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              Ver detalhes
            </button>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel2">Ecobeg Reutilizável</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Adicione mais cards conforme necessário -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="./src/imagens/calsa_jeans.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
          <div class="card-body mt-auto">
            <h5 class="card-title">Calça Jeans</h5>
            <p class="card-text">Calça jeans feminina feita com 90% de material reciclável, perfeita para o dia a dia.
            </p>
            <p class="card-text"><strong>T$ 35,90</strong></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
              Ver detalhes
            </button>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel3">Calça Jeans</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section id="trashcoin">
    <div class="container my-5">
      <h2 class="text-center mb-4">Como Funciona a Trashcoin?</h2>
      <p class="text-center">
        A Trashcoin é a moeda digital da Trashop, projetada para incentivar práticas sustentáveis. Você pode ganhar
        Trashcoins ao reciclar produtos em nossa loja ou ao participar de campanhas ecológicas. Use suas Trashcoins para
        obter descontos exclusivos em nossos produtos reciclados e reutilizáveis.
      </p>
      <div class="container justify-content-center text-center my-5">
        <div class="row  px-2 ">
          <div class="col">
            <img style="height: 80px;" src="./src/imagens/icons/trash3.svg" alt="">
            <p class="h5">Leve produtos e materiais recicláveis ou usados a um ponto de coleta</p>
          </div>
          <div class="col">
            <img style="height: 80px;" src="./src/imagens/icons/arrow-right.svg" alt="">
          </div>
          <div class="col">
            <img style="height: 80px;" src="./src/imagens/icons/wallet2.svg" alt="">
            <p class="h5">Retorne em Trashcoins na sua carteira </p>
          </div>
          <div class="col">
            <img style="height: 80px;" src="./src/imagens/icons/arrow-right.svg" alt="">
          </div>
          <div class="col">
            <img style="height: 80px;" src="./src/imagens/icons/ticket-detailed.svg" alt="">
            <p class="h5">Gaste em produtos recicláveis dentro da loja</p>
          </div>
        </div>

      </div>
  </section>
  <section id="about-us">
    <div class="container my-5">
      <h2 class="text-center mb-4">Sobre Nós</h2>
      <p class="text-center">
        Na Trashop, acreditamos que pequenas ações podem fazer uma grande diferença. Nossa missão é promover a
        sustentabilidade através da venda de produtos reciclados e reutilizáveis, ajudando a reduzir o impacto ambiental
        e incentivando um estilo de vida mais consciente.
      </p>
    </div>
  </section>
  
  <?php require_once './src/includes/rodape.php' ?>