<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Film</title>
</head>
<body>
    <h2>Edit Data Film</h2>

    <form method="post" action="index.php?page=film&action=update">
        <input type="hidden" name="id" value="<?= $film['id'] ?>">

        <label>Judul Film</label><br>
        <input type="text" name="judul_film" value="<?= htmlspecialchars($film['judul_film']) ?>" required><br><br>

        <label>Sutradara</label><br>
        <input type="text" name="sutradara" value="<?= htmlspecialchars($film['sutradara']) ?>" required><br><br>

        <label>Genre</label><br>
        <input type="text" name="genre" value="<?= htmlspecialchars($film['genre']) ?>" required><br><br>

        <label>Durasi (Menit)</label><br>
        <input type="number" name="durasi_menit" value="<?= htmlspecialchars($film['durasi_menit']) ?>" required><br><br>

        <label>Tahun Rilis</label><br>
        <input type="number" name="tahun_rilis" value="<?= htmlspecialchars($film['tahun_rilis']) ?>" required><br><br>

        <label>Rating IMDb</label><br>
        <input type="number" step="0.1" name="rating_imdb" value="<?= htmlspecialchars($film['rating_imdb']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=film">Kembali</a>
    </form>
</body>
</html>