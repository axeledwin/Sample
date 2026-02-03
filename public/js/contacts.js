const loginBtn = document.getElementById("login")
const footer = document.getElementById("ft")

// Check if current page is contacts
const currentPage = window.location.pathname;
const isContactsPage = currentPage.includes('contacts');

if (isContactsPage) {
    loginBtn.style.display = 'flex';
    footer.style.display = 'block';
} else {
    loginBtn.style.display = 'none';
    footer.style.display = 'none';
}

