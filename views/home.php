<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <div class="content">
            <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2><?= htmlspecialchars($post['title']); ?></h2>
                <p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
                <?php if ($post['image']): ?>
                <img src="<?= $post['image']; ?>" alt="Imagem do post">
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php include 'views/sidebar.php'; ?>
    </div>

</body>

</html>