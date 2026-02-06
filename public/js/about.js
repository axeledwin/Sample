const loginBtn = document.getElementById("login")
const footer = document.getElementById("ft")

// Check if current page is about
const currentPage = window.location.pathname;
const isAboutPage = currentPage.includes('about');

if (isAboutPage) {
    loginBtn.style.display = 'flex';
    footer.style.display = 'block';
} else {
    loginBtn.style.display = 'none';
    footer.style.display = 'none';
}
