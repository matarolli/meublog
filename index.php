<?php
require_once 'config.php';
require_once 'controllers/PostController.php';

$controller = new PostController($pdo);

$controller->index(); // Exibe os posts
?>