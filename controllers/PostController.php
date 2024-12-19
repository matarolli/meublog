<?php
require_once 'models/Post.php';

class PostController {
    private $postModel;

    public function __construct($pdo) {
        $this->postModel = new Post($pdo);
    }

    public function index() {
        $posts = $this->postModel->getAll();
        require 'views/home.php'; // Página principal
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author_name = $_POST['author_name'];
            $author_photo = '';
    
            // Upload da imagem do post
            $image = '';
            if (!empty($_FILES['image']['name'])) {
                $target = 'uploads/' . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                $image = $target;
            }
    
            // Upload da foto do autor
            if (!empty($_FILES['author_photo']['name'])) {
                $author_target = 'uploads/' . basename($_FILES['author_photo']['name']);
                move_uploaded_file($_FILES['author_photo']['tmp_name'], $author_target);
                $author_photo = $author_target;
            } else {
                $author_photo = 'uploads/default-avatar.jpg'; // Foto padrão
            }
    
            $this->postModel->create($title, $content, $image, $author_name, $author_photo);
            header('Location: index.php');
        } else {
            require 'views/create.php';
        }
    }
    
}
?>