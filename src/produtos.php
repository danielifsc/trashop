<?php 
require_once 'includes/cabecalho-log.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <div class="my-5"></div>
    <section id="rells" class="mt-5" style="border: solid 2px grey">

  <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCarrinho" data-nome="Preta Simples">
            <img src="imagens/camisa1.jpg" class="d-block w-50 mx-auto" alt="Camisa Preta" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Camisa Simples Preta</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCarrinho" data-nome="Camisa Adidas Vermelha">
            <img src="imagens/camisa2.jpg" class="d-block w-50 mx-auto" alt="Camisa Vermelha" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Camisa Adidas Vermelha</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCarrinho" data-nome="Camisa Social Azul">
            <img src="imagens/camisa.webp" class="d-block w-50 mx-auto" alt="Camisa Azul" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Camisa Social Azul</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCarrinho" data-nome="Rosa Salmão">
            <img src="imagens/camisa3.jpg" class="d-block w-50 mx-auto" alt="Camisa Rosa" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Camisa Social Rosa</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCarrinho" data-nome="Cinza Grafite">
            <img src="imagens/camisa4.jpg" class="d-block w-50 mx-auto" alt="Camisa Cinza" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Camisa Social Cinza</h3>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<div class="modal fade" id="modalCarrinho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalLabel">Sucesso!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-5 text-center">
        Camisa social <span id="nome-camisa-modal" class="fw-bold"></span> foi adicionada ao carrinho.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar comprando</button>
        <button type="button" class="btn btn-primary">Ir para o carrinho</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Pega o elemento do modal
  var modalCarrinho = document.getElementById('modalCarrinho');
  
  // Adiciona um evento que dispara quando o modal é aberto
  modalCarrinho.addEventListener('show.bs.modal', function (event) {
    // Botão (link) que acionou o modal
    var button = event.relatedTarget;
    // Extrai a informação do atributo data-nome
    var corCamisa = button.getAttribute('data-nome');
    
    // Atualiza o conteúdo do modal com a cor correta
    var modalTextSpan = modalCarrinho.querySelector('#nome-camisa-modal');
    modalTextSpan.textContent = corCamisa;
  });
</script>

<section id="section-calcas" class="mt-5" style="border: solid 2px grey">

  <div id="carouselCalcas" class="carousel carousel-dark slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCalcas" data-nome="Jeans Skinny">
            <img src="imagens/calca1.jpg" class="d-block w-50 mx-auto" alt="Calça Jeans" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Calça Jeans Skinny</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCalcas" data-nome="Sarja Bege">
            <img src="imagens/calca2.jpg" class="d-block w-50 mx-auto" alt="Calça Sarja" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Calça Sarja Bege</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCalcas" data-nome="Social Preta">
            <img src="imagens/calca3.jpg" class="d-block w-50 mx-auto" alt="Calça Social" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Calça Social Preta</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCalcas" data-nome="Moletom Jogger">
            <img src="imagens/calca4.jpg" class="d-block w-50 mx-auto" alt="Calça Moletom" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Calça Moletom Jogger</h3>
        </div>
      </div>

      <div class="carousel-item">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCalcas" data-nome="Cargo Verde">
            <img src="imagens/calca5.jpg" class="d-block w-50 mx-auto" alt="Calça Cargo" style="height: 500px; object-fit: contain; cursor: pointer;">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-black">Calça Cargo Militar</h3>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCalcas" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCalcas" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<div class="modal fade" id="modalCalcas" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white"> <h5 class="modal-title">Adicionado ao Carrinho</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-5 text-center">
        Você escolheu a <strong>Calça <span id="nome-calca-modal"></span></strong>.
        <br>
        <span class="text-muted fs-6">Excelente escolha para o seu estilo!</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ver mais produtos</button>
        <button type="button" class="btn btn-success">Finalizar Compra</button>
      </div>
    </div>
  </div>
</div>

<script>
  var modalCalcas = document.getElementById('modalCalcas');
  
  modalCalcas.addEventListener('show.bs.modal', function (event) {
    // Botão que ativou o modal
    var button = event.relatedTarget;
    // Extrai informação do atributo data-nome
    var modeloCalca = button.getAttribute('data-nome');
    
    // Atualiza o texto dentro do modal de calças
    var modalSpan = modalCalcas.querySelector('#nome-calca-modal');
    modalSpan.textContent = modeloCalca;
  });
</script>
</body>


</html>

<?php
require_once 'includes/rodape.php';
?>