<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Novo Post</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Novo Post</h1>
    </header>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>

            <label for="content">Conteúdo:</label>
            <textarea name="content" id="content" rows="5" required></textarea>

            <label for="image">Imagem:</label>
            <input type="file" name="image" id="image">

            <input type="submit" value="Salvar">
        </form>
        <a href="index.php" class="back-link">← Voltar</a>
    </div>
</body>

</html>