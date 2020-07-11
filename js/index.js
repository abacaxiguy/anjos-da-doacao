window.onscroll = () => scrollFunction();

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.querySelector('.navbar').classList.add("scrolled");
        document.querySelector(".imgAparece").style.opacity = 1;
    } else {
        document.querySelector('.navbar').classList.remove("scrolled");
        document.querySelector(".imgAparece").style.opacity = 0;
    }
}

function botaBg() {
    botao = document.querySelector('.navbar-toggler').getAttribute("aria-expanded");
    nav = document.querySelector('.navbar');
    if (botao == "false") {
        nav.classList.add("scrolled");
        document.querySelector(".imgAparece").style.opacity = 1;
    } else if (
        botao == "true" &&
        !(
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        )
    ) {
        nav.classList.remove("scrolled");
        document.querySelector(".imgAparece").style.opacity = 0;
    }
}
