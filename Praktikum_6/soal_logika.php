<?php
require('array.php')
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
    <h2>Condition If For Loop</h2>
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>IPK</th>
            <th>Rambut</th>
            <th>Status</th>
        </tr>
        <?php        
        foreach ($mahasiswa as $m) {
            $table_set = "<tr>"
                . "<td>" . $m['nrp'] . "</td>"
                . "<td>" . $m['nama'] . "</td>"
                . "<td>" . $m['tb'] . "</td>"
                . "<td>" . $m['bb'] . "</td>"
                . "<td>" . $m['ipk'] . "</td>"
                . "<td>" . $m['rambut'] . "</td>"
                . "<td>" . $m['status'] . "</td>"
                . "</tr>";
            if ($m['ipk'] >= 3.0 && $m['ipk'] <= 3.25) {
                echo $table_set;
            } else if ($m['rambut'] == "hitam lurus") {
                echo $table_set;
            } else if ($m['bb'] == "50 kg" && $m['tb'] == "160 cm") {
                echo $table_set;
            } else if ($m['status'] == "active") {
                echo $table_set;
            }
        }
        $a = 0;
        ?>
    </table>
    <table>
        <h2>Condition Switch While Loop</h2>
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>IPK</th>
            <th>Rambut</th>
            <th>Status</th>
        </tr>
        <?php
    while ($a < count($mahasiswa)) {
        $table_set = "<tr>"
            . "<td>" . $mahasiswa[$a]['nrp'] . "</td>"
            . "<td>" . $mahasiswa[$a]['nama'] . "</td>"
            . "<td>" . $mahasiswa[$a]['tb'] . "</td>"
            . "<td>" . $mahasiswa[$a]['bb'] . "</td>"
            . "<td>" . $mahasiswa[$a]['ipk'] . "</td>"
            . "<td>" . $mahasiswa[$a]['rambut'] . "</td>"
            . "<td>" . $mahasiswa[$a]['status'] . "</td>"
            . "</tr>";
        switch ($mahasiswa) {
            case $m['ipk'] >= 3.0 && $m['ipk'] <= 3.25:
                echo $table_set;
                break;
            case $m['rambut'] == "hitam lurus":
                echo $table_set;
                break;
            case $m['bb'] == "50 kg" && $m['tb'] == "160 cm":
                echo $table_set;
                break;
            case $m['status'] == "active":
                echo $table_set;
                break;

            default:
                echo $table_set;
                break;
        }
        $a++;
    }
    ?>
    </table>    
</center>