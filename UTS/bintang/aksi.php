<?php 
$nilaiutama = $_GET['nilai_a'];
$nilaibagi = $_GET['nilai_b'];
$hasil = $nilaiutama / $nilaibagi;
$sisa = $nilaiutama % $nilaibagi;

if ($hasil === 0) {
	header('location: aksi.php');
}else if ($sisa === 1){
	
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
</head>
<body>
	<a href="index.php">Input Angka Lain</a>
	<table border="1">
		<tr>
			<thead>
				<th>Nilai 1 </th>
				<th>Nilai 2 </th>
				<th>Hasil </th>
				<th>Sisa </th>
			</thead>
		</tr>
		<tr>
			<tbody>
                <th><?php echo $nilaiutama; ?></th>
                <th><?php echo $nilaibagi; ?></th>
                <th><?php echo $hasil; ?></th>
				<th><?php echo $sisa; ?></th>
            </tbody>
		</tr>
	</table>
</body>
</html>