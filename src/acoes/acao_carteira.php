
<?php /*
//session_start();
require_once 'includes/db.php'; 

// Define o cabeçalho para garantir que a resposta será JSON
header('Content-Type: application/json');

$response = [
    'sucesso' => false,
    'mensagem' => 'Requisição inválida.'
];

// 1. Verifica se é POST, se o usuário está logado e se a ação correta foi enviada
if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST" && 
    isset($_SESSION["usuario_id"]) && 
    filter_input(INPUT_POST, "acao") === 'incrementar_trashcoin') {
    
    $usuario_id = $_SESSION["usuario_id"];

    try {
        $conexao = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Inicia uma transação para garantir que as duas queries sejam atômicas
        $conexao->beginTransaction();
        
        // 2. Query de UPDATE: Incrementa o valor
        $sql_update = "UPDATE carteira SET trashcoin = trashcoin + 1 WHERE usuario_id = :id";
        $pre_update = $conexao->prepare($sql_update);
        $pre_update->execute([":id" => $usuario_id]);

        // 3. Query de SELECT: Busca o novo valor para retornar ao JS
        $sql_select = "SELECT trashcoin FROM carteira WHERE usuario_id = :id";
        $pre_select = $conexao->prepare($sql_select);
        $pre_select->execute([":id" => $usuario_id]);
        $novo_saldo = $pre_select->fetchColumn();

        $conexao->commit(); // Confirma as operações

        $response['sucesso'] = true;
        $response['mensagem'] = 'Trashcoin adicionado.';
        $response['novo_saldo'] = (int) $novo_saldo; // Retorna o novo valor

    } catch (PDOException $e) {
        $conexao->rollBack(); // Desfaz se houver erro
        error_log("Erro de Banco de Dados: " . $e->getMessage());
        $response['mensagem'] = 'Erro interno do servidor.';
    } finally {
        $conexao = null;
    }
}

// Retorna a resposta JSON para o JavaScript
echo json_encode($response);
exit;
*/?>