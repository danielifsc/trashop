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
            <!-- Card de exemplo para Roupas -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta</h5>
                        <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 30,90</strong></p>
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
                    <img src="imagens/eco_bag.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Ecobag Reutilizável</h5>
                        <p class="card-text">Sacola durável e estilosa, perfeita para suas compras do dia a dia.</p>
                        <p class="card-text"><strong>T$ 15,90</strong></p>
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
                    <img src="imagens/calsa_jeans.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça jeans feminina feita com 90% de material reciclável, perfeita para o dia a dia.
                        </p>
                        <p class="card-text"><strong>T$ 35,90</strong></p>
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
             <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta</h5>
                        <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 30,90</strong></p>
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
                    <img src="imagens/eco_bag.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Ecobag Reutilizável</h5>
                        <p class="card-text">Sacola durável e estilosa, perfeita para suas compras do dia a dia.</p>
                        <p class="card-text"><strong>T$ 15,90</strong></p>
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
                    <img src="imagens/calsa_jeans.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça jeans feminina feita com 90% de material reciclável, perfeita para o dia a dia.
                        </p>
                        <p class="card-text"><strong>T$ 35,90</strong></p>
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
             <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta</h5>
                        <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 30,90</strong></p>
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
                    <img src="imagens/eco_bag.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Ecobag Reutilizável</h5>
                        <p class="card-text">Sacola durável e estilosa, perfeita para suas compras do dia a dia.</p>
                        <p class="card-text"><strong>T$ 15,90</strong></p>
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
                    <img src="imagens/calsa_jeans.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça jeans feminina feita com 90% de material reciclável, perfeita para o dia a dia.
                        </p>
                        <p class="card-text"><strong>T$ 35,90</strong></p>
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
             <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="imagens/camisa.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 1">
                    <div class="card-body">
                        <h5 class="card-title">Camiseta</h5>
                        <p class="card-text">Feita com algodão 100% reciclado, design moderno e sustentável.</p>
                        <p class="card-text"><strong>T$ 30,90</strong></p>
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
                    <img src="imagens/eco_bag.webp" height="400px" width="300px" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Ecobag Reutilizável</h5>
                        <p class="card-text">Sacola durável e estilosa, perfeita para suas compras do dia a dia.</p>
                        <p class="card-text"><strong>T$ 15,90</strong></p>
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
                    <img src="imagens/calsa_jeans.webp" height="400px" width="300px" class="card-img-top" alt="Roupa 3">
                    <div class="card-body mt-auto">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça jeans feminina feita com 90% de material reciclável, perfeita para o dia a dia.
                        </p>
                        <p class="card-text"><strong>T$ 35,90</strong></p>
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

</main>

<?php
require_once 'includes/rodape.php';
?>