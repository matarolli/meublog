<?php
require_once 'config.php';
require_once 'models/Post.php';

$postModel = new Post($pdo);

// Carregar o post único
$id = $_GET['id'] ?? null;
if ($id) {
    $post = $postModel->getById($id);
}

if (!$post) {
    die('Post não encontrado.');
}

// Carregar todos os posts para a sidebar
$posts = $postModel->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($post['title']); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <div class="content">
            <div class="post-single">
                <h1><?= htmlspecialchars($post['title']); ?></h1>
                <img src="<?= $post['image']; ?>" alt="Imagem do post">
                <p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
            </div>
        </div>
        <?php include 'views/sidebar.php'; ?>
    </div>
</body>

</html>