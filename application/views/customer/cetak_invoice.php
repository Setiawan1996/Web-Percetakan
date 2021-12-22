<table style="width: 20%" >
	<h2>Invoice Pembayaran Anda</h2>
	<?php foreach($transaksi as $tr): ?>
	<tr>
		<td>Nama Customer</td>
		<td>:</td>
		<td><?php echo $tr->nama ?></td>
	</tr>
	<tr>
		<td>Merek Mobil</td>
		<td>:</td>
		<td><?php echo $tr->merk ?></td>
	</tr>
	<tr>
		<td>Plat Mobil</td>
		<td>:</td>
		<td><?php echo $tr->no_plat ?></td>
	</tr>
	<tr>
		<td>Tanggal Rental</td>
		<td>:</td>
		<td><?php echo $tr->tanggal_rental ?></td>
	</tr>
	<tr>
		<td>Jam Rental</td>
		<td>:</td>
		<td><?php echo $tr->jam_rental ?></td>
	</tr>
	<tr>
		<td>Tanggal Kembali</td>
		<td>:</td>
		<td><?php echo $tr->tanggal_kembali ?></td>
	</tr>
	<tr>
		<td>Jam Kembali</td>
		<td>:</td>
		<td><?php echo $tr->jam_kembali ?></td>
	</tr>
	<tr>
		<td>Harga Sewa/ Hari</td>
		<td>:</td>
		<td>RP.<?php echo number_format($tr->harga,0,',','.')  ?></td>
	</tr>
	<tr>
		<!-- cara membuat hitungan detik menjadi hari
		$jmlHari = abs(($x - $y)/(60*60*24)); -->
	<!-- $jmlHari = abs(($x - $y)/(60 detik * 60 menit * 24 jam)); -->
		<?php 
				$x= strtotime($tr->tanggal_kembali);
				$y= strtotime($tr->tanggal_rental);
				$jmlhari = abs(($x - $y)/(60*60*24));
		 ?>
		<td>Jumlah Hari</td>
		<td>:</td>
		<td><?php echo $jmlhari ?> Hari</td>
	</tr>

	<tr>
		<td>Status Pembayaran</td>
		<td>:</td>
		<td><?php if($tr->status_pembayaran =="0") { 
			echo "Belum Lunas";
		}else{
			echo "Lunas";
		}
		?>	
		</td>

	</tr>
	<tr style="font-weight: bold; color: red; ">
		
		<td>Jumlah Pembayaran</td>
		<td>:</td>
		<td class="btn btn-sm btn-success ">RP. <?php echo number_format($tr->harga * $jmlhari,0,',','.') ?></td>
	</tr>
	<th>__________________________</th>
	<tr>
		
	</tr>

<tr>
		<td>Rekening Pembayaran</td>
	</tr>
	<tr></tr>
	<tr>
		<td>Bank Mandiri</td>
		<td>:</td>
		<td>127728367</td>
	</tr>
	<tr>
		<td>Bank Central Asia</td>
		<td>:</td>
		<td>127938938</td>
	</tr>
	<tr>
		<td>OVO</td>
		<td>:</td>
		<td>081265150575</td>
	</tr>
	<?php endforeach; ?>

</table>

<script type="text/javascript">
		window.print();
		
	</script>
