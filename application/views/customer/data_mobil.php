<!-- 

        <section id="r-advantages-part" class="r-advantages-part">
          <div class="r-advantage-main-part r-advantage-main-part-white">
            <div class="container clearfix">
              <div class="advantage-head">
                <span>120+ CARS TYPE &amp; BRANDS</span>
                <h2>Royal Cars <b>Advantages.</b></h2>
              </div>
              <div class="row clearfix">
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class="r-advantages-box">
                     <div class="icon"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/advantage-icon-1.png" alt=""> </div>
                     <div class="head">24/7 Customer Online Support</div>
                     <div class="sub-text">Call us Anywhere Anytime</div>
                   </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class="r-advantages-box">
                     <div class="icon"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/advantage-icon-2.png" alt=""> </div>
                     <div class="head">Reservation Anytime You Wants</div>
                     <div class="sub-text">24/7 Online Reservation</div>
                   </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class="r-advantages-box">
                     <div class="icon"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/advantage-icon-3.png" alt=""> </div>
                     <div class="head">Lots of Picking Locations</div>
                     <div class="sub-text">250+ Locations</div>
                   </div>
                 </div>
              </div>
            </div>
          </div>
        </section>
        <section id="r-about-info">
          <div class="r-about-info pb-0" style="background-color: #f8f8f8;">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="r-about-info-img">
                    <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/about-img-02.png"  class="img-fluid d-block m-auto" alt="">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="r-about-info-content">
                    <div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-w pt-0">
                      <span>KNOW MORE ABOUT US</span>
                      <h2>Who <b>Royal Cars</b> Are.</h2>
                    </div>
                    <p>
                      We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality and good taste.
                    </p>
                    <ul class="mb-0 pl-0">
                      <li><i class="fa fa-check-circle"></i> We working since 1980 with 4.000 customers</li>
                      <li><i class="fa fa-check-circle"></i> All brand &amp; type cars in our garage</li>
                      <li><i class="fa fa-check-circle"></i> 1.000+ picking locations around the world</li>
                    </ul>
                    <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/about-sign.png" class="img-fluid d-inline-block" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="r-best-offer">
          <div class="r-best-vehicles" style="background-color: rgba(251, 251, 251, 0.64)">
            <div class="r-sec-head r-accent-color r-sec-head-v">
              <span>FEATURED CARS</span>
              <h2>Our <b>Best Offers.</b></h2>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>

            <div class="container">
              <div class="row clearfix r-best-offer-list owl-theme owl-carousel" id="r-best-offers">
                  <?php foreach($mobil as $mb) : ?>
                <div class="">
                  <div class="r-best-offer-single">
                    <div class="r-best-offer-in">
                      <div class="r-offer-img">
                        <a class="d-inline-block" href="#"><img style="width: 600px" src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" class="img-fluid d-block m-auto" ></a>
                        <div class="r-offer-img-over">
                          <a href="<?php echo base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil) ?>"><i class="fa fa-eye"></i></a>
                        </div>
                      </div>
                      
                      <div class="r-best-offer-content">
                        <a href="#"><b><?php echo $mb->merk ?></b></a>
                        <p>Mulai dari <b>RP.<?php echo number_format($mb->harga,0,',','.')  ?></b>/ Hari</p>
                        <ul class="pl-0 mb-0">
                          <li><i class="fa fa-car"></i><span><?php echo $mb->tahun ?></span></li>
                          <li><i class="fa fa-cogs"></i><span><?php if($mb->transmisi == "1") {
                            echo "Manual";
                          }else{
                            echo "Automatic";
                          }

                          ?></span></li>
                          <li><i class="fa fa-beer"></i><span><?php if($mb->bahan_bakar =="1"){
                            echo "Premium";
                          }else{
                            echo "Solar";
                          } 

                          ?></span></li>
                          <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                        </ul>
                      </div>
                      <div class="r-offer-rewst-this">
                        <?php if($mb->status == "1"){
                          echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil,'<span class="text-uppercase" style="color:white;">RENTAL</span>');
                        }else{
                          echo "<span class='text-uppercase'>SUDAH DIRENTAL</span>";
                        } 
                        ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach ; ?>
              </div>
         
            </div>

          </div>
        </section>

        <div id="r-quote">
          <div class="r-quote">
            <div class="container">
              <div class="row">
                  <div class="col-md-12" data-wow-delay="0.2s">
                      <div id="r-quote-carousel" class="carousel slide">
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item">
                             <p>“This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies. Our rental experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                          </div>
                          <div class="carousel-item active">
                            <p>“This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies. Our rental experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                          </div>
                          <div class="carousel-item">
                             <p>“This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies. Our rental experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                          </div>
                        </div>
                        <ol class="carousel-indicators">
                          <li data-target="#r-quote-carousel" data-slide-to="0">
                            <img class="img-fluid d-block" src="<?php echo base_url() ?>/assets/assets_shop/assets/images/user-02.jpg" alt="">
                            <span>
                              <b>Robertho Garcia</b> <br>
                              Graphic Designer
                            </span>
                          </li>
                          <li data-target="#r-quote-carousel" data-slide-to="1" class="active text-center">
                            <img class="img-fluid d-block" src="<?php echo base_url() ?>/assets/assets_shop/assets/images/user-01.png" alt="">
                            <span>
                              <b>Robertho Garcia</b> <br>
                              Graphic Designer
                            </span>
                          </li>
                          <li data-target="#r-quote-carousel" data-slide-to="2">
                           <img class="img-fluid d-block" src="<?php echo base_url() ?>/assets/assets_shop/assets/images/user-03.jpg" alt="">
                           <span>
                              <b>Robertho Garcia</b> <br>
                              Graphic Designer
                           </span>
                          </li>
                        </ol>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <section class="r-advantages-part">
          <div class="r-advantage-main-part r-advantage-main-part-white">
            <div class="container clearfix">
              <div class="advantage-head">
                <span>OUR VEHICLES BRANDS & TYPE</span>
                <h2>Find Your <b>Best Vehicles.</b></h2>
              </div>
              <div class="clearfix r-car-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">Business Cars</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="luxury-tab" data-toggle="tab" href="#luxury" role="tab" aria-controls="luxury" aria-selected="false">Luxury cars</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" id="family-tab" data-toggle="tab" href="#family" role="tab" aria-controls="family" aria-selected="false">Family Cars</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" id="sport-tab" data-toggle="tab" href="#sport" role="tab" aria-controls="sport" aria-selected="false">Sport Cars</a>
                  </li> 
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                    <div class="r-car-whole-info">
                      <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-product-carousel-wrapper">
                            <div class="r-car-product-carousel owl-carousel" data-slider-id="r-product-slider" id="productSlider">
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" />
                              </div>
                            </div>

                            <ul class="owl-thumbs r-car-product-carousel-thumb" data-slider-id="r-product-slider">
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" /> </li>
                            </ul>
                          </div> <!-- /r-car-product-carousel-wrapper -->
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-info-content">
                            <span class="r-reg-year">Registered 2016</span>
                            <h2 class="r-product-name"> Mercedes Benz <span>GTR</span> </h2>
                            <p class="r-product-description">This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies.</p>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <tr>
                                  <td>Make Lamborghini</td>
                                  <td>Style SUV Premium </td>
                                </tr>
                                <tr>
                                  <td>Model M-Class Sport</td>
                                  <td>Engine V-6 Cylinder</td>
                                </tr> 
                              </table>
                              <ul class="pl-0 mb-0 text-left mb-4">
                                <li><i class="fa fa-car"></i><span>2017</span></li>
                                <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                                <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                                <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                              </ul>
                            </div>
                            <a href="#" class="btn btn-full">RENT THIS CAR</a>
                          </div>
                          <!-- /r-car-info-content -->
                        </div>
                      </div>
                    </div> <!-- /r-car-whole-info -->
                  </div>
                  <div class="tab-pane fade" id="luxury" role="tabpanel" aria-labelledby="luxury-tab">
                    <div class="r-car-whole-info">
                      <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-product-carousel-wrapper">
                            <div class="r-car-product-carousel owl-carousel" data-slider-id="r-product-slider-01" id="productSlider-01">
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" />
                              </div>
                            </div>

                            <ul class="owl-thumbs r-car-product-carousel-thumb" data-slider-id="r-product-slider-01">
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" /> </li>
                            </ul>
                          </div> <!-- /r-car-product-carousel-wrapper -->
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-info-content">
                            <span class="r-reg-year">Registered 2017</span>
                            <h2 class="r-product-name">Audi <span>R8</span> </h2>
                            <p class="r-product-description">This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies.</p>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <tr>
                                  <td>Make Lamborghini</td>
                                  <td>Style SUV Premium </td>
                                </tr>
                                <tr>
                                  <td>Model M-Class Sport</td>
                                  <td>Engine V-6 Cylinder</td>
                                </tr> 
                              </table>
                              <ul class="pl-0 mb-0 text-left mb-4">
                                <li><i class="fa fa-car"></i><span>2017</span></li>
                                <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                                <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                                <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                              </ul>
                            </div>
                            <a href="#" class="btn btn-full">RENT THIS CAR</a>
                          </div>
                          <!-- /r-car-info-content -->
                        </div>
                      </div>
                    </div> <!-- /r-car-whole-info -->
                  </div>
                  <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
                    <div class="r-car-whole-info">
                      <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-product-carousel-wrapper">
                            <div class="r-car-product-carousel owl-carousel" data-slider-id="r-product-slider-02" id="productSlider-02">
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" />
                              </div>
                            </div>

                            <ul class="owl-thumbs r-car-product-carousel-thumb" data-slider-id="r-product-slider-02">
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" /> </li>
                            </ul>
                          </div> <!-- /r-car-product-carousel-wrapper -->
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-info-content">
                            <span class="r-reg-year">Registered 2018</span>
                            <h2 class="r-product-name"> Hyundai <span>Z.E</span> </h2>
                            <p class="r-product-description">This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies.</p>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <tr>
                                  <td>Make Lamborghini</td>
                                  <td>Style SUV Premium </td>
                                </tr>
                                <tr>
                                  <td>Model M-Class Sport</td>
                                  <td>Engine V-6 Cylinder</td>
                                </tr> 
                              </table>
                              <ul class="pl-0 mb-0 text-left mb-4">
                                <li><i class="fa fa-car"></i><span>2017</span></li>
                                <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                                <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                                <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                              </ul>
                            </div>
                            <a href="#" class="btn btn-full">RENT THIS CAR</a>
                          </div>
                          <!-- /r-car-info-content -->
                        </div>
                      </div>
                    </div> <!-- /r-car-whole-info -->
                  </div>
                  <div class="tab-pane fade" id="sport" role="tabpanel" aria-labelledby="sport-tab">
                    <div class="r-car-whole-info">
                      <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-product-carousel-wrapper">
                            <div class="r-car-product-carousel owl-carousel" data-slider-id="r-product-slider-03" id="productSlider-03">
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" />
                              </div>
                              <div class="item">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" />
                              </div>
                            </div>

                            <ul class="owl-thumbs r-car-product-carousel-thumb" data-slider-id="r-product-slider-03">
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-4.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-1.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-2.jpg" alt="" class="img-fluid" /> </li>
                              <li class="owl-thumb-item"> <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/car-slider-img-3.jpg" alt="" class="img-fluid" /> </li>
                            </ul>
                          </div> <!-- /r-car-product-carousel-wrapper -->
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                          <div class="r-car-info-content">
                            <span class="r-reg-year">Registered 2016</span>
                            <h2 class="r-product-name"> Volk <span>GTR</span> </h2>
                            <p class="r-product-description">This was our first time renting from Royal Cars and we were very pleased with the whole experience. Your price was lower than other companies.</p>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <tr>
                                  <td>Make Lamborghini</td>
                                  <td>Style SUV Premium </td>
                                </tr>
                                <tr>
                                  <td>Model M-Class Sport</td>
                                  <td>Engine V-6 Cylinder</td>
                                </tr> 
                              </table>
                              <ul class="pl-0 mb-0 text-left mb-4">
                                <li><i class="fa fa-car"></i><span>2017</span></li>
                                <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                                <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                                <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                              </ul>
                            </div>
                            <a href="#" class="btn btn-full">RENT THIS CAR</a>
                          </div>
                          <!-- /r-car-info-content -->
                        </div>
                      </div>
                    </div> <!-- /r-car-whole-info -->
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </section> 
        <div class="r-counter-section pt-5 pb-5 m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="r-counter-box">
                            <div class="r-counter-icon">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/icon-happy-customer.png" alt="" class="img-fluid">
                            </div>
                            <div class="r-counts" data-count="172700">
                              <!-- 1.172.700 -->
                              <span class="r-count">0</span>
                            </div>
                            <span class="r-count-title"> HAPPY CUSTOMERS </span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="r-counter-box">
                            <div class="r-counter-icon">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/icon-cars-count.png" alt="" class="img-fluid">
                            </div>
                            <div class="r-counts" data-count="2450">
                              <!-- 2.450 -->
                              <span class="r-count">0</span>
                            </div>
                            <span class="r-count-title"> CARS IN GARAGE </span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="r-counter-box">
                            <div class="r-counter-icon">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/icon-total-km.png" alt="" class="img-fluid">
                            </div>
                            <div class="r-counts" data-count="1211100">
                              <!-- 1.211.100 -->
                              <span class="r-count">0</span>
                            </div>
                            <span class="r-count-title"> TOTAL KILOMETER/MIL </span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="r-counter-box">
                            <div class="r-counter-icon">
                                <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/icon-car-center.png" alt="" class="img-fluid">
                            </div>
                            <div class="r-counts" data-count="47250">
                              <!-- 47.250 -->
                              <span class="r-count">0</span>
                            </div>
                            <span class="r-count-title"> CAR CENTER SOLUTIONS </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="r-drivers">
          <div class="r-driver-blog-light" style="background-color: #f8f8f8">
            <div class="r-sec-head r-accent-color r-sec-head-s">
              <span>OUR PROFESSIONAL STAFF</span>
              <h2>Royal Cars <b>Drivers.</b></h2>
            </div>
            <div class="container">
              <div class="r-driver-blog">
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="r-drivers">
                        <div class="r-drivers-detail">
                          <div class="name">Luis <br>Henrique</div>
                          <div class="text">5 Years Experience</div>
                          <div class="icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="drivers-img">
                          <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/driver-blog-img.jpg" class="img-fluid d-block m-auto" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="r-drivers">
                        <div class="r-drivers-detail">
                          <div class="name">Robertho Garcia</div>
                          <div class="text">5 Years Experience</div>
                          <div class="icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="drivers-img">
                          <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/driver-blog-img-2.jpg" class="img-fluid d-block m-auto" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="r-drivers">
                        <div class="r-drivers-detail">
                          <div class="name">Daniel Quaresma</div>
                          <div class="text">5 Years Experience</div>
                          <div class="icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="drivers-img">
                          <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/driver-blog-img-3.jpg" class="img-fluid d-block m-auto" alt="">
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="r-all-but text-center pt-5">
                <a href="#" class="btn btn-full">View All Drivers</a>
              </div>
            </div>
          </div>
        </section>
        <section id="r-faq-section">
          <div class="r-faq-section r-faq-white-bg">
            <div class="container">
                <div class="row v-align-center r-faq-header-wrapper">
                    <div class="col-md-8 col-sm-12">
                        <div class="r-faq-header">
                            <span>FIND YOUR ANSWER HERE</span>
                            <h2>Frequenly <strong>Ask &amp; Questions.</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row r-faq-accordion-wrapper">
                  <div class="col-lg-6 col-md-12">
                    <div class="r-accordion">
                      <div class="r-accordion-heading">
                        <span class="r-accordion-toggle">
                          <i class="fa-arrow-circle-down fa"></i>
                        </span>
                        How to reserved a car here?
                      </div>
                      <div class="r-accordion-body">
                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                        </p>
                      </div>
                    </div> <!-- /r-accordion -->
                    <div class="r-accordion">
                      <div class="r-accordion-heading">
                        <span class="r-accordion-toggle">
                          <i class="fa-arrow-circle-down fa"></i>
                        </span>
                        How can i drop the rental car?
                      </div>
                      <div class="r-accordion-body">
                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                        </p>
                      </div>
                    </div> <!-- /r-accordion -->
                    <div class="r-accordion">
                      <div class="r-accordion-heading">
                        <span class="r-accordion-toggle">
                          <i class="fa-arrow-circle-down fa"></i>
                        </span>
                        What happen if i crash the car?
                      </div>
                      <div class="r-accordion-body">
                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                        </p>
                      </div>
                    </div> <!-- /r-accordion -->
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="r-accordion">
                     <div class="r-accordion-heading">
                        <span class="r-accordion-toggle">
                          <i class="fa-arrow-circle-down fa"></i>
                        </span>
                        How can i select a car rent?
                      </div>
                      <div class="r-accordion-body" style="display: none;">
                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                        </p>
                      </div>
                    </div> <!-- /r-accordion -->
                    <div class="r-accordion">
                      <div class="r-accordion-heading">
                        <span class="r-accordion-toggle">
                          <i class="fa-arrow-circle-down fa"></i>
                        </span>
                        Do you have VIP access to airport?
                      </div>
                      <div class="r-accordion-body">
                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                        </p>
                      </div>
                    </div> <!-- /r-accordion -->
                    <div class="r-accordion">
                      <div class="r-accordion-heading">
                        <span class="r-accordion-toggle">
                          <i class="fa-arrow-circle-down fa"></i>
                        </span>
                        What happen if i crash the car?
                      </div>
                      <div class="r-accordion-body">
                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                        </p>
                      </div>
                    </div> <!-- /r-accordion -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <a href="#" class="btn-primary icon-btn"> <i class="fa fa-question-circle icon"></i> MAKE A QUESTIONS </a>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <section id="r-latest-news">
          <div class="r-latest-news r-latest-news-light" style="background-color: #f8f8f8">
            <div class="r-sec-head r-sec-head-b">
              <span>ARTICLES FROM BLOG</span>
              <h2>Our <b>Latest News.</b></h2>
            </div>
            <div class="container">
              <div class="owl-carousel r-latest-news-list" id="r-latest-news-slider">
                <div class="r-latest-news-single">
                  <a href="#" class="d-inline-block"><img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/latest-news-01.jpg" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-latest-news-content">
                    <span class="r-date">27 JUNE 2018</span>
                    <h4><a href="#">What To Do if Your Rental Car Has Met With An Accident.</a></h4>
                    <a href="#" class="r-read-more">READ ARTICLE</a>
                  </div>
                </div>
              
                <div class="r-latest-news-single">
                  <a href="#" class="d-inline-block"><img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/latest-news-02.jpg" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-latest-news-content">
                    <span class="r-date">27 JUNE 2018</span>
                    <h4><a href="#">What To Do if Your Rental Car Has Met With An Accident.</a></h4>
                    <a href="#" class="r-read-more">READ ARTICLE</a>
                  </div>
                </div>
              
                <div class="r-latest-news-single">
                  <a href="#" class="d-inline-block"><img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/latest-news-03.jpg" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-latest-news-content">
                    <span class="r-date">27 JUNE 2018</span>
                    <h4><a href="#">What To Do if Your Rental Car Has Met With An Accident.</a></h4>
                    <a href="#" class="r-read-more">READ ARTICLE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div id="r-gallery-part">
          <div class="r-gallery-part r-gallery-part-home py-0">
            <ul class="clearfix">
              <li>
                  <a href="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img01.jpg" data-rel="lightcase:myCollection">
                      <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img01.jpg" class="d-block img-fluid" alt="">
                      <div class="gallery-hover">
                        <div class="gallery-text">
                          <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img02.jpg" data-rel="lightcase:myCollection">
                      <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img02.jpg" class="d-block img-fluid" alt="">
                      <div class="gallery-hover">
                        <div class="gallery-text">
                          <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img03.jpg" data-rel="lightcase:myCollection">
                      <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img03.jpg" class="d-block img-fluid" alt="">
                      <div class="gallery-hover">
                        <div class="gallery-text">
                          <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img04.jpg" data-rel="lightcase:myCollection">
                      <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img04.jpg" class="d-block img-fluid" alt="">
                      <div class="gallery-hover">
                        <div class="gallery-text">
                          <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img05.jpg" data-rel="lightcase:myCollection">
                      <img src="<?php echo base_url() ?>/assets/assets_shop/assets/images/gallery-img05.jpg" class="d-block img-fluid" alt="">
                      <div class="gallery-hover">
                        <div class="gallery-text">
                          <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                      </div>
                  </a>
              </li>
            </ul>
          </div>
        </div>
        -->