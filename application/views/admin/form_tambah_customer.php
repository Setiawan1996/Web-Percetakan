<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Data Customer</h1>
           </div>
        <div class="card">
        	<div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_customer/update_customer_aksi')?>" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-md-6">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
				<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
			</div> 
			<div class="form-group">
				<label>Foto KTP</label>
				<input type="file" name="gambar" class="form-control">
				<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
			</div> 
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				<?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
			</div> 
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control">
				<?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
			</div> 

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select class="form-control" name="jenis_kelamin">
					<option value="">-- Pilih --</option>
					<option value="laki-laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
				<?php echo form_error('jenis_kelamin','<span class="text-small text-danger">','</span>') ?>
			</div> 
		</div>
        <div class="col-md-6">
			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="no_telepon" class="form-control">
				<?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
			</div>
			<div class="form-group">
				<label>No KTP</label>
				<input type="text" name="no_ktp" class="form-control">
				<?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				<?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
			</div>
			<button type="submit" class="btn btn-sm btn-primary">Submit</button>
			<button type="reset" class="btn btn-sm btn-danger">Reset</button>
		</div>
	</div>
        </form>
    </div>
</div>
  </section>
</div>