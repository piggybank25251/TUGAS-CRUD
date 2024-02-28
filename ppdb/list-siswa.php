<?php include_once("config.php"); ?>

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
    
    <table border="1">
    <thead>
        <tr bgcolor="blue">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no=1;
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td align='center'>".$no."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['asal_sekolah']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."' onclick='return confirm(\"Anda yakin ingin menghapus data ini?\")'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    
    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Student day Programming Web</b></i>
    </footer>
</body>
</html>
