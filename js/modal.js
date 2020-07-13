button = document.querySelector(".btn-modal");
modal = document.querySelector(".modal");
radioInputs = document.querySelectorAll("input[type='radio']");
currentState = getState();

if (!currentState) {
    $("#modalState").modal("show");
}

button.addEventListener("click", () => {
    stateChecked = null;

    radioInputs.forEach((input) => {
        if (input.checked) stateChecked = input.value;
    });

    if (stateChecked) {
        setState(stateChecked);
        $("#modalState").modal("hide");
        modal.remove();
    }
});

function getState() {
    return localStorage.getItem("estado");
}
function setState(state) {
    localStorage.setItem("estado", "" + state);
}
