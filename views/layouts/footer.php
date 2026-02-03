<footer id="ft">
    <div id="footer-top">
        <div class="footer-logo">
            <img src="https://myapps.mmacompetent.com/files/MMA%20LOGO.png" alt="MMA LOGO" class="ft-logo">
        </div>
        <div class="footer-email">
            <input type="email" name="ft-email" id="ft-email" placeholder="Your email address...">
            <button id="update-btn">Get Updates</button>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright">
            <p>&copy; MMA Competent Manpower and General Services Inc.</p>
        </div>
        <div class="powered">
            <p>Powered by ERPNext</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (!empty ($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
        <script src="<?= BASE_URL ?>/public/js/<?= $script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>