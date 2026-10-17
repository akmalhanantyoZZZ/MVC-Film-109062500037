<?php
class Film
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, judul_film, sutradara, genre, durasi_menit, tahun_rilis, rating_imdb FROM film ORDER BY judul_film ASC'
        );
        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT id, judul_film, sutradara, genre, durasi_menit, tahun_rilis, rating_imdb FROM film WHERE id = :id'
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO film (judul_film, sutradara, genre, durasi_menit, tahun_rilis, rating_imdb) 
                VALUES (:judul_film, :sutradara, :genre, :durasi_menit, :tahun_rilis, :rating_imdb)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':judul_film'   => $data['judul_film'],
            ':sutradara'    => $data['sutradara'],
            ':genre'        => $data['genre'],
            ':durasi_menit' => $data['durasi_menit'],
            ':tahun_rilis'  => $data['tahun_rilis'],
            ':rating_imdb'  => $data['rating_imdb']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE film 
                SET judul_film = :judul_film, 
                    sutradara = :sutradara, 
                    genre = :genre, 
                    durasi_menit = :durasi_menit, 
                    tahun_rilis = :tahun_rilis, 
                    rating_imdb = :rating_imdb 
                WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id'           => $id,
            ':judul_film'   => $data['judul_film'],
            ':sutradara'    => $data['sutradara'],
            ':genre'        => $data['genre'],
            ':durasi_menit' => $data['durasi_menit'],
            ':tahun_rilis'  => $data['tahun_rilis'],
            ':rating_imdb'  => $data['rating_imdb']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare('DELETE FROM film WHERE id = :id');
        return $stmt->execute([':id' => $id]);
    }
}