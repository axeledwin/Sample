<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav>
        <img src="https://myapps.mmacompetent.com/files/logo2.png" alt="MMA Logo">
        <h2>MMA Competent Manpower & General Services</h2>

        <div class="links">
            <a href="contact.html" class="nav">Contact</a>
            <a href="about.html" class="nav">About Us</a>
            <a href="jobs.html" class="nav">Jobs</a>
        </div>
    </nav>

    <div class="form-container">
        <div class="form-logo">
            <img src="https://myapps.mmacompetent.com/assets/erpnext/images/erpnext-logo.svg" alt="Frappe Logo">
            <p>Login to Frappe</p>
        </div>

        <div class="form">
            <form action="/register.php" method="post">
                <div class="input-container">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="juan@example.com" required>
                </div>

                <div class="input-container">
                    <i class="bi bi-lock"></i>
                    <input type="password" name="password" id="password" placeholder="........." required>
                    <span id="show">Show</span>
                    <span id="hide">Hide</span>
                </div>

                <div class="login">
                    <div class="forgot-pass">
                        <a href="#" id="forgot" class="forgot">Forgot password?</a>
                    </div>
                    <button>Login</button>
                </div>

            </form>
        </div>

    </div>

</body>

</html>