var slideIndex = 0;
displaySlides();

function displaySlides() {

    slides = document.getElementsByClassName("slides");

    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    slideIndex ++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    slides[slideIndex-1].style.display = "block";
    setTimeout(displaySlides, 3000);
}