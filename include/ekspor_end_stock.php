<?php
	$date = date('Y-m-d');
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data End Stock.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ekspor Data Summary</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		th{
			font-weight: bold;
		}
		h1{
			margin: 10px;
			font-weight: bold;
			text-align: center;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Data End Stock</h1>
	<!-- <h3><?php echo "Hari ".hari_ini(); echo "&nbsp; <b>"; echo date('d / M / y'); echo "</b>";?></h3> -->
	<table border="1">
		<tr>
			<!-- <th>No</th> -->
			<th>No.</th>
			<th width="40%">Key</th>
			<th width="40%">Part No</th>
			<th width="20%">Part Name</th>
			<th width="25%">Plant</th>
			<th width="20%">Sloc</th>
			<th width="20%">Periode</th>
			<th width="20%">Value</th>
			<th width="20%">Currency</th>
			<th width="20%">Stock</th>
			<th width="20%">Pcs</th>
		</tr>
		


		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM `end_stock` ");
		// $no = 1;
		while($d = mysqli_fetch_row($data)){
			$id           = $d[0];
      $key_end      = $d[1];
      $part_no     	= $d[2];
      $part_name    = $d[3];
      $plant        = $d[4];
      $sloc    			= $d[5];
      $periode    	= $d[6];
      $value    		= $d[7];
      $currency    	= $d[8];
      $stock    		= $d[9];
      $pcs    			= $d[10];
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $key_end; ?></td>
			<td><?php echo $part_no; ?></td>
			<td><?php echo $part_name; ?></td>
			<td><?php echo $plant; ?></td>
			<td><?php echo $sloc; ?></td>
			<td><?php echo $periode; ?></td>
			<td><?php echo $value; ?></td>
			<td><?php echo $currency; ?></td>
			<td><?php echo $stock; ?></td>
			<td><?php echo $pcs; ?></td>
			<!-- <td>
				<center>
        <?php 
        if ($d['agustus'] != $d['januari']) { ?>
          <p style="color: red; background-color: #FE8080;">Bukan</p>
        <?php  
        }else{ ?>
          <p style="color: green; background-color: #92FE80;">Slow Moving</p>
        <?php  } ?> 
        </center>
			</td> -->
		</tr>
		<?php 
		}
		?>
	</table>

	<!-- menampilkan data hari dan tanggal -->
	<?php 
        // function untuk menampilkan nama hari ini dalam bahasa indonesia
        function hari_ini(){
          $hari = date ("D");

          switch($hari){
            case 'Sun':
              $hari_ini = "Minggu";
            break;

            case 'Mon':     
              $hari_ini = "Senin";
            break;

            case 'Tue':
              $hari_ini = "Selasa";
            break;

            case 'Wed':
              $hari_ini = "Rabu";
            break;

            case 'Thu':
              $hari_ini = "Kamis";
            break;

            case 'Fri':
              $hari_ini = "Jumat";
            break;

            case 'Sat':
              $hari_ini = "Sabtu";
            break;
            
            default:
              $hari_ini = "Tidak di ketahui";   
            break;
          }

          return "<b>" . $hari_ini . "</b>";

        }
	?>
</body>
</html>