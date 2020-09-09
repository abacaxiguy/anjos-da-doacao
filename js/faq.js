let spans = document.querySelectorAll(".expand-button");

spans.forEach((span) => {
    span.addEventListener("click", () => {
        questionBox = span.parentElement;
        span.classList.toggle("active");
        if (questionBox.style.maxHeight) {
            questionBox.style.maxHeight = null;
        } else {
            questionBox.style.maxHeight = questionBox.scrollHeight + "px";
        }
    });
});
