<div class="sidebar">
    <div class="author-info">
        <img src="<?= $posts[0]['author_photo'] ?? 'uploads/default-avatar.jpg'; ?>" alt="Foto do Autor"
            class="author-photo">
        <h3><?= htmlspecialchars($posts[0]['author_name'] ?? 'Autor Desconhecido'); ?></h3>
    </div>
    <hr>
    <ul class="post-links">
        <?php foreach ($posts as $post): ?>
        <li><a href="post.php?id=<?= $post['id']; ?>"><?= htmlspecialchars($post['title']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>