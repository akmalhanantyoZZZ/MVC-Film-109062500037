<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Data Koleksi Film</h2>
    <p><a href="index.php?page=film&action=create">+ Tambah Film Baru</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Judul Film</th>
            <th>Sutradara</th>
            <th>Genre</th>
            <th>Durasi (Menit)</th>
            <th>Tahun Rilis</th>
            <th>Rating IMDb</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($films as $f): ?>
        <tr>
            <td><?= htmlspecialchars($f['judul_film']) ?></td>
            <td><?= htmlspecialchars($f['sutradara']) ?></td>
            <td><?= htmlspecialchars($f['genre']) ?></td>
            <td><?= htmlspecialchars($f['durasi_menit']) ?> min</td>
            <td><?= htmlspecialchars($f['tahun_rilis']) ?></td>
            <td><?= htmlspecialchars($f['rating_imdb']) ?></td>
            <td>
                <a href="index.php?page=film&action=edit&id=<?= $f['id'] ?>">Edit</a>

                <form method="post" 
                      action="index.php?page=film&action=delete" 
                      style="display:inline" 
                      onsubmit="return confirm('Apakah yakin ingin menghapus film ini?')">
                    <input type="hidden" name="id" value="<?= $f['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>