<div class="container">
	<div class="card mx-auto">
		<div class="card-header">
			Data Transaksi
		</div>
		 <span><?php echo $this->session->flashdata('pesan') ?></span>
		<div class="card-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th>No</th>
					<th>Nama Customer</th>
					<th>Merk Mobil</th>
					<th>Plat Mobil</th>
					<th>harga Sewa</th>
					<th>Status</th>
					<th>Batal</th>
				</tr>
				<?php $no=1; foreach($transaksi as $tr): ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $tr->nama ?></td>
						<td><?php echo $tr->merk ?></td>
						<td><?php echo $tr->no_plat ?></td>
						<td>Rp.<?php echo number_format($tr->harga,0,',','.')  ?></td>	
						<td>
							<?php if($tr->status_rental == "Selesai"){ ?>
							<button class="btn btn-sm btn-success">Rental Selesai</button>
							<?php }else{ ?>
								<a style="background-color: #1E90FF; color: white" href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm ">Cek Pembayaran</a>
							<?php } ?>

						</td>
						<td>
							<?php 
							if($tr->status_rental == 'Selesai') { ?>
								<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Batal</button>
							<?php }elseif($tr->status_rental == 'Belum Selesai') {?>
								<a onclick="return confirm('Yakin ingin batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
								
								<?php }  ?>
						</td>						
					</tr>
				<?php endforeach ; ?>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header mt-2">
        <h5 class="modal-title mt-5" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf, transaksi sudah selesai dan tidak bisa dibatalkan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Oke</button>
        
      </div>
    </div>
  </div>
</div>
