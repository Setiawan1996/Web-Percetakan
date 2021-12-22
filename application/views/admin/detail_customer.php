<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Customer</h1>
          </div>
     </section>
     <?php foreach($detail as $dt) : ?>
     <div class="card">
          <div class="card-body">
               <div class="row">
                    <div class="col-md-5">
                         <img width="500px" src="<?php echo base_url().'assets/data/'.$dt->gambar ?>">     
                    </div>
                    <div class="col-md-7">
                         <table class="table">
                              
                              <tr>
                                   <td>Nama</td>
                                   <td><?php echo $dt->nama ?></td>
                              </tr>
                               <tr>
                                   <td>Username</td>
                                   <td><?php echo $dt->username ?></td>
                              </tr>
                              <tr>
                                   <td>Alamat</td>
                                   <td><?php echo $dt->alamat ?></td>
                              </tr>
                              <tr>
                                   <td>Jenis Kelamin</td>
                                   <td><?php echo $dt->jenis_kelamin ?></td>
                              </tr>
                              <tr>
                                   <td>No Telepon</td>
                                   <td><?php echo $dt->no_telepon ?></td>
                              </tr>
                              
                                   <td>Password</td>
                                   <td><?php echo $dt->password ?></td>
                              </tr>
                              
                         </table>
                         <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_customer.') ?>">Kembali</a>
                         
                    </div>
                    
               </div>
          </div>
     </div>
    <?php endforeach; ?>
</div> 
</div>