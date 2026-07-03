<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= e(SITE_NAME) ?> |
        <?= e(SITE_TAGLINE) ?>
    </title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>

    <?php include __DIR__ . '/includes/header.php'; ?>
    <?php include __DIR__ . '/includes/hero.php'; ?>
    <?php include __DIR__ . '/includes/projects.php'; ?>
    <?php include __DIR__ . '/includes/skills.php'; ?>
    <?php include __DIR__ . '/includes/certifications.php'; ?>
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="<?= BASE_URL ?>assets/js/script.js"></script>
</body>

</html>