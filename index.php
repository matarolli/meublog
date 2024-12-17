<?php
require_once 'config.php';
require_once 'controllers/PostController.php';

$controller = new PostController($pdo);

$action = $_GET['action'] ?? 'index';

if ($action === 'create') {
    $controller->create();
} else {
    $controller->index();
}
