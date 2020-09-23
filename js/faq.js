let boxes = document.querySelectorAll(".question-box");

boxes.forEach((box) => {
    box.addEventListener("click", () => {
        questionBox = box;
        span = box.querySelector(".expand-button");
        span.classList.toggle("active");
        if (questionBox.style.maxHeight) {
            questionBox.style.maxHeight = null;
        } else {
            questionBox.style.maxHeight = questionBox.scrollHeight + "px";
        }
    });
});
