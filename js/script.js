const productCardTemplate = document.querySelector("[data-product-template]")
const productCardContainer = document.querySelector("[data-product-cards-container]")
const searchInput = document.querySelector("[data-search]")

let products = []

searchInput.addEventListener("input", e => {
    const value = e.target.value.toLowerCase()
    products.forEach(product => {
        const isVisible = product.title.toLowerCase().includes(value)
        product.element.classList.toggle('hidden', !isVisible)
    })
})

fetch("https://fakestoreapi.com/products")
    .then(res => res.json())
    .then(data => {
        products = data.map(product => {
            const card = productCardTemplate.content.cloneNode(true).children[0]
            const title = card.querySelector("[data-title]")
            const price = card.querySelector("[data-price]")
            const image = card.querySelector("[data-image]")
            const category = card.querySelector("[data-category]")
            title.textContent = product.title
            price.textContent = product.price
            image.src = product.image
            category.textContent = product.category
            productCardContainer.append(card)
            return {title: product.title, category: product.category, price: product.price, image: product.image, element: card}
        })
    })

function filterProduct(value){
    let buttons = document.querySelectorAll(".menu-button");
    buttons.forEach((button) => {
        if(value.toLowerCase() == button.innerText.toLowerCase()){
            button.classList.add("button-active");
        }
        else{
            button.classList.remove("button-active")
        }
    })

    products.forEach(product => {
        if(value == "all"){
            product.element.classList.remove("hidden")
        } else if(value == "electronics" || value == "jewelery") {
            const isVisible = product.category.toLowerCase().includes(value.toLowerCase())
            product.element.classList.toggle('hidden', !isVisible)
        } else if(value == "mens-clothing" || value == "womens-clothing"){
            let typeClothing;
            
            if(value == "mens-clothing"){
                typeClothing = "men's clothing"
            } else {
                typeClothing = "women's clothing"
            }

            const isVisible = product.category.toLowerCase().includes(typeClothing.toLowerCase())
            product.element.classList.toggle('hidden', !isVisible)
        }
    })
}
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