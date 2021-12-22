<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Produk</h1>
          </div>
    </section>
    <?php foreach($detail as $dt) : ?>
     <div class="card">
          <div class="card-body">
               <div class="row">
                    <div class="col-md-5">
                         <img width="400px" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">     
                    </div>
                    <div class="col-md-7">
                         <table class="table">
                              <tr>
                                   <td>Kategori Produk</td>
                                   <td>
                                   <?php 
                                   if ($dt->kode_type == "Kemasan"){
                                        echo "Kemasan";
                                    }elseif($dt->kode_type =="Buku"){
                                        echo "Buku";

                                    }elseif($dt->kode_type =="Kantor"){
                                        echo "Kantor";

                                    }elseif($dt->kode_type =="Promosi"){
                                        echo "Promosi";

                                    }elseif($dt->kode_type =="Banner"){
                                        echo "Banner";

                                    }elseif($dt->kode_type =="Souvenir"){
                                        echo "Souvenir";

                                    }elseif($dt->kode_type =="Textile"){
                                        echo "Textile";

                                    }else{
                                        echo "<span class='text-danger'>Kategori produk belum terdaftar</span>";
                                    }
                                    ?>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Produk</td>
                                   <td><?php echo $dt->produk ?></td>
                              </tr>
                              <tr>
                             
                               <tr>
                                   <td>Satuan</td>
                                   <td><?php echo $dt->satuan ?></td>
                              </tr>
                              <tr>
                                   <td>Deskripsi</td>
                                   <td><?php echo $dt->keterangan ?></td>
                              </tr>
                               <tr>
                                   <td>Harga</td>
                                   <td>Rp.<?php echo number_format($dt->harga,0,',','.') ?></td>
                              </tr>
                               
                               
                         </table>
                         <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_mobil.') ?>">Kembali</a>
                         <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Update</a>
                    </div>
                    
               </div>
          </div>
     </div>
    <?php endforeach; ?>
</div> 

