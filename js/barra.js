(function () {
    let currentContrast = null,
        fontScale = 0;

    // Contrast functionality

    function checkContrast() {
        updateViewContrast();
    }

    function getContrastState() {
        return localStorage.getItem("contrastState") === "true";
    }

    function setContrastState(state) {
        localStorage.setItem("contrastState", "" + state);
        currentContrast = state;
        updateViewContrast();
    }

    function updateViewContrast() {
        const body = document.body;

        if (currentContrast === null) currentContrast = getContrastState();

        if (currentContrast) body.classList.add("contrast");
        else body.classList.remove("contrast");
    }

    function toogleContrast() {
        setContrastState(!currentContrast);
    }

    // Font size functionality

    const fontUp = document.querySelector(".increase"),
        fontDown = document.querySelector(".decrease");

    fontUp.addEventListener("click", changeFontSize);
    fontDown.addEventListener("click", changeFontSize);

    function changeFontSize(e) {
        fontScale = getFontScale();
        const elements = document.querySelectorAll(
            "body,h1,h2,h3,h4,h5,h6,p,a,button,input,li,span,div"
        );
        if (e.target.classList.contains("increase")) {
            if (fontScale >= 3) {
                e.target.classList.add("max");
                return;
            }

            e.target.classList.remove("max");

            elements.forEach((el) => {
                let currentFontSize = getComputedStyle(el)
                    .getPropertyValue("font-size")
                    .slice(0, -2);
                el.style.fontSize = (1.05 * currentFontSize).toFixed() + "px";
            });
            fontScale++;

            if (fontScale >= 3) e.target.classList.add("max");
            else {
                fontUp.classList.remove("max");
                fontDown.classList.remove("max");
            }
        } else {
            if (fontScale <= -3) {
                e.target.classList.add("max");
                return;
            }

            e.target.classList.remove("max");

            elements.forEach((el) => {
                let currentFontSize = getComputedStyle(el)
                    .getPropertyValue("font-size")
                    .slice(0, -2);
                el.style.fontSize = (currentFontSize / 1.05).toFixed() + "px";
                console.log("tamanho:" + el.style.fontSize);
            });
            fontScale--;

            if (fontScale <= -3) e.target.classList.add("max");
            else {
                fontUp.classList.remove("max");
                fontDown.classList.remove("max");
            }
        }

        setFontScale(fontScale);
    }

    function getFontScale() {
        return localStorage.getItem("ADDfontSize") || 0;
    }

    function setFontScale(sizeNumber) {
        localStorage.setItem("ADDfontSize", "" + sizeNumber);
    }

    function updateFontSize() {
        const elements = document.querySelectorAll(
            "body,h1,h2,h3,h4,h5,h6,p,a,button,input,li,span,div"
        );

        fontScale = getFontScale();

        if (!fontScale) return;

        if (fontScale >= 3) fontUp.classList.add("max");
        else if (fontScale <= -3) fontDown.classList.add("max");

        elements.forEach((el) => {
            if (fontScale > 0) {
                for (i = 0; i < fontScale; i++) {
                    let currentFontSize = getComputedStyle(el)
                        .getPropertyValue("font-size")
                        .slice(0, -2);
                    el.style.fontSize =
                        (1.05 * currentFontSize).toFixed() + "px";
                }
            } else if (fontScale < 0) {
                for (i = 0; i > fontScale; i--) {
                    let currentFontSize = getComputedStyle(el)
                        .getPropertyValue("font-size")
                        .slice(0, -2);
                    el.style.fontSize =
                        (currentFontSize / 1.05).toFixed() + "px";
                }
            }
        });
    }

    function checkFontSize() {
        updateFontSize();
    }

    // Checking all

    checkContrast();
    checkFontSize();

    window.changeFonts = () => changeFontSize();
    window.toggleContrast = () => toogleContrast();

    // localStorage.removeItem("ADDfontSize");
})();
