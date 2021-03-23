<title>Date</title>
<?php
//day format
echo "Day Format <br>";
echo date("l")."<br>";
echo date("D")."<br>";
echo "<hr>";
//date format
echo "Date Format <br>";
echo date("d")."<br>";
echo date("jS")."<br>";
echo "<hr>";
//month format
echo "Month Format <br>";
echo date("m")."<br>";
echo date("M")."<br>";
echo date("F")."<br>";
echo "<hr>";
//year format
echo "Year Format <br>";
echo date("Y")."<br>";
echo "<hr>";
//full date format
echo "Full Date Format <br>";
echo date("l jS \of F Y h:i:s A e")."<br>";
echo date('m-F-Y, g:i:s a');