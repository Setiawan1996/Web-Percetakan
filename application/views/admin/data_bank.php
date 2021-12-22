<div class="main-content">
	<div class="section">
		<div style="background-color: #59ab6e !important;" class="section-header">
			<h1 style="color: white;" >Data Bank</h1>
		</div>
	</div>


	<a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_bank/tambah_bank') ?>">Tambah Bank</a>
	<?php echo $this->session->flashdata('pesan') ?>
	<table class="table table-boredered table-striped table-hover">
		<thead>
			<tr>
				<th width="20px">No</th>
				<th>Nama Bank </th>
				<th>Nomor Rekening</th>
				<th>Nomor Bank 2</th>
				<th>Nomor Rekening 2</th>
				<th>Nomor Bank 3</th>
				<th>Nomor Rekening 3</th>
				<th>Nomor Bank 4</th>
				<th>Nomor Rekening 4</th>
				<th>Nama Pemilik</th>
				<th width="180px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			 <?php 
			$no = 1;
				foreach($bank as $bk):?>
					<tr>
						<td><?php echo $no ++ ?></td>
						<td><?php echo $bk->nama_bank ?></td>
						<td><?php echo $bk->nomor_rekening ?></td>
						<td><?php echo $bk->nama_bank2 ?></td>
						<td><?php echo $bk->nomor_rekening2 ?></td>
						<td><?php echo $bk->nama_bank3 ?></td>
						<td><?php echo $bk->nomor_rekening3 ?></td>
						<td><?php echo $bk->nama_bank4 ?></td>
						<td><?php echo $bk->nomor_rekening4 ?></td>
						<td><?php echo $bk->pemilik ?></td>
						<td>
						<a href="<?php echo base_url('admin/data_bank/update_bank/'.$bk->id_bank) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
						<a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" href="<?php echo base_url('admin/data_bank/delete_bank/'.$bk->id_bank) ?>"><i class="fas fa-trash"></i></a> 
          			 	
					</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>