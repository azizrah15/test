<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <a href="input_data.php">Tambah Data</a>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>eMail</td>
            <td>No.Whatsapp</td>
            <td>Alamat</td>
        </tr>
        <?php
        include "koneksi.php";
        $dt = new Database();
        foreach($dt->tampilData() as $d){
        ?>
        <tr>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['email'];?></td>
            <td><?php echo $d['wa'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><a href="">EDIT</a> | <a href="">HAPUS</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>