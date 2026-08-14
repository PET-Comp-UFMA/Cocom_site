<?php
// assistente_ia.php
// Endpoint que recebe a mensagem do usuário (via fetch no assistente.js)
// e devolve a resposta da IA em JSON: { "resposta": "..." }

header('Content-Type: application/json; charset=utf-8');

// Só aceita POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);
    exit;
}

// Lê o corpo JSON enviado pelo JS
$corpo = json_decode(file_get_contents('php://input'), true);

$mensagemUsuario = trim($corpo['mensagem'] ?? '');
$historico = $corpo['historico'] ?? []; // array com {autor, texto, hora}

if ($mensagemUsuario === '') {
    http_response_code(400);
    echo json_encode(['erro' => 'Mensagem vazia']);
    exit;
}

// ------------------------------------------------------------------
// AQUI é onde você chama a API da IA que for usar (Anthropic, OpenAI, etc).
// Nunca coloque a chave da API no JavaScript — ela deve ficar só aqui,
// no servidor, de preferência fora da pasta pública ou em variável de ambiente.
//
// Exemplo de estrutura (pseudo-código, ajuste para a API escolhida):
//
// $chaveApi = getenv('CHAVE_API_IA'); // configure isso no seu servidor
//
// $mensagens = [];
// foreach ($historico as $item) {
//     $mensagens[] = [
//         'role' => $item['autor'] === 'usuario' ? 'user' : 'assistant',
//         'content' => $item['texto']
//     ];
// }
// $mensagens[] = ['role' => 'user', 'content' => $mensagemUsuario];
//
// $ch = curl_init('https://api.exemplo-da-ia.com/v1/chat');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Content-Type: application/json',
//     'Authorization: Bearer ' . $chaveApi
// ]);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
//     'model' => 'nome-do-modelo',
//     'messages' => $mensagens
// ]));
// $respostaBruta = curl_exec($ch);
// curl_close($ch);
// $dados = json_decode($respostaBruta, true);
// $textoResposta = $dados['content'][0]['text'] ?? 'Não consegui responder agora.';
// ------------------------------------------------------------------

// Resposta temporária de teste, enquanto você não conecta a IA de verdade:
$textoResposta = 'Recebi sua mensagem: "' . $mensagemUsuario . '". (resposta de teste, ainda sem IA conectada)';

echo json_encode(['resposta' => $textoResposta]); 