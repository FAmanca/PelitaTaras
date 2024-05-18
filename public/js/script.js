document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector("body");
    const sidebar = document.querySelector(".sidebar");
    const toggle = document.querySelector(".bx-menu");
    const searchBtn = document.querySelector(".bx-search");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    });
});
