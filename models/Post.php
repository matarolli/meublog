<?php
class Post {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($title, $content, $image) {
        $sql = "INSERT INTO posts (title, content, image) VALUES (:title, :content, :image)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['title' => $title, 'content' => $content, 'image' => $image]);
    }

    public function getAll() {
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>