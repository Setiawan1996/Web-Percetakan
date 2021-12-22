<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Input Link</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_link/tambah_link_aksi') ?>"enctype="multipart/form-data">
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Link Artikel</label>
                            <input type="text" name="link" class="form-control">
                            <?php echo form_error('link','<div class="text-small text-danger">','</div>') ?>
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