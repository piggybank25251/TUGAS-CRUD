<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="shortcut icon" href="images/logowebpro.jfif" type="images/x-icon">
</head>
<body>
    <header>
        <h1>Webpro 7</h1>
        <h3>penerimaan pendaftaran siswa</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-data.php">Daftar baru</a></li>
            <li><a href="list-siswa.php">Pendaftaran</a></li>
        </ul>
    </nav>

    <h4>Formulir PPDB</h4>
    <?php
    include_once("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-pendaftaran.php" method="post">
    </div>
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" value="<?= $r['nama'] ?>" require>
        </div> 
        <div>
            <label for="">Alamat Lengkap</label>
            <textarea name="alamat" cols="30" rows="10"><?= $r['alamat'] ?></textarea>
        </div>
        <div>
            <label for="jenis_kelamin">Jenis kelamin</label>
            <label><input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin'] == 'laki-laki' ? "checked" : ''?> value="laki-laki">laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin'] == 'perempuan' ? "checked" : ''?> value="perempuan">perempuan</label>
        </div>
        <div>
            <label for="">agama</label>
            <select name="agama">
                <option value="Islam" <?= $r['agama'] == 'Islam' ? "selected" : ''?>>Islam</option>
                <option value="Kristen" <?= $r['agama'] == 'Kristen' ? "selected" : ''?>>Kristen</option>
                <option value="Katolik" <?= $r['agama'] == 'Katolik' ? "selected" : ''?>>Katolik</option>
                <option value="Hindu" <?= $r['agama'] == 'Hindu' ? "selected" : ''?>>Hindu</option>
                <option value="Buddha" <?= $r['agama'] == 'Buddha' ? "selected" : ''?>>Buddha</option>
                <option value="Konghucu" <?= $r['agama'] == 'Konghucu' ? "selected" : ''?>>Konghucu</option>
                <option value="lainnya" <?= $r['agama'] == 'lainnya' ? "selected" : ''?>>lainnya</option>
            </select>
        </div>
        <div>
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" value="<?= $r['sekolah_asal'] ?>"0>
        </div>
        <div>
            <input type="hidden" name= "id" value="<?= $r['id'] ?>">
            <input type="reset">
            <input type="submit" value="Daftar" name="daftar">
        </div>
        </form>
    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Student day Programming Web</b></i>
    </footer>
</body>
</html>
