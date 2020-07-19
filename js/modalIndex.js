let button = document.querySelector(".btn-modal");
let modal = document.querySelector(".modal");
let radioInputs = document.querySelectorAll("input[name='state']");
let currentState = getState();

if (!currentState) $("#modalState").modal("show");
else modal.remove();

button.addEventListener("click", () => {
    let stateChecked = null;

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
