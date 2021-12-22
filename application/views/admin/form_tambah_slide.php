<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Input Slide</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_slide/tambah_slide_aksi') ?>"enctype="multipart/form-data">
                <div class="row">

                    <!--  <div class="form-group">
                            <label>Nama Slide</label>
                            <input type="text" name="nama_slide" class="form-control">
                            <?php echo form_error('nama_slide','<div class="text-small text-danger">','</div>') ?>
                        </div> -->
                       
               
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                             <?php echo form_error('gambar','<div class="text-small text-danger">','</div>') ?>
                        </div>
                           
                                      
                </div>
                  <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>
                </form>
            </div>
        </div>
   </section>
</div>