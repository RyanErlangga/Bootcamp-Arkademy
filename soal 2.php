<?php 

	// 
	//	GANTI TANGAL DISINI
	//	TANGGAL BERFORMAT DD-MM-YY
	//
	$date1 = "01-11-2019";
	$date2 = "05-11-2019";

$pecahTgl1 = explode("-", $date1);

$tgl1 = $pecahTgl1[0];
$bln1 = $pecahTgl1[1];
$thn1 = $pecahTgl1[2];

echo "<p>Generat tanggal di dalam kode:</p>";


$i = 0;


do {
   // generate tanggal berikutnya
   $tanggal = date("d-m-Y", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1));
   echo $tanggal."<br>"; 

   //stop increment
   $i++;
}
while ($tanggal != $date2);   

 ?>