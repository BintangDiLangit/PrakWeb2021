<?php
require('array.php');
?>
<style>
    table,
    th,
    td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<center>
    <table>
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Nilai Matkul Konsep Pemrogaman</th>
            <th>Dosen Wali</th>
            <th>IPK</th>
            <th>Kelas</th>
            <th>Status</th>
        </tr>
        <?php showMahasiswa() ?>
        
    </table>
    <?php cekMahasiswa('1') ?>
</center>
<?php

function showMahasiswa()
{
    global $mhs;
    foreach ($mhs as $key => $m) {
        if (
                (
                    ($m['kelas'] == 'D4-A' or $m['kelas'] == 'D4-B')
                    or 
                    ($m['dosen'] == 'Desy Intan Permatasari' or $m['nilai'] == 'A')
                ) and $m['status'] == 'active'
           
        ) {
            echo '<tr>';
            echo '<td>' . $m['nrp'] . '</td>' .
                '<td>' . $m['nama'] . '</td>' .
                '<td style="text-align:center;">' . $m['nilai'] . '</td>' .
                '<td>' . $m['dosen'] . '</td>' .
                '<td>' . $m['ipk'] . '</td>' .
                '<td>' . $m['kelas'] . '</td>' .
                '<td>' . $m['status'] . '</td>';
            echo '</tr>';
        }
    }
}
function cekMahasiswa($nrp)
{
    global $mhs;
    $key = array_search($nrp, array_column($mhs, 'nrp'));
    $m = $mhs[$key];
    // echo $m['nama'] . " Adalah Mahasiswa yang tergabung di kelas " . $m['kelas'] . " yang aktif di HIMIT";
   
    if ($m['status'] == "active") {
        echo $m['nama'] . " Adalah Mahasiswa yang tergabung di kelas " . $m['kelas'] . " yang aktif di HIMIT";
    } else {
        echo $m['nama'] . " Adalah Mahasiswa yang tergabung di kelas " . $m['kelas'] . " tapi tidak aktif di HIMIT"; 
    }
    return $m['nama'];
}