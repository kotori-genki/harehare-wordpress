/*ナビゲーションウィンドウアニメーション*/
let nav = document.querySelector("#navArea");
let btn = document.querySelector(".toggle-btn");
let mask = document.querySelector("#mask");

btn.onclick = () => {
    nav.classList.toggle("open");
}
mask.onclick = () => {
    nav.classList.toggle("open");
}

/*スクロールアニメーション*/
const targetElement = document.querySelectorAll(".main-animationTarget");
document.addEventListener("scroll", function () {
    for (let i = 0; i < targetElement.length; i++) {
        const getElementDistance = targetElement[i].getBoundingClientRect().top
        if (window.innerHeight > getElementDistance) {
            targetElement[i].classList.add("show");
        }
    }
});
const targetElement2 = document.querySelectorAll(".card-animationTarget ,.human-content");
document.addEventListener("scroll", function () {
    for (let i = 0; i < targetElement2.length; i++) {
        const getElementDistance = targetElement2[i].getBoundingClientRect().top + targetElement2[i].clientHeight * 0.2
        if (window.innerHeight > getElementDistance) {
            targetElement2[i].classList.add("show");
        }
    }
});
