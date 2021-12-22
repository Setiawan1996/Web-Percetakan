<div class="main-content">
        <section class="section">
          <div style="background-color: #59ab6e !important;" class="section-header">
            <h1 style="color: white">Data Produk</h1>
          </div>
          <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>
          <?php echo $this->session->flashdata('pesan') ?>
          <table id="data-table" class="table table-hover table-striped table-bordered" style="width: 100%">
          	<thead>
          		<tr>
          		<th>No</th>
          		<th>Gambar</th>
          		<th>Kategori</th>
          		<th>Produk</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                   
          		<th>Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php
          		$no=1;
          		foreach($mobil as $mb) :?>
          			<tr>
          			<td><?php echo $no++ ?></td>
          			<td>
          				<img width="80px"  src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>">
          			</td>
          			<td><?php echo $mb->kode_type ?></td>
          			<td><?php echo $mb->produk ?></td>
                         <td><?php echo $mb->satuan ?></td>
                        
                         <td>Rp.<?php echo number_format($mb->harga,0,',','.') ?></td>
          			 <td>
          			 	<a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
          			 	<a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" ><i class="fas fa-trash"></i></a>
          			 	<a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

          			 </td>
          			 </tr>

          		 <?php endforeach; ?>
          	</tbody>
          </table>
    </section>
</div> 