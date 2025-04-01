function forward() {
    const active = document.querySelector(".active");
    active.classList.remove("active");

    if(active.nextElementSibling) {
        active.nextElementSibling.classList.add("active");
    }else{
        active.parentElement.firstElementChild.classList.add("active");
    }
}

function backward() {
    const active = document.querySelector(".active");
    active.classList.remove("active");
    if(active.previousElementSibling) {
        active.previousElementSibling.classList.add("active");
    }else{
        active.parentElement.lastElementChild.classList.add("active");
    }
}
const next = document.querySelector("#right");
next.addEventListener("click", forward);

const prev = document.querySelector("#left");
prev.addEventListener("click", backward);