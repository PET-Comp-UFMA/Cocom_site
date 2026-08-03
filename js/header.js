document.addEventListener("DOMContentLoaded", () => {

    const menuBtn = document.querySelector(".menu-toggle");
    const menuIcon = menuBtn.querySelector("img");
    const menu = document.querySelector(".mobile-menu");
    const overlay = document.querySelector(".menu-overlay");

    function abrirMenu() {
        console.log("Abrindo");
        menu.classList.add("active");
        overlay.classList.add("active");

        menuIcon.src = "assets/favicon-v1/close.png";
        menuIcon.alt = "Fechar menu";
    }

    function fecharMenu() {
        console.log("Fechando");
        menu.classList.remove("active");
        overlay.classList.remove("active");

        menuIcon.src = "assets/favicon-v1/btn_menu.png";
        menuIcon.alt = "Abrir menu";
    }

    menuBtn.addEventListener("click", () => {
        if (menu.classList.contains("active")) {
            fecharMenu();
        } else {
            abrirMenu();
        }
    });

    overlay.addEventListener("click", fecharMenu);

    document.querySelectorAll(".mobile-menu a").forEach(link => {
        link.addEventListener("click", fecharMenu);
    });
    

});