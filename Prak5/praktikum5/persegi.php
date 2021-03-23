<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Persegi Panjang</title>
</head>

<body>
    <?php
        $res = "";
        
        if(isset($_POST['submit'])){
            $res = $_POST['panjang'] * $_POST['lebar'];
        }

    ?>
    <h3>Perhitungan Luas Persegi Panjang</h3>
    <form method="post">
        <input type="number" name="panjang" id="panjang" placeholder="Masukkan Panjang">
        <input type="number" name="lebar" id="lebar" placeholder="Masukkan Lebar">
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    echo "<h4> Result = $res </h4>";
    ?>
</body>

</html>