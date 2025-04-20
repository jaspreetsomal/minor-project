//slide background image
const images = ['home.png', 'bg.png', 'place.png','cafee.png'];
let currentImageIndex = 0;
const heroSection = document.querySelector('.hero');
function updateBackground()
 {
    heroSection.style.backgroundImage = `url(${images[currentImageIndex]})`;
}
document.getElementById('prev').addEventListener('click', () => {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateBackground();
});
document.getElementById('next').addEventListener('click', () => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateBackground();
});
// Initialize the background image
updateBackground();


/* toggle menu */
document.getElementById('hamburger').addEventListener('click', function () {
    const navLinks = document.getElementById('nav-links');
    if (navLinks.style.display === 'flex') {
        navLinks.style.display = 'none';
    } else {
        navLinks.style.display = 'flex';
    }
});

 /*menu card*/
    function showMenu(category) {
        const selectedMenu = document.getElementById(category);
        if (selectedMenu.style.display === 'grid') {
            selectedMenu.style.display = 'none'; // Hide items if already visible
        } else {
            selectedMenu.style.display = 'grid'; // Show items
        }
    }
 
  // Form Submission (Optional: Can integrate with a backend)
     document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from refreshing
        alert("Thank you! Your message has been sent.");
        document.getElementById('contactForm').reset(); // Reset form fields
    });


 