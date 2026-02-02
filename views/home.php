<?php
if (!empty($_SESSION['error'])): ?>
    <script>
        window.loginError = "<?= addslashes($_SESSION['error']); ?>";
    </script>
    <?php
    unset($_SESSION['error']); ?>
<?php endif;
?>

<div class="form-container">
    <div class="form-logo">
        <img src="https://myapps.mmacompetent.com/assets/erpnext/images/erpnext-logo.svg" alt="Frappe Logo">
        <p>Login to Frappe</p>
    </div>

    <div class="form">
        <form action="<?php echo BASE_URL; ?>/auth/authenticate" method="post">
            <div class="input-container">
                <i class="bi bi-envelope"></i>
                <input type="email" name="email" id="email" placeholder="juan@example.com" required autofocus autocomplete="email">
            </div>

            <div class="input-container">
                <i class="bi bi-lock"></i>
                <input type="password" name="password" id="password" placeholder="........." required>
                <span id="toggle">Show</span>
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