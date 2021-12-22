<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Update Data Mobil</h1>
        </div>
        <div class="card">
        	<div class="card-body">
                <?php foreach ($mobil as $mb) : ?>
        		<form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>"enctype="multipart/form-data">
        		<div class="row">
        			  <div class="col-md-12">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
                            <select  name="kode_type" class="form-control">
                            <option value="<?php echo $mb->nama_type ?>"><?php echo $mb->nama_type ?></option>
                            <?php foreach($type as $tp) : ?>
                                <option value="<?php echo $tp->kode_type ?>">
                                     <?php echo $tp->nama_type ?></option>
                            <?php endforeach; ?>
                            </select> 
                            <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label>Produk</label>
                            <input type="text" name="produk" class="form-control" value="<?php echo $mb->produk ?>" ?>
                            <?php echo form_error('produk','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $mb->keterangan ?>" ?>
                           
                        </div>
                        
                        <div class="form-group">
                            <label>Satuan</label>
                            <input type="text" name="satuan" class="form-control" value="<?php echo $mb->satuan ?>">
                            <?php echo form_error('satuan','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        
                        </div>

                        
                         <!--    <div class="form-group col-6">
                             <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="<?php echo $mb->deskripsi ?>">
                            </div>
                      
                         -->
                        
                        
                        
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">

                        </div>
                        
                     						
        		</div>
                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <a class="btn btn-danger mt-4" href="<?php echo base_url('admin/data_mobil.') ?>">Kembali</a>
        		</form>
                <?php endforeach; ?>
        	</div>
        </div>
   </section>
</div>