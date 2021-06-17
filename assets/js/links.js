const links = document.querySelectorAll(".nav-item")
const content = document.querySelectorAll(".collapse-content");


for(let i = 0; i < links.length; i++ ) {
    links[i].addEventListener("mouseover", hoverEnable);
    links[i].addEventListener("mouseout", hoverDisable);

    function hoverEnable() {
        content[i].classList.add("active");
    }
    function hoverDisable() {
        content[i].classList.remove("active");
    }
}