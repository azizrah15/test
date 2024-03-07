<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <form action="aksi_input.php" method="post">
        <table border="1">
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>eMail:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>No Whatsapp:</td>
                <td><input type="text" name="wa"></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan data"></td>
            </tr>
        </table>
    </form>
</body>
</html>