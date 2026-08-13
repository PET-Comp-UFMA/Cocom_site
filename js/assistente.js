const botaoAtivar = document.querySelector('.assistente');
const janelaChat = document.querySelector('.dialogo_ia');
const botaoFechar = document.querySelector('.dialogo_ia nav button');
const corpoChat = document.querySelector('.corpo_chat');
const inputMensagem = document.querySelector('.parte_inferior input');
const botaoEnviar = document.querySelector('.btn_enter');

const CHAVE_HISTORICO = 'cocom_chat_historico';

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

function obterHIstorico(){
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

