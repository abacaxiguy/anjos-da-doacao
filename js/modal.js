button = document.querySelector(".btn-modal");
modal = document.querySelector(".modal");
radioInputs = document.querySelectorAll("input[name='state']");
currentState = getState();

if (!currentState) $("#modalState").modal("show");
else modal.remove();

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
