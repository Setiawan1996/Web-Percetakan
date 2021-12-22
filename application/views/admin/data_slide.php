<div class="main-content">
        <section class="section">
          <div style="background-color: #59ab6e !important; "class="section-header">
            <h1 style="color: white">Data Slide</h1>
          </div>
          <a href="<?php echo base_url('admin/data_slide/tambah_slide') ?>" class="btn btn-primary mb-3">Tambah Data</a>
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
          		foreach($slide as $sl) :?>
          			<tr>
          			<td><?php echo $no++ ?></td>
          			<td>
          				<img width="80px"  src="<?php echo base_url().'assets/upload/'.$sl->gambar ?>">
          			</td>
          			
          			 <td>
          			 	
          			 	<a href="<?php echo base_url('admin/data_slide/delete_slide/').$sl->id_slide ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" ><i class="fas fa-trash"></i></a>
                              <a href="<?php echo base_url('admin/data_slide/update_slide/').$sl->id_slide ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

          			 	

          			 </td>
          			 </tr>

          		 <?php endforeach; ?>
          	</tbody>
          </table>
    </section>
</div> 