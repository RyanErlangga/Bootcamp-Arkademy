<?php 
	function hitung($kata)
	{
		$voc = str_split($kata);
		$hidup = ['a','i','u','e','o'];

		$found = array_intersect($hidup, $voc);
		$count = array_count_values($voc);

		$result = [];

		foreach ($found as $item) {
			$result[$item] = $count[$item];
		}

		return $result;
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Menghitung huruf hidup</title>
 </head>
 <body>
 	<form method="post" action="<?php $PHP_SELF ?>">
 			<p>
 			Masukan Kata: <br>
 			<input type="text" name="kata" placeholder="<?php echo $_POST['kata'] ?>">
 			</p>
 			<p>
 				<button type="submit">Submit</button>
 			</p>
 	</form>

 	<?php if ($_POST && isset($_POST['kata'])): ?>
    <hr>
    <table>
      <?php foreach (hitung($_POST['kata']) as $huruf => $jumlah): ?>
      	<tr>
      		<td><?php echo $huruf ?></td>
          	<td><?php echo $jumlah ?></td>
      	</tr>
      <?php endforeach ?>
      </table>
  <?php endif ?>
 </body>
 </html>