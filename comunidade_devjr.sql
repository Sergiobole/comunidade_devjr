-- Banco de dados para o projeto Comunidade DevJr
-- Blog para publicação de projetos, focado em PHP e CRUD básico

CREATE DATABASE IF NOT EXISTS comunidade_devjr;
USE comunidade_devjr;

-- Tabela de usuários
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de categorias para projetos
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT
);

-- Tabela de posts/projetos
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    user_id INT,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- Tabela de comentários (opcional, para interação)
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT,
    user_id INT,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Inserir dados de exemplo
INSERT INTO users (username, email, password) VALUES
('admin', 'admin@comunidadedevjr.com', 'hashed_password_here'),
('user1', 'user1@example.com', 'hashed_password_here');

INSERT INTO categories (name, description) VALUES
('PHP', 'Projetos desenvolvidos em PHP'),
('Python', 'Projetos em Python, incluindo bots e análise de dados'),
('Unity', 'Games e apps em Unity'),
('Web', 'Projetos web diversos');

INSERT INTO posts (title, content, user_id, category_id) VALUES
('Meu Primeiro Projeto em PHP', 'Este é um exemplo de post sobre um projeto simples em PHP.', 1, 1),
('Bot para Discord', 'Desenvolvendo um bot básico para Discord usando Python.', 2, 2);