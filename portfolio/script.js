document.addEventListener('DOMContentLoaded', function () {
    


    let currentIndex = 0;
    const portfolioContainer = document.querySelector('.portfolio_con_main');
    const portfolioItems = document.querySelectorAll('.portfolio_con');
    const totalItems = portfolioItems.length;

    function changeSlide(direction) {
        currentIndex = (currentIndex + direction + totalItems) % totalItems;
        const translateValue = -currentIndex * 100 + '%';
        portfolioContainer.style.transform = 'translateX(' + translateValue + ')';
    }
});