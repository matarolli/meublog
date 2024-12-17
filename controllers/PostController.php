<?php
require_once 'models/Post.php';

class PostController
{
    private $postModel;

    public function __construct($pdo)
    {
        $this->postModel = new Post($pdo);
    }

    public function index()
    {
        $posts = $this->postModel->getAll();
        require 'views/home.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];

            // Upload de imagem
            $image = '';
            if (!empty($_FILES['image']['name'])) {
                $target = 'uploads/' . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                $image = $target;
            }

            $this->postModel->create($title, $content, $image);
            header('Location: index.php');
        } else {
            require 'views/create.php';
        }
    }
}
