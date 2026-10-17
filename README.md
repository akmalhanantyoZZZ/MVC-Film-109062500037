# MVC PHP Native - Data Film

Aplikasi CRUD sederhana untuk mengelola data koleksi film menggunakan pola Model-View-Controller pada PHP Native.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP
- Git

## Instalasi
1. Clone atau salin project ke folder web server (`htdocs`).
2. Import `database/film.sql`.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka `http://localhost/MVC-Film-109062500037/public/index.php`.

## Struktur MVC
- `app/models/` : akses dan operasi data.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML.
- `config/` : konfigurasi koneksi database.
- `database/` : skema dan data awal SQL.
- `public/` : entry point aplikasi.

## Fitur
- Menampilkan data film
- Menambah data film
- Mengubah data film
- Menghapus data film

## Histori Git
Gunakan `git log --oneline --graph --decorate` untuk melihat tahapan pengembangan.