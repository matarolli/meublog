<?php
class Post
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM posts WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($title, $content, $image, $author_name, $author_photo)
    {
        $sql = "INSERT INTO posts (title, content, image, author_name, author_photo) 
                VALUES (:title, :content, :image, :author_name, :author_photo)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'title' => $title,
            'content' => $content,
            'image' => $image,
            'author_name' => $author_name,
            'author_photo' => $author_photo
        ]);
    }


    public function getAll()
    {
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
