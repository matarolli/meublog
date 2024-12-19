<?php
require_once 'config.php';
require_once 'controllers/PostController.php';

$controller = new PostController($pdo);

$controller->create(); // Chama a página de criação de posts
