



    <!-- Header -->
   
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <?php foreach ($detail as $dt) : ?>
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <!-- <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div> -->
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <!-- <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_01.jpg" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_02.jpg" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_03.jpg" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/.First slide-->

                                <!--Second slide-->
                                <!-- <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_04.jpg" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_05.jpg" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_06.jpg" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <!-- <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_07.jpg" alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_08.jpg" alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_09.jpg" alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                       <!--  <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> -->
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $dt->produk ?></h1>
                            <p class="h3 py-2">Rp.<?php echo number_format($dt->harga,0,',','.') ?></p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Kategori:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><?php echo $dt->kode_type ?></p>
                                </li>
                            </ul>

                            <h6>Deskripsi:</h6>
                            <p><?php echo $dt->deskripsi ?>.</p>
                            <ul class="list-inline">
                                <!-- <li class="list-inline-item">
                                    <h6>Warna Tersedia :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li> -->
                            </ul>

                           <!--  <h6>Spesifikasi:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul> -->

                          <!--   <form action="#" method="GET">
                                <input type="hidden" name="product-title" value="Activewear"> -->
                                <div class="row">
                                   <!--  <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div> -->
                                    <!-- <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <?php echo anchor('customer/produk/tambah_keranjang/'.$dt->id_mobil,'<button class="btn btn-success  text-white mt-2 swalDefaultSuccess">Tambah Keranjang</button>') ?>
                                    </div>
                                    <!-- <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div> -->
                                </div>
                         <!--    </form> -->

                        </div>
                    </div>
                </div>
            <?php endforeach ; ?>
            </div>
        </div>
    </section>
    <!-- Close Content -->

<!--  <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url() ?>/assets/assets_shop/images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Our For Rent Cars</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <img style="margin-top: 90px" width="500px" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">
                    </div>

                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                            <th>Merk</th>
                                <td>
                                    <?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <th>Tahun Produksi</th>
                                <td>
                                    <?php echo $dt->tahun ?></td>
                            </tr>
                                
                            <tr>
                            <th>Transmisi</th>
                                <td>
                                    <?php if($dt->transmisi =="1") {
                                    echo "Manual";
                                    }else{
                                        echo "Automatic";
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                            <th>Bahan Bakar</th>
                                <td>
                                    <?php if($dt->bahan_bakar =="1") {
                                    echo "Premium";
                                    }else{
                                        echo "Solar";
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <th>No kendaraan</th>
                                <td>
                                    <?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td>
                                    <?php echo $dt->warna ?></td>
                            </tr>
                            <tr>

                                <th>AC</th>
                                <td>
                                    <?php if ($dt->ac =='1'){
                                        echo "<span class= 'btn btn-success btn btn-sm' disable>Tersedia</span>";
                                        }else{
                                            echo"<span class= 'btn btn-danger btn btn-sm' disable>Tidak Tersedia</span>";
                                        }?>
                                            
                                    </td>
                                </tr>
                            <tr>

                                <th>Supir</th>
                                <td>
                                    <?php if ($dt->supir =='1'){
                                        echo "<span class= 'btn btn-success btn btn-sm' disable>Tersedia</span>";
                                        }else{
                                            echo"<span class= 'btn btn-danger btn btn-sm' disable>Tidak Tersedia</span>";
                                        }?>
                                            
                                    </td>
                                </tr>
                            <tr>

                                <th>Status</th>
                                <td>
                                    <?php if ($dt->status =='1'){
                                        echo "<span class= 'btn btn-success btn btn-sm' disable>Tersedia</span>";
                                        }else{
                                            echo"<span class= 'btn btn-danger btn btn-sm' disable>Tidak Tersedia</span>";
                                        }?>
                                            
                                    </td>
                                </tr>
                            
                            
                        </table>
                        <tr>
                                <td></td>
                            <td>
                                 <?php 
                                        if ($dt->status == "0")
                                        {
                                            echo"<span class= 'btn btn-danger btn btn-sm' disable>Telah di Rental</span>";
                                        }else{
                                            echo anchor('customer/rental/tambah_rental'.$dt->id_mobil,'<button class="btn btn-success btn btn-sm">Rental</button>');
                                        }
                                     ?>
                            </td>
                            </tr>
                    </div>
                </div>
            <?php endforeach ; ?>
        </div>  
    </div>  
</div> -->