<?php
require('array.php');

$nama = array_column($mhs, 'nama');
array_multisort($nama, SORT_ASC, $mhs);

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
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>IPK</th>
            <th>Rambut</th>
            <th>Status</th>
        </tr>
        <?php
        echo "<h2>Nama Ascending</h2>";
        foreach ($mhs as $m) {
            echo '<tr>';
            echo '<td>' . $m['nrp'] . '</td>';
            echo '<td>' . $m['nama'] . '</td>';
            echo '<td>' . $m['tb'] . '</td>';
            echo '<td>' . $m['bb'] . '</td>';
            echo '<td>' . $m['ipk'] . '</td>';
            echo '<td>' . $m['rambut'] . '</td>';
            echo '<td>' . $m['status'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <?php
    $nrp = array_column($mhs, 'nrp');
    array_multisort($nrp, SORT_DESC, $mhs);
    ?>
    <table>
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
        echo "<h2>NRP Descending</h2>";
        foreach ($mhs as $m) {
            echo '<tr>';
            echo '<td>' . $m['nrp'] . '</td>';
            echo '<td>' . $m['nama'] . '</td>';
            echo '<td>' . $m['tb'] . '</td>';
            echo '<td>' . $m['bb'] . '</td>';
            echo '<td>' . $m['ipk'] . '</td>';
            echo '<td>' . $m['rambut'] . '</td>';
            echo '<td>' . $m['status'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</center>