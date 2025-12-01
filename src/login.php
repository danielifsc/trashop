<?php
require_once 'includes/cabecalho.php';
?>

<?php
ini_set("session.cookie_secure", 1);
session_start();
?>
<?php
require_once("includes/db.php");
//verificando se é uma requisição post para efetuar o login
if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {
    try {
        $erros = [];
        $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

        $sql = "select * from usuario where login = ?";

        $conexao = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

        $pre = $conexao->prepare($sql);
        $pre->execute(array(
            $login
        ));

        $resultado = $pre->fetch();

        if (!$resultado) {
            throw new Exception("Login inválido!");
        } else {
            if (password_verify($senha, $resultado["senha"]) === false) {
                throw new Exception("Senha inválida!");
            } else {
                $_SESSION["usuario_id"] = $resultado["id"];
                $_SESSION["usuario"] = $resultado["nome"];
            }
        }

        header("HTTP 1/1 302 Redirect");
        header("location: index.php");
    } catch (Exception $e) {
        $erros[] = $e->getMessage();
        $_SESSION["erros"] = $erros;
    } finally {
        $conexao = null;
    }
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome/brands.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome/solid.min.css" rel="stylesheet">
    <link href="assets/css/sistema/landpage.css" rel="stylesheet">
    <link href="assets/css/sistema/login.css" rel="stylesheet">

</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <main class="form-signin">
        <?php
        if (isset($_SESSION["erros"])) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
            echo "<button type='button' class='btn-close btn-sm' data-bs-dismiss='alert'
                aria-label='Close'></button>";
            foreach ($_SESSION["erros"] as $chave => $valor) {
                echo $valor . "<br>";
            }
            echo "</div>";
        }
        unset($_SESSION["erros"]);
        ?>
        <form id="formlogin" action="login.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Favor logar-se</h1>
            <div class="form-floating">
                <input type="texto" class="form-control" id="login" name="login" maxlength="10" placeholder="Login" required="required"> <label for="login">Login
                </label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="senha" name="senha" maxlength="15" placeholder="Senha"> <label for="senha">Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
        </form>
        <p class="text-center"><a href="cadastro.php">Cadastrar-se!</a></p>
    </main>

    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/fontawesome/fontawesome.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>


<?php
require_once 'includes/rodape.php';
?>