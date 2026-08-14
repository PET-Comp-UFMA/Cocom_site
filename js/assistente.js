const botaoAtivar = document.querySelector('.assistente');
const janelaChat = document.querySelector('.dialogo_ia');
const botaoFechar = document.querySelector('.dialogo_ia nav button');
const corpoChat = document.querySelector('.corpo_chat');
const inputMensagem = document.querySelector('.parte_inferior input');
const botaoEnviar = document.querySelector('.btn_enter');

const CHAVE_HISTORICO = 'cocom_chat_historico';
const MENSAGEM_BOAS_VINDAS = 'Olá! Sou a assistente virtual da COCOM. Como posso ajudar você hoje?';

function abrirchat(){
    botaoAtivar.style.visibility = "hidden";
    janelaChat.classList.add("mostrar");
    carregarHistorico();
}

botaoAtivar.addEventListener("click", abrirchat)

botaoFechar.addEventListener('click', (evento) => {
    evento.stopPropagation();
    janelaChat.classList.remove('mostrar');
    botaoAtivar.style.visibility = "visible";
});

function obterHistorico(){
    const dados = sessionStorage.getItem(CHAVE_HISTORICO);
    return dados ? JSON.parse(dados) : []
}

function salvarHistorico(autor, texto){
    const historico = obterHistorico();
    historico.push({
        autor, 
        texto,
        hora: new Date().toISOString()
    })
    sessionStorage.setItem(CHAVE_HISTORICO, JSON.stringify(historico));
}

function carregarHistorico(){
    const mensagensJaNaTela = corpoChat.querySelectorAll('.msg_bot, .msg_usuario').length;
    if (mensagensJaNaTela > 0) return; // já carregado antes, não duplica
 
    const historico = obterHistorico();
 
    if (historico.length === 0){
        // primeira vez que o usuário abre o chat: mostra e salva a saudação
        adicionarBolha('ia', MENSAGEM_BOAS_VINDAS);
        return;
    }
 
    historico.forEach(item => {
        adicionarBolha(item.autor, item.texto, false);
    });
    rolarParaFinal();

}

function adicionarBolha(autor, texto, salvar = true){
    const bolha =document.createElement('div');
    bolha.classList.add(autor === 'usuario' ? 'msg_usuario' : 'msg_bot');
    bolha.textContent = texto;
    corpoChat.appendChild(bolha);
    rolarParaFinal()

    if (salvar){
        salvarHistorico(autor, texto);
    }
}

function rolarParaFinal(){
    corpoChat.scrollTop = corpoChat.scrollHeight;
}

function mostrarDigitando(){
    const indicador = document.createElement('div');
    indicador.classList.add('msg_bot', 'msg_digitando');
    indicador.textContent = 'Digitando...';
    corpoChat.appendChild(indicador);
    rolarParaFinal();
    return indicador;
}
 
function removerDigitando(indicador){
    if (indicador && indicador.parentNode){
        indicador.parentNode.removeChild(indicador);
    }
}


async function enviarMensagem(){
    const texto = inputMensagem.value.trim();
    if (texto === '') return;
 
    // 1. mostra e salva a mensagem do usuário
    adicionarBolha('usuario', texto);
    inputMensagem.value = '';
    inputMensagem.focus();
 
    // 2. pede a resposta da IA
    const indicador = mostrarDigitando();
 
    try {
        const resposta = await perguntarIA(texto);
        removerDigitando(indicador);
        adicionarBolha('ia', resposta);
    } catch (erro) {
        removerDigitando(indicador);
        adicionarBolha('ia', 'Desculpe, tive um problema para responder agora. Tente novamente.');
        console.error('Erro ao consultar a IA:', erro);
    }
}


async function perguntarIA(mensagemUsuario){
    const resposta = await fetch('assistente_ia.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            mensagem: mensagemUsuario,
            historico: obterHistorico() // manda o contexto da conversa também
        })
    });
 
    if (!resposta.ok){
        throw new Error('Falha na resposta do servidor: ' + resposta.status);
    }
 
    const dados = await resposta.json();
    return dados.resposta; // o PHP deve devolver { "resposta": "texto da IA" }
}


botaoEnviar.addEventListener('click', enviarMensagem);
 
inputMensagem.addEventListener('keydown', (evento) => {
    if (evento.key === 'Enter'){
        evento.preventDefault();
        enviarMensagem();
        
    }
});
