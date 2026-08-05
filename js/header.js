document.addEventListener("DOMContentLoaded", () => {

    const paginaAtual = window.location.pathname.split("/").pop() || "index.php";
    document.querySelectorAll(".nav-item").forEach(link => {
        const href = link.getAttribute("href");
        if (href === paginaAtual) {
            link.classList.add("active");
        }
    });

const btnMenu = document.querySelector(".menu-toggle");
const btnFechar = document.querySelector(".mobile-voltar");
const menu = document.querySelector(".mobile-menu");
const overlay = document.querySelector(".menu-overlay");

function abrirMenu(){
    menu.classList.add("active");
    overlay.classList.add("active");
    btnFechar.classList.add("active");
    btnMenu.style.visibility = "hidden";
}

function fecharMenu(){
    menu.classList.remove("active");
    overlay.classList.remove("active");
    btnFechar.classList.remove("active");
    btnMenu.style.visibility = "visible";
}

btnMenu.addEventListener("click", abrirMenu);
btnFechar.addEventListener("click", fecharMenu);
overlay.addEventListener("click", fecharMenu);

document.querySelectorAll(".mobile-menu a").forEach(link => {
    link.addEventListener("click", fecharMenu);
});
    

});