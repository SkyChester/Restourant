const burger = document.querySelector("#burger");
const menu = document.querySelector("#menu");

burger.addEventListener("click", () => {
    menu.classList.toggle("disp");
});

let clock = document.querySelector(".clock");

function time() {
    let date = new Date();
    let hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
    let min = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
    let sec = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
    clock.innerHTML = `${hours}:${min}:${sec}`;
}

setInterval(time, 500);