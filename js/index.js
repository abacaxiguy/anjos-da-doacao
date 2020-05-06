window.onscroll = () => scrollFunction();

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("barraNavegacao").classList.remove("Qscrolled");
        document.getElementById("barraNavegacao").classList.add("scrolled");
        document.getElementById("aparece").style.opacity = 1;
    } else {
        document.getElementById("barraNavegacao").classList.remove("scrolled");
        document.getElementById("barraNavegacao").classList.add("Qscrolled");
        document.getElementById("aparece").style.opacity = 0;
    }
}
function botaBg() {
    botao = document.getElementById("botao").getAttribute("aria-expanded");
    nav = document.getElementById("barraNavegacao");
    if (botao == "false") {
        nav.classList.add("scrolled");
    } else if (
        botao == "true" &&
        !(
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        )
    ) {
        nav.classList.remove("scrolled");
        nav.classList.add("Qscrolled");
    }
}
