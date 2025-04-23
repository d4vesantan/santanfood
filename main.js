const showPopBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const loginSignupLink = document.querySelectorAll(".form-box .bottom-link a");
const hidePopBtn = document.querySelector(".form-popup .close-btn");

showPopBtn.addEventListener('click', () => {
    document.body.classList.toggle("show-popup")
});

hidePopBtn.addEventListener("click", () => showPopBtn.click());

/* loginSignupLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === "signup-link" ? 'add' : 'remove']("show-signup");
        
    });
}); */

function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}