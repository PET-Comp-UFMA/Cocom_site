const botaoSobre = document.getElementById('btn-sobre');
const banner = document.querySelector('.banner');
const sobre = document.getElementById('sobre');
const alturaOriginalBanner = 680;
const alturaMenorBanner = 440;

function atualizarBannerNoScroll() {
    const progresso = Math.min(window.scrollY / 260, 1);
    const alturaAtual = alturaOriginalBanner - ((alturaOriginalBanner - alturaMenorBanner) * progresso);
    const paddingAtual = 25 * progresso;

    banner.style.setProperty('--banner-height', `${alturaAtual}px`);
    banner.style.setProperty('--banner-padding-y', `${paddingAtual}px`);

    if (progresso > 0.35) {
        sobre.classList.add('sobre-ativa');
    }
}

botaoSobre.addEventListener('click', () => {
    sobre.classList.add('sobre-ativa');
    window.scrollTo({
        top: alturaMenorBanner,
        behavior: 'smooth'
    });
});

window.addEventListener('scroll', atualizarBannerNoScroll);
atualizarBannerNoScroll();
