<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
			</div>
			<div class="table-responsive">
			 <table class="table table-bordered table-striped">
			 	<tr>
			 		<th>No</th>
			 		<th>Nama Customer</th>
			 		<th>Produk</th>
			 		<th>Tanggal Rental</th>
			 		<th>Jam Rental</th>
			 		<th>Tanggal Kembali</th>
			 		<th>Bukti Pembayaran</th>
			 		<th>Action</th>
			 		<th>Batal</th>
			 	</tr>
			 	<?php $no=1;
			 		foreach($mobil as $mb) : ?>
			 			<tr>
			 				<td><?php echo $no++?></td>
			 				<td><?php echo $tr->nama ?></d>
			 				<td><?php echo $tr->merk ?></td>
			 				<td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental))  ?></td>
			 				<td><?php echo $tr->jam_rental ?></td>
			 				<td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
			 				<td><?php echo $tr->jam_kembali ?></td>
			 				<td>Rp.<?php echo number_format( $tr->harga,0,',','.') ?></td>
			 				<td>Rp.<?php echo number_format($tr->denda,0,',','.')  ?></td>
			 				<td>Rp.<?php echo $tr->total_denda ?></td>
			 				
			 				<td>	
			 					<?php 
			 					if($tr->tanggal_pengembalian =="0000-00-00"){
			 						echo "-";
			 					}else{
			 						echo date('d/m/Y',strtotime($tr->tanggal_pengembalian));
			 					}

			 					 ?>
			 				</td>
			 				<td><?php echo $tr->status_pengembalian ?></td>

			 				<td><?php echo $tr->status_rental ?></td>

			 				<td>
			 					<center>
			 						<?php  
			 						if(empty($tr->bukti_pembayaran)) { ?>
			 							<button class="bt btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
			 						<?php }else{ ?>
			 							<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_rental) ?>"><i class="fas fa-check-circle"></i></a>
			 						<?php } ?>
			 					</center>
			 				</td>
			 				<td>
			 					<?php 
			 					if($tr->status == "1"){
			 						echo "-";
			 					}else{?>
			 						<div class="row">
			 							<a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental) ?>"><i class="fas fa-check"></i></a>
			 							<a onclick="return confirm('Yakin ingin batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/batal_transaksi/'.$tr->id_rental) ?>"><i class="fas fa-times"></i></a>
			 							
			 						</div>
			 					<?php } ?>

			 					 

			 				</td>
			 				<td>	</td>
			 			</tr>
			 	<?php endforeach; ?>		
			 </table>
			 </div>
		</section>
	
</div>