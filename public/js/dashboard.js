document.addEventListener('DOMContentLoaded', function () {
    if (window.loginSuccess) {
        Swal.fire({
            title: "Login Successful",
            text: window.loginSuccess,
            icon: "success",
            showClass: {
                popup: 'animate__animated animate__jello'
            }
        });
    }
}); 