<div class="main-content">
	<div class="section">
		<div style="background-color: #59ab6e !important; "class="section-header">
			<h1 style="color: white">Data Type</h1>
		</div>
	</div>


	<a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_type/tambah_type') ?>">Tambah Type</a>
	<?php echo $this->session->flashdata('pesan') ?>
	<table class="table table-boredered table-striped table-hover">
		<thead>
			<tr>
				<th width="20px">No</th>
				<th>Kode Type</th>
				<th>Nama Type</th>
				<th width="180px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
				foreach($type as $tp):?>
					<tr>
						<td><?php echo $no ++ ?></td>
						<td><?php echo $tp->kode_type ?></td>
						<td><?php echo $tp->nama_type ?></td>
						<td>
						<a href="<?php echo base_url('admin/data_type/update_type/'.$tp->id_type) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
						<a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" href="<?php echo base_url('admin/data_type/delete_type/'.$tp->id_type) ?>"><i class="fas fa-trash"></i></a> 
          			 	
					</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>