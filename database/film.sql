CREATE DATABASE IF NOT EXISTS db_film
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE db_film;

CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul_film VARCHAR(150) NOT NULL,
    sutradara VARCHAR(100) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    durasi_menit INT NOT NULL,
    tahun_rilis INT NOT NULL,
    rating_imdb DECIMAL(3,1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO film (judul_film, sutradara, genre, durasi_menit, tahun_rilis, rating_imdb) VALUES
('Interstellar', 'Christopher Nolan', 'Sci-Fi', 169, 2014, 8.7),
('Spirited Away', 'Hayao Miyazaki', 'Animation', 125, 2001, 8.6),
('Pengabdi Setan', 'Joko Anwar', 'Horror', 107, 2017, 6.5),
('The Dark Knight', 'Christopher Nolan', 'Action', 152, 2008, 9.0);