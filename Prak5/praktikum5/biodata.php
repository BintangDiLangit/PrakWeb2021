<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <?php    
        $biodata = array(
            'Nama'          => 'Bintang Miftaqul Huda',
            'Alamat'        => 'Jl. Gatot Koco No.68 Pare, Kediri',
            'Tgl Lahir'     => '28 Maret 2002',
            'Tempat Lahir'  => 'Kadiri',
            'Email'         => 'bintangmfhd@gmail.com',
            'No Telp'       => '087881377842',
            'Hobi'          => 'Coding',
            'Cita-cita'     => 'Cyber Security Professional',
        );
        echo '<center>';
        echo '<h2>Biodata</h2>';
        echo "<b>Nama \t\t :</b> ".$biodata['Nama']."<br>";
        echo "<b>Alamat \t\t :</b> ".$biodata['Alamat']."<br>";
        echo "<b>Tgl Lahir \t\t :</b> ".$biodata['Tgl Lahir']."<br>";
        echo "<b>Tempat Lahir \t\t :</b> ".$biodata['Tempat Lahir']."<br>";
        echo "<b>Email \t\t :</b> ".$biodata['Email']."<br>";
        echo "<b>No Telp \t\t :</b> ".$biodata['No Telp']."<br>";
        echo "<b>Hobi \t\t :</b> ".$biodata['Hobi']."<br>";
        echo "<b>Cita-cita \t\t :</b> ".$biodata['Cita-cita']."<br>";
        echo '</center>';
    ?>    
</body>
</html>