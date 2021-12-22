<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Form Update Kontak</h1>
		</div>
	</div>
	<form method="POST" action="<?php echo base_url('admin/data_kontak/update_kontak_aksi') ?>">
		<div class="form-group">
			<label>Nomor Telepon</label>
			<input type="number" name="no_telepon" class="form-control">
			<?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Nomor Whatsapp</label>
			<input type="number" name="no_whatsapp" class="form-control">
			<?php echo form_error('no_whatsapp','<div class="text-small text-danger">','</div>') ?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
			<?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>

	</form>
</div>