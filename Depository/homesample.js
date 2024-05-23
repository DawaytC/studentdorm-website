document.addEventListener('DOMContentLoaded', () => {
    const prevButtons = document.querySelectorAll('.carousel-prev');
    const nextButtons = document.querySelectorAll('.carousel-next');
    
    prevButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const track = button.nextElementSibling;
            track.scrollBy({left: -track.clientWidth, behavior: 'smooth'});
        });
    });

    nextButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const track = button.previousElementSibling;
            track.scrollBy({left: track.clientWidth, behavior: 'smooth'});
        });
    });
});
