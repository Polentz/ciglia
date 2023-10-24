const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const menuOpener = () => {
    const opener = document.getElementById("menu-opener");
    const menu = document.getElementById("menu");
    const menuContent = menu.querySelector(".menu-wrapper");
    const main = document.querySelector(".main");
    const body = document.body
    opener.addEventListener("click", () => {
        opener.classList.toggle("--rotate");
        menu.classList.toggle("--open");
        main.classList.toggle("--disable");
        body.classList.toggle("--disable");
        setTimeout(() => {
            menuContent.classList.toggle("--open");
        }, 100);
    });
};

window.addEventListener("load", () => {
    documentHeight();
    menuOpener();
});

window.addEventListener("resize", () => {
    documentHeight();
});