<!DOCTYPE html>
<html>
<head>
    <title>Daftar Guru | SMKN 4 TASIKMALAYA</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan data Guru</h3>
    </header>

    <form action="proses1.php" method="POST">

        <fieldset>
        <table>
        <tr>
        <td>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </td>
        <td>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </td>
        <td>
            <label for="mata_pelajaran">Guru Mata_Pelajaran: </label>
            <input type="text" name="mata_pelajaran"  />
        </td>
        <td>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </td>
        <td>
            <input type="submit" value="Kirim" name="daftar" />
        </td>
        </tr>
        </table>
        </fieldset>

    </form>

    </body>
</html>