// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("load", () => {
        window.addEventListener('scroll', function() {
            var banner = document.getElementById('booking-banner');
            if (window.scrollY > (window.innerHeight / 2)) {
                banner.style.transform = 'translateY(-50%) translateX(calc(100% - 42px))';
            } else {
                banner.style.transform = 'translateY(-50%) translateX(0)';
            }
        });
    });
});