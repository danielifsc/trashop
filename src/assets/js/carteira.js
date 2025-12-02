// Aguarda o carregamento completo do documento
/*$(document).ready(function() {
    
    // 1. Escuta o clique no botão com o ID "btnAdicionar"
    $("#addCoins").on("click", function() {
        
        // Desabilita o botão para evitar cliques duplos durante o processamento
        $(this).prop("disabled", true).text("Adicionando..."); 
        
        // 2. Realiza a requisição AJAX via POST
        $.ajax({
            url: 'acoes/acao_carteira.php', // O arquivo PHP que fará o UPDATE
            type: 'POST',
            data: { acao: 'incrementar_trashcoin' }, // Dados a serem enviados para o PHP
            dataType: 'json', // Espera-se que o PHP retorne um JSON

            // 3. Função executada em caso de SUCESSO na requisição
            success: function(response) {
                if (response.sucesso) {
                    alert("Trashcoin adicionado com sucesso!");
                    // Atualiza o valor na tela sem recarregar a página
                    // Se o seu saldo estiver dentro de um elemento com ID 'saldo'
                    // $('#saldo').text(response.novo_saldo); 
                    
                    // Como não temos um ID específico, a maneira mais simples é recarregar
                    // apenas para ver o saldo atualizado (Ainda melhor que recarregar o script)
                    window.location.reload(); 
                } else {
                    alert("Erro ao adicionar Trashcoin: " + response.mensagem);
                }
            },

            // 4. Função executada em caso de ERRO na requisição
            error: function(xhr, status, error) {
                alert("Erro de comunicação: " + error);
                console.error("Erro AJAX: ", status, error);
            },
            
            // 5. Função executada no FINAL (sucesso ou erro)
            complete: function() {
                // Habilita o botão novamente
                $("#addCoins").prop("disabled", false).text("Adquirir Trashcoin.");
            }
        });
    });
}); */