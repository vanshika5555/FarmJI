document.addEventListener("DOMContentLoaded", () => {
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    const sign_in_btn2 = document.querySelector("#sign-in-btn2");
    const sign_up_btn2 = document.querySelector("#sign-up-btn2");

    // Toggle sign-up mode
    sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });

    // Toggle sign-in mode
    sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });

    // Responsive toggle for sign-up
    sign_up_btn2.addEventListener("click", () => {
        container.classList.add("sign-up-mode2");
    });

    // Responsive toggle for sign-in
    sign_in_btn2.addEventListener("click", () => {
        container.classList.remove("sign-up-mode2");
    });
});