const botaoAtivar = document.querySelector('.assistente_ia');
const janelaChat = document.querySelector('.dialogo_ia');
const botaoFechar = document.querySelector('.dialogo_ia nav button');
botaoAtivar.addEventListener('click', () => {
    janelaChat.classList.toggle('mostrar');
});


botaoFechar.addEventListener('click', (evento) => {
    evento.stopPropagation();
    janelaChat.classList.remove('mostrar');
});