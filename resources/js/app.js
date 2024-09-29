import './bootstrap';

function toggleMenu() {
    const nav = document.querySelector('.navbar-collapse');
    const overlay = document.getElementById('nav-overlay');
    const navbarToggler = document.querySelector('.navbar-toggler');

    if (nav.classList.contains('show')) {
        // Hide the overlay and close the menu
        overlay.classList.remove('active');
        navbarToggler.classList.add('collapsed'); // Reset the hamburger icon
    } else {
        // Show the overlay when the menu opens
        overlay.classList.add('active');
        navbarToggler.classList.remove('collapsed'); // Change the hamburger icon to X
    }
}

// Listen for menu close on outside click
document.querySelector('.navbar-toggler').addEventListener('click', toggleMenu);
document.getElementById('nav-overlay').addEventListener('click', toggleMenu);