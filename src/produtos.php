<?php
require_once 'includes/cabecalho-log.php';
?>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<main>

    <h1 class="text-center">Loja TRASHOP</h1>
    <h4 class="text-center"></h4>

    <section id="products" class="container my-5">
        <h2 class="text-center mb-4">Conheça Nossos Produtos</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Card de exemplo para Roupas 1-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta social</h5>
                        <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 30</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                            Comprar
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
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Camiseta social</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card de exemplo para Itens 2-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/eco_bag.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Ecobag Reutilizável</h5>
                        <p class="card-text">Sacola durável e estilosa, perfeita para suas compras do dia a dia.</p>
                        <p class="card-text"><strong>T$ 15</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                            Comprar
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
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ecobeg Reutilizável</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adicione mais cards conforme necessário 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/calsa_jeans.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça jeans feminina feita com 90% de material reciclável, perfeita para o dia a dia.
                        </p>
                        <p class="card-text"><strong>T$ 35</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                            Comprar
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
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Calça Jeans</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Adicione mais cards conforme necessário 4 -->
             <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa1.jpg" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 38</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                            Comprar
                        </button>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">T-Shirt</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card de exemplo para Itens 5-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa2.jpg" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Camisa Esportiva</h5>
                        <p class="card-text">Camisa 100% reciclavel para atividades fisicas</p>
                        <p class="card-text"><strong>T$ 18</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Camisa Esportiva</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adicione mais cards conforme necessário 6-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa3.jpg" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Camisa social</h5>
                        <p class="card-text">Camisa social feita com 90% de material reciclável.
                        </p>
                        <p class="card-text"><strong>T$ 33</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Camisa social</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Adicione mais cards conforme necessário 7 -->
             <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa4.jpg" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Camisa</h5>
                        <p class="card-text">Feita com algodão 90% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 30</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                            Comprar
                        </button>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabe7">Camisa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card de exemplo para Itens 8-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/calca2.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça Jeans durável e estilosa, perfeita para o dia a dia.</p>
                        <p class="card-text"><strong>T$ 15</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabe8" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Calça Jeans</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adicione mais cards conforme necessário 9-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/calca3.png" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Calça </h5>
                        <p class="card-text">Calça 100% de material reciclável.
                        </p>
                        <p class="card-text"><strong>T$ 35</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabe9" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Calça</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Adicione mais cards conforme necessário 10 -->
             <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/ecobag2.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Eco Bag</h5>
                        <p class="card-text">Perfeita para compras do dia a dia.</p>
                        <p class="card-text"><strong>T$ 30</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
                            Comprar
                        </button>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Camiseta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card de exemplo para Itens 11-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/casaco2.avif" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Casaco</h5>
                        <p class="card-text">Casaco fabricada a partir de tecidos recicláveis, ótimo para dias frios</p>
                        <p class="card-text"><strong>T$ 15</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Casaco</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adicione mais cards conforme necessário 12-->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/casaco1.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Casaco Preto</h5>
                        <p class="card-text">Casaco feito com 90% de material reciclável, perfeita para o dia a dia do inverno.
                        </p>
                        <p class="card-text"><strong>T$ 35</strong></p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
                            Comprar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Casaco Preto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Adicionado ao Carrinho
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>

</main>

<?php
require_once 'includes/rodape.php';
?>