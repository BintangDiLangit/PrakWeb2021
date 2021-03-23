<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Tengah Semester</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="menu">
                <ul>
                    <li><a href="#perhitungan" class="tbl-biru">Perhitungan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <h2>Ujian Tengah Semester Praktikum Pemrograman Web</h2>
                <p class="deskripsi">Nama : Bintang Miftaqul Huda</p>
                <p class="deskripsi">NIM : 19650093</p>
                <p class="deskripsi">Kelas : Praktikum Web (C)</p>
                
            </div>
            <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" width="700px" height="400px"/>
        </section>
        <section>
        <img src="images/al.png" width="500px" height="400px"/>
        
        <div class="kolom" id="perhitungan">
        <h2>Perhitungan</h2>
                <form action="aksi.php"	method="GET">
                
                <table>
                    <tr>
                        <td><p class="deskripsi">Nilai A : </p></td>
                        <td><input type="text" name="nilai_a"></td>
                    </tr>
                    <tr>
                        <td><p class="deskripsi">Nilai B : </p></td>
                        <td><input type="text" name="nilai_b"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="Submit">
                            <input type="reset" name="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </section>
</body>
</html>

