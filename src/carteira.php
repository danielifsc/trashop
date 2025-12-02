<?php
require_once 'includes/cabecalho-log.php';
?>
<?php
require_once 'includes/db.php'
?>

<?php
$usuario_id = isset($_SESSION["usuario_id"]) ? $_SESSION["usuario_id"] : 0;

$sql = "SELECT carteira FROM usuario ORDER BY id";
$conexao = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
try {
    // 1. Prepara a consulta
    $pre = $conexao->prepare($sql);

    // 2. Executa a consulta, passando o parâmetro
    $pre->execute([
        ":id" => $usuario_id
    ]);

    // 3. Busca o resultado como um array associativo
    $dados_carteira = $pre->fetch(PDO::FETCH_ASSOC);

    // 4. Extrai o valor da coluna "trashcoin". 
    // Se não houver resultado, define como 0.
    $trashcoin = $dados_carteira ? (int) $dados_carteira["carteira"] : 0;

} catch (PDOException $e) {
    // Trata erro de conexão ou query
    error_log("Erro no banco de dados: " . $e->getMessage());
    $trashcoin = 0;
} finally {
    $conexao = null;
}
?>


<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<section>
    <h1 class="text-center"> Carteira de Trashcoins</h1>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            Carteira de Trashcoins
        </div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $trashcoin ?> <img src="imagens/icons/moedaVerde.png" alt="" style="height: 30px;"></h4>
            <p class="card-text">Acesse a rede coletora mais próxima, doe sua roupa/material não usado e recebe trashcois, após isso acesse nossa página de produtos e compre produtos recicláveis</p>
            <a id="addCoins" href="#addcoin" class="btn btn-primary">Adquirir Trashcoins</a>
        </div>
    </div>

</section>

<!--<script src="assets/js/jquery/jquery.min.js"></script>-->
<script src="assets/js/carteira.js"></script>

<?php
require_once 'includes/rodape.php';
?>