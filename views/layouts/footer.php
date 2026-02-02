<?php if (!empty ($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
        <script src="<?= BASE_URL ?>/public/js/<?= $script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>