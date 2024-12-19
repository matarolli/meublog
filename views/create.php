<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Novo Post</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>

            <label for="content">Conteúdo:</label>
            <textarea name="content" id="content" rows="5" required></textarea>

            <label for="image">Imagem do Post:</label>
            <input type="file" name="image" id="image">

            <label for="author_name">Nome do Autor:</label>
            <input type="text" name="author_name" id="author_name" required>

            <label for="author_photo">Foto do Autor:</label>
            <input type="file" name="author_photo" id="author_photo">

            <input type="submit" value="Salvar">
        </form>
        <a href="index.php" class="back-link">← Voltar</a>
    </div>

    <a href="index.php" class="back-link">← Voltar</a>
    </div>
</body>

</html>