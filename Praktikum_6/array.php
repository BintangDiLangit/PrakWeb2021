<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// $mahasiswa = array();
// $active = array("active", "inactive");
// $warna_rambut = array("hitam", "coklat");
// $jenis_rambut = array("keriting", "lurus");
// $dosen = array("Desy Intan Permatasari","Jokowi","Uzumaki Shincan");
// $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
// $alfa = 'ABCDE';
// for ($i = 1; $i <= 30; $i++) {
//     array_push($mahasiswa, array(
//         "nrp" => $i,
//         "nama" => substr(str_shuffle($permitted_chars), 0, 10),
//         "tb" => rand(140, 180) . " cm",
//         'kelas' => 'D4-'.substr(str_shuffle($alfa), 0, 1),
//         "bb" => rand(40, 100) . " kg",
//         'nilai' => substr(str_shuffle($alfa), 0, 1),
//         "ipk" => rand(30, 40) / 10,
//         "rambut" => $warna_rambut[rand(0, 1)] . " " . $jenis_rambut[rand(0, 1)],
//         "status" => $active[rand(0, 1)],
//     ));
// }

// $json_mahasiswa = json_encode($mahasiswa);
// file_put_contents('mahasiswa.json',$json_mahasiswa);
// 

$json_mahasiswa = file_get_contents("mahasiswa.json");
// Convert to array 
$mahasiswa = json_decode($json_mahasiswa, true);
// var_dump($mahasiswa); // print array

?>