const navButton = document.getElementById("nav-button");

function toggleMenu(event){
    if(event.type === "touchstart") event.preventDefault();
    const nav = document.getElementById("nav");
    nav.classList.toggle("active");

    animateLinks();
}

navButton.addEventListener("click", toggleMenu);
navButton.addEventListener("touchstart", toggleMenu);