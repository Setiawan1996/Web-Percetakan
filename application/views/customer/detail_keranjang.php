
<div class="container-fluid mb-4">
    <div class="container">  
	<h4 class="mt-3">Keranjang Belanja</h4>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			
		</tr>
		<?php $no=1; 

				foreach ($this->cart->contents() as $items) :?>
		<tr>

				<td><?php 	echo $no++ ?></td>
				<td><?php 	echo $items['name'] ?></td>
				<td><?php 	echo $items['qty'] ?></td>
				<td align="right">Rp.<?php 	echo number_format($items['price'],0,',','.')  ?></td>
				<td align="right">Rp.<?php 	echo number_format($items['subtotal'],0,',','.') ?></td>    

		</tr>
		<?php 	endforeach ; ?>
		<tr>

			<td style="font-weight: bold" align="right" colspan="4">Total</td>
			<td align="right">Rp.<?php 	echo number_format($this->cart->total(),0,',','.') ?></td>

		</tr>
	</table>
	<div align="right">
			<a href="<?php echo base_url('customer/produk/hapus_keranjang') ?>"><button class="btn btn-sm btn-danger">Hapus</button></a>	
			
			<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pembayaran</button>
</a>
	</div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-2"></div>
        		<div class="col-md-8">
        			<div class="btn btn-sm btn-primary">
        				<?php 
        				$total_pembayaran = 0;
        				if ($keranjang = $this->cart->contents()){
        					foreach ($keranjang as $item)
        					{
        						$total_pembayaran = $total_pembayaran + $item['subtotal'];
        					}
        					echo "Total Pembayaran Anda: Rp.".number_format($total_pembayaran,0,',','.');
        				
        				 ?>
                         
        			</div><br><br>
                   
                    <div class="row">
                        <?php foreach($bank as $bk) : ?>
                        <div class="col-md-8">
                            <p style="margin-bottom: 20px">An: <b><?php echo $bk->pemilik ?></b></p>
                            <img width="50" src="<?php echo base_url() ?>/assets/ovo.jpg"> <?php echo $bk->nomor_rekening ?>
                            <p></p>


                           <!--  <img width="50" src="<?php echo base_url() ?>/assets/mandiri.jpg"> <?php echo $bk->nomor_rekening ?>
                            <p></p> -->
                            <img width="50" src="<?php echo base_url() ?>/assets/bca.jpg"> <?php echo $bk->nomor_rekening2 ?>
                            <p></p>
                        </div>
                         <?php endforeach ; ?>
                    </div>
               
                   <br>
        			<h4>Silahkan Isi Data Berikut:</h4>
        			<form method="post" action="<?php echo base_url('customer/proses_pesanan') ?>">
        					
        				<div  class="form-group">
        					<label>Nama:</label>
        					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control mb-2">
                             <sub class="text-small text-danger">* Harus diisi</sub>
                            
        				</div><br>

        				<div class="form-group">
        					<label>Alamat:</label>
        					<input type="text" name="alamat" placeholder="Alamat Lengkap"class="form-control">
                             <sub class="text-small text-danger">* Harus diisi</sub>
        				</div><br>	
        				<div class="form-group">
        					<label>No. Telepon:</label>
        					<input type="number" name="no_telepon" placeholder="No. Telepon"class="form-control">
                             <sub class="text-small text-danger">* Harus diisi</sub>
        				</div>
        				<div class="modal-footer">
	        				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
	        				<button type="submit" class="btn btn-success">Pesan</button>
	      				</div>
        			</form>
        		<?php }else{
        			echo "<h4>Keranjang Belanja Kosong</h4>";
        		} 
        		?>
        		</div>	
                	
        	</div>
        </div>
      </div>

      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-success">Pesan</button>
      </div -->
    </div>
  </div>
</div>