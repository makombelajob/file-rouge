const burger = document.querySelector("#burger");
const closeBtn = document.querySelector("#close");
const openList = document.querySelector(".open");

burger.addEventListener("click", function() {
    openList.style.display = "block";
});

closeBtn.addEventListener("click", function() {
    openList.style.display = "none";
});

const body = document.body;
body.addEventListener("click", function(e) {
    if(!burger.contains(e.target) && !closeBtn.contains(e.target) && !openList.contains(e.target)){
        openList.style.display = "none";
    }
});