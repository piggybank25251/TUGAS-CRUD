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
    <div>
        <form action="proses-pendaftaran.php" method="post">
    </div>
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" require>
        </div> 
        <div>
            <label for="">Alamat Lengkap</label>
            <textarea name="alamat" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="jenis_kelamin">Jenis kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki</label>
            <label><input type="radio" name="jenis_kelamin"  value="perempuan">perempuan</label>
        </div>
        <div>
            <label for="">agama</label>
            <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="lainnya">lainnya</option>
            </select>
        </div>
        <div>
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah">
        </div>
        <div>
            <input type="submit" value="Daftar" name="daftar">
        </div>
        </form>
    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Student day Programming Web</b></i>
    </footer>
</body>
</html>
