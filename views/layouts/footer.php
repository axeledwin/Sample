<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (!empty ($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
        <script src="<?= BASE_URL ?>/public/js/<?= $script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>