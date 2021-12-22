<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Artikel</h1>
          </div>
    </section>
    <?php foreach ($detail as $dt) : ?>
     <div class="card">
          <div class="card-body">
               <div class="row">
                    <div class="col-md-5">
                         <img width="400px" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">     
                    </div>
                    <div class="col-md-7">
                         <table class="table">
                              <tr>
                                   <td><b>Judul</b></td>
                                   <td>
                                   <?php echo $dt->keterangan ?>
                                   </td>
                              </tr>
                              <tr>
                                   <td><b>Tanggal Update</b></td>
                                   <td><?php echo $dt->tanggal_update ?></td>
                              </tr>
                              <tr>
                             
                               <tr>
                                   <td style="padding-bottom: 120px"><b>Keterangan Lengkap</b></td>
                                   <br>
                                   <td style="text-align: justify;"><?php echo $dt->keterangan_lengkap ?></td>
                              </tr>
                               <tr>
                                   <td style="padding-bottom: 120px"><b>Keterangan Lengkap 2</b></td>
                                   <br>
                                   <td style="text-align: justify;"><?php echo $dt->keterangan_lengkap_2 ?></td>
                              </tr>
                               <tr>
                                   <td style="padding-bottom: 120px"><b>Keterangan Lengkap 3</b></td>
                                   <br>
                                   <td style="text-align: justify;"><?php echo $dt->keterangan_lengkap_3 ?></td>
                              </tr>
                               <tr>
                                   <td style="padding-bottom: 120px"><b>Keterangan Lengkap 4</b></td>
                                   <br>
                                   <td style="text-align: justify;"><?php echo $dt->keterangan_lengkap_4 ?></td>
                              </tr>
                               
                               
                         </table>
                         <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_artikel') ?>">Kembali</a>
                         <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_artikel/update_artikel/'.$dt->id_artikel) ?>">Update</a>
                    </div>
                    
               </div>
          </div>
     </div>
    <?php endforeach ; ?>
</div> 

