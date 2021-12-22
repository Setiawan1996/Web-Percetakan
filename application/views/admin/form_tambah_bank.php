<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Form Tambah Bank</h1>
		</div>
	</div>
	<form method="POST" action="<?php echo base_url('admin/data_bank/tambah_bank_aksi') ?>">
		<div class="form-group">
			<label>Nama Bank</label>
			<input type="text" name="nama_bank" class="form-control">
			<?php echo form_error('nama_bank','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nomor Rekening</label>
			<input type="text" name="nomor_rekening" class="form-control">
			<?php echo form_error('nomor_rekening','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Bank 2</label>
			<input type="text" name="nama_bank2" class="form-control">
			<?php echo form_error('nama_bank2','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nomor Rekening 2</label>
			<input type="text" name="nomor_rekening2" class="form-control">
			<?php echo form_error('nomor_rekening2','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Bank 3</label>
			<input type="text" name="nama_bank3" class="form-control">
			<?php echo form_error('nama_bank3','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nomor Rekening 3</label>
			<input type="text" name="nomor_rekening3" class="form-control">
			<?php echo form_error('nomor_rekening3','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Bank 4</label>
			<input type="text" name="nama_bank4" class="form-control">
			<?php echo form_error('nama_bank4','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nomor Rekening 4</label>
			<input type="text" name="nomor_rekening4" class="form-control">
			<?php echo form_error('nomor_rekening4','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nama Pemilik</label>
			<input  type="text" name="pemilik" class="form-control">
			<?php echo form_error('pemilik','<div class="text-small text-danger">','</div>') ?>
		</div>
		
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>

	</form>
</div>