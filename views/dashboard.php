<?php if (!empty($_SESSION['success'])): ?>
    <script>
        window.loginSuccess= "<?= addslashes($_SESSION['success']); ?>";
    </script>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<div class="container">
    <h2>About This Site</h2>
    <p>
        This is a sample HTML website created to demonstrate basic structure,
        styling, and layout using only HTML and CSS.
    </p>

    <div class="card">
        <h3>Feature One</h3>
        <p>
            Clean and simple design that works on most devices.
        </p>
    </div>

    <div class="card">
        <h3>Feature Two</h3>
        <p>
            Easy to customize and extend with JavaScript or frameworks.
        </p>
    </div>

    <div class="card">
        <h3>Contact Us</h3>
        <p>
            Email: example@email.com<br />
            Phone: +1 234 567 890
        </p>
    </div>

    <a href="<?php echo BASE_URL; ?>/auth/logout" class="logout-link">Logout</a>
</div>