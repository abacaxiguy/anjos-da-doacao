let spans = document.querySelectorAll(".expand-button");

spans.forEach((span) => {
    span.addEventListener("click", () => {
        span.classList.toggle("active");
        if (span.parentElement.style.maxHeight) {
            span.parentElement.style.maxHeight = null;
        } else {
            span.parentElement.style.maxHeight =
                span.parentElement.scrollHeight + "px";
        }
    });
});
