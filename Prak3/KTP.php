<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <!-- Contoh Penggunaan Method GET -->
    <!-- Input akan ditampilkan pada URL alias kurang secure / aman -->
    <form action="Hasil_KTP.php" method="get">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenisKelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="22" rows="4"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>
                    <select name="statusKawin">
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="kerja"></td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>
                    <select name="wargaNegara">
                        <option value="WNI">WNI</option>
                        <option value="NO WNI">NO WNI</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Berlaku Hingga</td>
                <td><input type="radio" name="masaBerlaku" value="Seumur Hidup">Seumur Hidup</td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                    <input type="reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>