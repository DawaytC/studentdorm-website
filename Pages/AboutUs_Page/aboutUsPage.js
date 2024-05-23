document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const answer = button.nextElementSibling;
        const faqAnswers = document.querySelectorAll('.faq-answer');

        // Close other answers
        faqAnswers.forEach(otherAnswer => {
            if (otherAnswer !== answer) {
                otherAnswer.classList.remove('active');
                otherAnswer.style.maxHeight = null;
                otherAnswer.style.opacity = 0;
                otherAnswer.style.padding = '0 15px';
            }
        });

        // Toggle the clicked answer
        if (answer.classList.contains('active')) {
            answer.classList.remove('active');
            answer.style.maxHeight = null;
            answer.style.opacity = 0;
            answer.style.padding = '0 15px';
        } else {
            answer.classList.add('active');
            answer.style.maxHeight = answer.scrollHeight + 'px';
            answer.style.opacity = 1;
            answer.style.padding = '10px 15px'; // Adjust padding as needed
        }
    });
});