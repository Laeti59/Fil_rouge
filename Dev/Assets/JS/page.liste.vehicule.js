/* Carousel*/

let slideIndex = 0;
showSlides();

function showSlides(){
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex =1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 1000);
}

/* Carousel-2*/

let slideIndex2 = 0;
showSlides2();

function showSlides2(){
    let i;
    let slides = document.getElementsByClassName("mySlides-2");
    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex2++;
    if (slideIndex2 > slides.length) {slideIndex2 =1}
    slides[slideIndex2-1].style.display = "block";
    setTimeout(showSlides2, 1000);
}


/* Menus déroulant "Nos véhicules"*/

let menu = document.querySelector('.menu-deroulant');
menu.addEventListener('click', openModalMenu.bind(this));

console.log(menu);
function openModalMenu() {
    const modalMenu = document.createElement('div');
    modalMenu.classList.add('modalMenu');
    modalMenu.style.backgroundColor = '#bdc3c7';
    modalMenu.style.width = "550px";
    modalMenu.style.height = "250px";
    modalMenu.style.border = "1px solid #B8B8B8";
    modalMenu.style.marginTop = "15px";

    const info = document.querySelector('.info');
    info.appendChild(modalMenu);

    

    // console.log(modalMenu);
}

console.log("ici" + openModalMenu());