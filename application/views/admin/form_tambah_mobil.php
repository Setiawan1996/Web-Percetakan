<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Input Data Produk</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>"enctype="multipart/form-data">
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kode_type" class="form-control">
                            <option value="">--Pilih Kategori--</option>
                            <?php foreach($type as $tp) : ?>
                                <option value="<?php echo $tp->kode_type ?>">
                                     <?php echo $tp->nama_type ?></option>
                            <?php endforeach; ?>
                            </select> 
                            <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label>Produk</label>
                            <input type="text" name="produk" class="form-control">
                            <?php echo form_error('produk','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <input type="text" name="satuan" class="form-control">
                            <?php echo form_error('satuan','<div class="text-small text-danger">','</div>') ?>
                        </div>
                       
                        
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                         </div>  

                         <div class="col-md-6"> 
                         <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan"  name="keterangan" class="form-control">
                                
                            
                            <!-- <input type="text" name="no_plat" class="form-control"> -->
                            <?php echo form_error('keterangan','<div class="text-small text-danger">','</div>') ?>
                        </div>

                                      
                </div>
                  <button type="submit" class="btn btn-primary mt-4 mr-3">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>
                </form>
            </div>
        </div>
   </section>
</div>