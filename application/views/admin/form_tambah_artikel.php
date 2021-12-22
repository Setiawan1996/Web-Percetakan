<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Input Data Artikel</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_artikel/tambah_artikel_aksi') ?>"enctype="multipart/form-data">
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <input type="text" name="judul_artikel" class="form-control">
                            <?php echo form_error('judul_artikel','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Katerangan</label>
                            <input type="text" name="keterangan" class="form-control">
                            <?php echo form_error('keterangan','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                       <div class="form-group has-icon has-label label" id="datetimepicker2" data-target-input="nearest">
                              <label>Tanggal Update</label>
                              <input type="date" name="tanggal_update" class="form-control">
                               <?php echo form_error('tanggal_update','<div class="text-small text-danger">','</div>') ?>
                              
                          </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                         </div>   
                                      
                </div>
               
                  
                       <div class="form-group">
                            <label>Katerangan Lengkap</label>
                            <textarea style="height: 250px" rows="4" type="text" name="keterangan_lengkap" class="form-control"></textarea>
                            <?php echo form_error('keterangan_lengkap','<div class="text-small text-danger">','</div>') ?>

                             <label>Katerangan Lengkap 2</label>
                            <textarea style="height: 250px" rows="4" type="text" name="keterangan_lengkap_2" class="form-control"></textarea>
                            <?php echo form_error('keterangan_lengkap_2','<div class="text-small text-danger">','</div>') ?>

                             <label>Katerangan Lengkap 3</label>
                            <textarea style="height: 250px" rows="4" type="text" name="keterangan_lengkap_3" class="form-control"></textarea>
                            <?php echo form_error('keterangan_lengkap_3','<div class="text-small text-danger">','</div>') ?>
                            
                             <label>Katerangan Lengkap 4</label>
                            <textarea style="height: 250px" rows="4" type="text" name="keterangan_lengkap_4" class="form-control"></textarea>
                            <?php echo form_error('keterangan_lengkap_4','<div class="text-small text-danger">','</div>') ?>
                        </div>
                
                <div class="row">
                  <button type="submit" class="btn btn-primary mt-4 ml-3">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4 ml-2">Reset</button>
                        </div>
                </form>
            </div>
        </div>
   </section>
</div>