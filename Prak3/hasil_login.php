<?php
$a=$_POST['username'];
$b=$_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
</head>
<body>
    <table border="1">
        <tr>
            <thead>
                <th>Username</th>
                <th>Password</th>
            </thead>
        </tr>
        <tr>
            <tbody>
                <th><?php echo $a; ?></th>
                <th><?php echo $b; ?></th>
            </tbody>
        </tr>
    </table>
</body>
</html>

