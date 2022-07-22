const productCardTemplate = document.querySelector("[data-product-template]")
const productCardContainer = document.querySelector("[data-product-cards-container]")
const searchInput = document.querySelector("[data-search]")

let products = []

searchInput.addEventListener("input", e => {
    const value = e.target.value
    console.log(products)
})

fetch("https://fakestoreapi.com/products")
    .then(res => res.json())
    .then(data => {
        products = data.map(product => {
            const card = productCardTemplate.content.cloneNode(true).children[0]
            const title = card.querySelector("[data-title]")
            const price = card.querySelector("[data-price]")
            const image = card.querySelector("[data-image]")
            title.textContent = product.title
            price.textContent = product.price
            image.src = product.image
            productCardContainer.append(card)
            return {title: product.title, price: product.price, inage: product.image, element: card}
        })
    })

// Menu ---------------------------------------------------------------------------------------
const navButton = document.getElementById("nav-button");

function toggleMenu(event){
    if(event.type === "touchstart") event.preventDefault();
    const nav = document.getElementById("nav");
    nav.classList.toggle("active");

    animateLinks();
}

navButton.addEventListener("click", toggleMenu);
navButton.addEventListener("touchstart", toggleMenu);