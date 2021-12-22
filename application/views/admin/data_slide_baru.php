<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Slide Client</h1>
          </div>
          <a href="<?php echo base_url('admin/data_slide_baru/tambah_slide_baru') ?>" class="btn btn-primary mb-3">Tambah Data</a>
          <?php echo $this->session->flashdata('pesan') ?>
          <table id="data-table" class="table table-striped table-hover " style="width: 100%">
          	<thead>
          		<tr>
          		<th>No</th>
          		<th>Gambar</th>
          		<th>Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php
          		$no=1;
          		foreach($slide_baru as $slb) :?>
          			<tr>
          			<td><?php echo $no++ ?></td>
          			<td>
          				<img width="80px"  src="<?php echo base_url().'assets/upload/'.$slb->gambar ?>">
          			</td>
          			
          			 <td>
          			 	
          			 	<a href="<?php echo base_url('admin/data_slide_baru/delete_slide_baru/').$slb->id_slide ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" ><i class="fas fa-trash"></i></a>
          			 	

          			 </td>
          			 </tr>

          		 <?php endforeach; ?>
          	</tbody>
          </table>
    </section>
</div> 