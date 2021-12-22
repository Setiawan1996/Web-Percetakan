 <div class="r-form-strip">
              <div class="r-slider-serach r-slider-serach-down form-search dark">
                <?php foreach ($detail as $dt) : ?>
                <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
                    <div class="form-title">
                        <h2>Form Checkout </h2>
                    </div>
                    <div class="row row-inputs">

                      <div class="col-sm-3">
                        <div class="form-group has-icon has-label">
                              <label>Produk</label>
                              <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                              <input style="color: black" type="text" name="produk" class="form-control" value="<?php echo $dt->produk ?>" readonly >
                             
                          </div>
                          <div class="form-group has-icon has-label">
                              <label>Harga</label>
                              <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                              <input style="color: black" type="text" name="harga" class="form-control" value="RP.<?php echo number_format($dt->harga,0,',','.')  ?> " readonly >
                             
                          </div>
                        
                      
                      </div> 
                      <div class="form-group has-icon has-label">
                              <label>Harga</label>
                              <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                              <input style="color: black" type="text" name="harga" class="form-control" value="RP.<?php echo number_format($dt->harga,0,',','.')  ?> " readonly >
                             
                          </div>
                      <div class="col-sm-3">
                          <div class="form-group has-icon has-label label" id="datetimepicker2" data-target-input="nearest">
                              <label>Tanggal Rental</label>
                              <input type="date" name="tanggal_rental" class="form-control">
                              
                          </div>
                      </div>
                       
                      
                      <div class="col-12 mb-3">
                        <hr>
                      </div>
                      <div class="inner col-12 clearfix">
                          <a href=""><button type="submit" class="btn m-auto d-block float-right btn-full">RENTAL</button></a>
                       
                       
                          
                      </div>
                    </div>
                </form>
              <?php endforeach ; ?>
              </div>
            </div>
          </div>