let span = document.querySelector(".expand-button");

span.addEventListener("click", () => {
    if (span.parentElement.style.height == "10rem") {
        span.parentElement.style.height = "5rem";
    } else {
        span.parentElement.style.height = "10rem";
    }
});
