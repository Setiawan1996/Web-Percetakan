<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header alert alert-success">
					Invoice Pembayaran Anda
				</div>
				<div class="card-body">
					<table class="table">
						<?php foreach($transaksi as $tr): ?>
						<tr>
							<th>Merek Mobil</th>
							<td>:</td>
							<td><?php echo $tr->merk ?></td>
						</tr>
						<tr>
							<th>Plat Mobil</th>
							<td>:</td>
							<td><?php echo $tr->no_plat ?></td>
						</tr>
						<tr>
							<th>Tanggal Rental</th>
							<td>:</td>
							<td><?php echo $tr->tanggal_rental ?></td>
						</tr>
						<tr>
							<th>Jam Rental</th>
							<td>:</td>
							<td><?php echo $tr->jam_rental ?></td>
						</tr>
						<tr>
							<th>Tanggal Kembali</th>
							<td>:</td>
							<td><?php echo $tr->tanggal_kembali ?></td>
						</tr>
						<tr>
							<th>Jam Kembali</th>
							<td>:</td>
							<td><?php echo $tr->jam_kembali ?></td>
						</tr>
						<tr>
							<th>Harga Sewa/ Hari</th>
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
							<th>Jumlah Hari</th>
							<td>:</td>
							<td><?php echo $jmlhari ?> Hari</td>
						</tr>
						<tr class="text-success">
							
							<th>Jumlah Pembayaran</th>
							<td>:</td>
							<td><button class="btn btn-sm btn-success ">RP.<?php echo number_format($tr->harga * $jmlhari,0,',','.') ?></button></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><a style="background-color: grey " href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
						</tr>


					<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div style="background-color: #87CEFA" class="card-header alert alert-primary">
					Informasi Pembayaran
				</div>
				<div class="card-body">
					<p style="padding: 7px" class="text-success">Silahkan melakukan pembayaran melalui rekening dibawah ini:</p>
				</div>
				<div class="card-body">
					<table class="table">
						<tr>
							<th><img style="width: 60px; margin-top: -15px" src="<?php echo base_url() ?>/assets/bca.png"></th>
							<td>:</td>
							<td>8205295620</td>
						</tr>
						<tr>
							<th><img style="width: 60px; margin-top: -15px" src="<?php echo base_url() ?>/assets/mandiri.png"></th>
							<td>:</td>
							<td>127938938</td>
						</tr>
						<tr>
							<th><img style="width: 60px; margin-top: -15px" src="<?php echo base_url() ?>/assets/ovo.png"></th>
							<td>:</td>
							<td>081265150575</td>
						</tr>
					</table>

					<?php 
				if(empty($tr->bukti_pembayaran)) { ?>
					<button style="width: 100%" type="button" class="btn btn-sm3 btn-danger mb-3" data-toggle="modal" data-target="#exampleModal">
					  Upload Bukti Pembayaran
					</button>
				<?php }elseif($tr->status_pembayaran == '0'){ ?>
					<button style="width: 100%" class="btn btn-sm3 btn-warning mb-3"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi Pembayaran</button>
				<?php }elseif($tr->status_pembayaran =='1'){ ?>
					<button style="width: 100%" class="btn btn-sm3 btn-success mb3"><i class="fa fa-check"></i> Pembayaran Selesai</button>
				<?php } ?>
				</button>
				</div>
			
			</div>
		</div>				
	</div>
</div>


<!-- Upload bukti pembayaran -->
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
        	<label>Upload Bukti Pembayaran</label>
        	<input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
        	<input type="file" name="bukti_pembayaran" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
       
        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>