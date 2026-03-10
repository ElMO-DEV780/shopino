/*
const images = document.querySelectorAll('.slider img');
const slider = document.querySelector('.slider');
const leftArrow = document.querySelector('.slider-l');
const rightArrow = document.querySelector('.slider-r');

leftArrow.addEventListener('click',slideL);
rightArrow.addEventListener('click',slideR);

let index = 0;
function slideL() {
    if(index >= images.length) index = 0;
    for(i=0 ; i < images.length; i++) {
        if(i != index) images[i].style.display = 'none';
    }
    images[index].style.display = 'block';
    index++;
}

function slideR() {
    if(index < 0) index = images.length -1 ;
    for(i=0 ; i < images.length; i++) {
        if(i != index) images[i].style.display = 'none';
    }
    images[index].style.display = 'block';
    index--;
}
slideL();
*/

/* dashboard search input */

const searchInput = document.getElementById("search_input");
const productsContainer = document.getElementById("products_container");
let product_name = productsContainer.firstChild.textContent;

searchInput.addEventListener("keyup", ()=> {
    productsContainer.style.display = product_name == searchInput.value ? 'block' : 'none';
});