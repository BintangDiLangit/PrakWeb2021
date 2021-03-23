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
        foreach ($mhs as $m) {
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
    while ($a < count($mhs)) {
        $table_set = "<tr>"
            . "<td>" . $mhs[$a]['nrp'] . "</td>"
            . "<td>" . $mhs[$a]['nama'] . "</td>"
            . "<td>" . $mhs[$a]['tb'] . "</td>"
            . "<td>" . $mhs[$a]['bb'] . "</td>"
            . "<td>" . $mhs[$a]['ipk'] . "</td>"
            . "<td>" . $mhs[$a]['rambut'] . "</td>"
            . "<td>" . $mhs[$a]['status'] . "</td>"
            . "</tr>";
        switch (true) {
            case $mhs[$a]['ipk'] >= 3.0 && $mhs[$a]['ipk'] <= 3.25:
                echo $table_set;
                break;
            case $mhs[$a]['rambut'] == "hitam lurus":
                echo $table_set;
                break;
            case $mhs[$a]['bb'] == "50 kg" && $mhs[$a]['tb'] == "160 cm":
                echo $table_set;
                break;
            case $mhs[$a]['status'] == "active":
                echo $table_set;
                break;
        }
        $a++;
    }
    ?>
    </table>    
</center>