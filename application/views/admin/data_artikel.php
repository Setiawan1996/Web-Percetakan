<div class="main-content">
        <section class="section">
          <div style="background-color: #59ab6e !important; "class="section-header">
            <h1 style="color: white">Data Artikel</h1>
          </div>
          <div class="container">
          <div class="row">
          <a href="<?php echo base_url('admin/data_artikel/tambah_artikel') ?>" class="btn btn-primary mb-3">Tambah Data Artikel</a>
          <a style="margin-left: 200px" href="<?php echo base_url('admin/data_link') ?>" class="btn btn-warning mb-3"> Link Artikel</a>
     </div>
</div>
          <?php echo $this->session->flashdata('pesan') ?>
          <table id="data-table" class="table table-hover table-striped table-bordered" style="width: 100%">
          	<thead>
          		<tr>
          		<th>No</th>
          		<th>Gambar</th>
          		<th>Judul</th>
          		<th>Tanggal Update</th>
          		<th>Aksi</th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php
          		$no=1;
          		foreach($artikel as $ar) :?>
          			<tr>
          			<td><?php echo $no++ ?></td>
          			<td>
          				<img width="80px"  src="<?php echo base_url().'assets/upload/'.$ar->gambar ?>">
          			</td>
          			<td><?php echo $ar->judul_artikel ?></td>
                         <td>
                              <?php 
                                        if($ar->tanggal_update =="0000-00-00"){
                                             echo "-";
                                        }else{
                                             echo date('d/m/Y',strtotime($ar->tanggal_update));
                                        }
                         ?>

                         </td>
          			 <td>
          			 	<a href="<?php echo base_url('admin/data_artikel/detail_artikel/').$ar->id_artikel ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
          			 	<a href="<?php echo base_url('admin/data_artikel/delete_artikel/').$ar->id_artikel ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" ><i class="fas fa-trash"></i></a>
          			 	<a href="<?php echo base_url('admin/data_artikel/ambil_id_artikel/').$ar->id_artikel ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

          			 </td>
          			 </tr>

          		 <?php endforeach; ?>
          	</tbody>
          </table>
    </section>
</div> 