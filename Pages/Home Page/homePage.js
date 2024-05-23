// script.js
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-inner img');
const totalSlides = slides.length;

function showSlide(index) {
    const carouselInner = document.querySelector('.carousel-inner');
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }
    const offset = -currentSlide * 100;
    carouselInner.style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

document.querySelector('.next').addEventListener('click', nextSlide);
document.querySelector('.prev').addEventListener('click', prevSlide);

// Auto slide every 3 seconds
setInterval(nextSlide, 5000);

// Initialize the first slide
showSlide(currentSlide);

//HOMEPAGE FORM

document.getElementById('university').addEventListener('click', function() {
    // You can use a library or custom code to create a dropdown menu for universities
    const universities = ["University Putra Malaysia", "Universiti Malaya", "Herriot Watt", "Taylors University"];
    let dropdown = document.createElement('div');
    dropdown.setAttribute('id', 'dropdown');
    dropdown.style.position = 'absolute';
    dropdown.style.background = '#fff';
    dropdown.style.border = '1px solid #ccc';
    dropdown.style.maxHeight = '200px';
    dropdown.style.overflowY = 'auto';
    dropdown.style.zIndex = '1000';
    this.parentNode.appendChild(dropdown);

    universities.forEach(function(university) {
        let option = document.createElement('div');
        option.style.padding = '10px';
        option.style.cursor = 'pointer';
        option.textContent = university;
        option.addEventListener('click', function() {
            document.getElementById('university').value = university;
            dropdown.remove();
        });
        dropdown.appendChild(option);
    });

    document.addEventListener('click', function(e) {
        if (!document.getElementById('dropdown').contains(e.target) && e.target.id !== 'university') {
            dropdown.remove();
        }
    }, { once: true });
});


