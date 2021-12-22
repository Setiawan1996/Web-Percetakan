<div class="main-content">
        <section class="section">
          <div style="background-color: #59ab6e !important; "class="section-header">
            <h1 style="color: white">Data Link</h1>
          </div>
          <div class="container">
          <div class="row">
          
          <a href="<?php echo base_url('admin/data_link/tambah_link') ?>" class="btn btn-warning mb-3">Tambah Link Artikel</a>
     </div>
</div>
          <?php echo $this->session->flashdata('pesan') ?>
          <table id="data-table" class="table table-hover table-striped table-bordered" style="width: 100%">
            <thead>
              <tr>
              <th>No</th>
              <th>Link</th>
              <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach($link as $lk) :?>
                <tr>
                <td><?php echo $no++ ?></td>
               
                <td><?php echo $lk->link ?></td>
                        
                 <td>
                  <!-- <a href="<?php echo base_url('admin/data_artikel/detail_artikel/').$ar->id_artikel ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a> -->
                  <a href="<?php echo base_url('admin/data_link/delete_link/').$lk->id_link ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus')" ><i class="fas fa-trash"></i></a>
                  <!-- <a href="<?php echo base_url('admin/data_artikel/ambil_id_artikel/').$ar->id_artikel ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> -->

                 </td>
                 </tr>

               <?php endforeach; ?>
            </tbody>
          </table>
    </section>
</div> 