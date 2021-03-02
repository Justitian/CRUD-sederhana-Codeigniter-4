<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
</head>

<body>
    <h2>Form Tambah Mahasiswa</h2>
    <p>
        <button type="button" onclick="window.location='../mahasiswa/index'">Kembali</button>
    </p>
    <p>
        <?= form_open('mahasiswa/simpandata') ?>
    <table>
        <tr>
            <td>NPM</td>
            <td>
                <input type="text" name='Npm' size="50">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name='Password' size="50">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name='Nama' size="50">
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <input type="text" name='Jurusan' size="50">
            </td>
        </tr>
        <tr>
            <td>IPK</td>
            <td>
                <input type="text" name='Ipk' size="50">
            </td>
        </tr>
    </table>
    <button type="submit" value="Simpan Data">Simpan Data</button>
    <?= form_close();  ?>
    </p>
</body>

</html>