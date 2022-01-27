<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Guru | SMKN 4 TASIKMALAYA
    </title>
</head>

<body>
    <header>
        <h3>Guru yang sudah Terdaftar</h3>
    </header>

    <nav>
        <a href="form-guru.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Mata Pelajaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM guru";
        $query = mysqli_query($db, $sql);
        
        while($guru = mysqli_fetch_array($query)){
            echo "<tr>";

           
            echo "<td>".$guru['nama']."</td>";
            echo "<td>".$guru['alamat']."</td>";
            echo "<td>".$guru['jenis_kelamin']."</td>";
            echo "<td>".$guru['mata_pelajaran']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$guru['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$guru['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>