-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS blog;

USE blog;

-- Criação da tabela posts
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID único para o post
    title VARCHAR(255) NOT NULL,       -- Título do post
    content TEXT NOT NULL,             -- Conteúdo do post
    image VARCHAR(255),                -- Caminho da imagem do post
    author_name VARCHAR(255) DEFAULT 'Autor Desconhecido', -- Nome do autor
    author_photo VARCHAR(255) DEFAULT 'uploads/default-avatar.jpg', -- Foto do autor
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do post
);
