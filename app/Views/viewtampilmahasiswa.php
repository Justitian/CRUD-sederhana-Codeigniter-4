<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <p>
        <button type="button" onclick="window.location='../mahasiswa/formtambah'">
            Tambah Data
        </button>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>IPK</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 0;
            foreach ($tampildata as $row) :
                $nomor++;
            ?>
                <tr>
                    <th><?php echo $nomor ?></th>
                    <td><?php echo $row->npm ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->jurusan ?></td>
                    <td><?php echo $row->ipk ?></td>
                    <td>
                    <button type="button" onclick="hapus('<?php echo $row->npm ?>')">
                    Hapus
                    </button>

                    <button type="button" onclick="edit('<?php echo $row->npm ?>')">
                    Edit
                    </button>
                    </td>

                </tr>

            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <script>
        function hapus(npm){
            pesan= confirm('Yakin hapus data mahasiswa?');
            if(pesan){
                window.location.href = ("<?= site_url('mahasiswa/hapus/')?>") + npm;
            }else return false;
        }
    </script>
    <script>
        function edit(npm){
            pesan= confirm('Yakin hapus data mahasiswa?');
            if(pesan){
                window.location.href = ("<?= site_url('mahasiswa/edit/')?>") + npm;
            }else return false;
        }
    </script>
</body>

</html>