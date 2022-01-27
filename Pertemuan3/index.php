<!DOCTYPE html>
<html>
<head>
    <title>Daftar Guru | SMKN 4 TASIKMALAYA</title>
    <style>
        header {
            color: grey;
            font-family: verdana;
        }

        form {
            background-color: #7a7777;
            color :white;
            padding : 2rem;
            margin-left: 3rem; 
            margin-right: 40%;
        }
         body {
             background-image : url('ok.JPEG')
         }
        a {
            color: white;
            text-decoration:none;
        }
    </style>
</head>

<body>
    <header>
        <h1>Data Guru <b>SMKN 4 Tasikmalaya<b></h1>
    </header>
    <form>
    <h2>Menu</h2>
    <nav>
        <ul>
            <li><a href="form-guru.php">Tambah Data Baru</a></li>
            <li><a href="list-guru.php">Pendaftar</a></li>
        </ul>
    </nav>
    </form>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<alert>Penambahan data Berhasil dilakukan!</alert>";
            } else {
                echo "Data gagal di kirim!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>