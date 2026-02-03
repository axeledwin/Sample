const password = document.getElementById("password")

const toggle = document.getElementById("toggle")

toggle.addEventListener("click", () => {
    if (password.type === "password") {
        password.type = "text";
        toggle.textContent = "Hide";
    }
    else {
        password.type = "password";
        toggle.textContent = "Show";
    }
})

document.addEventListener('DOMContentLoaded', function () {
    if (window.loginError) {
        Swal.fire({
            title: "Login Failed",
            text: window.loginError,
            icon: "error",
            showClass: {
                popup: 'animate__animated animate__headShake'
            }
        });
    }
});
