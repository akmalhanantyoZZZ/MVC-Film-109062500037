<?php
class FilmController
{
    public function __construct(private Film $model) {}

    public function index(): void
    {
        $films = $this->model->getAll();
        require __DIR__ . '/../views/film/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/film/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php?page=film');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $film = $this->model->findById($id);

        if (!$film) {
            http_response_code(404);
            exit('Data film tidak ditemukan.');
        }

        require __DIR__ . '/../views/film/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);
        header('Location: index.php?page=film');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->delete($id);
        header('Location: index.php?page=film');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'judul_film'   => trim($input['judul_film'] ?? ''),
            'sutradara'    => trim($input['sutradara'] ?? ''),
            'genre'        => trim($input['genre'] ?? ''),
            'durasi_menit' => (int) ($input['durasi_menit'] ?? 0),
            'tahun_rilis'  => (int) ($input['tahun_rilis'] ?? 0),
            'rating_imdb'  => (float) ($input['rating_imdb'] ?? 0)
        ];

        if (
            $data['judul_film'] === '' || 
            $data['sutradara'] === '' || 
            $data['genre'] === '' || 
            $data['durasi_menit'] <= 0 || 
            $data['tahun_rilis'] <= 0 || 
            $data['rating_imdb'] <= 0
        ) {
            exit('Semua data film wajib diisi dengan benar.');
        }

        return $data;
    }
}