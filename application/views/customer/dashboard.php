 
 <div id="template-mo-zay-hero-carousel" class="carousel slide " data-bs-ride="carousel">
        <ol style="padding-top: -100px" class="carousel-indicators ">
        <?php foreach($slide as $key => $sl) { 
             if ($key == 0){ ?>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="<?php $key; ?>" class="active"></li>
        <?php }else{ ?> 
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="<?php $key; ?>" ></li>
            <?php } 
        } ?>
        </ol>
        <div class="carousel-inner ">
            <?php foreach($slide as $key =>$sl) { 
                if ($key == 0){ ?>
                   <div class="carousel-item active ">
                      <img src="<?php echo base_url('assets/upload/'.$sl->gambar)  ?>" class="d-block w-100 image-slider" alt="">
                        </div>
                  <?php }else{ ?>
                 <div class="carousel-item">
                      <img src="<?php echo base_url('assets/upload/'.$sl->gambar)  ?>" class="d-block w-100 image-slider" alt="">
                        </div>
                <?php }
             } ?>        
        </div>
                <!-- <a class="carousel-control-prev text-decoration-none w-auto ps-3 " href="template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left "></i>
        </a>
         
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a> -->
        
    </div>
   
     <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Pelayanan Kami</h1>
               <!--  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet.
                </p> -->
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Gratis Ongkir</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-money-check-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Murah Harganya</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-award"></i></div>
                    <h2 class="h5 mt-4 text-center">Kualitas Terbaik</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-pencil-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Desain Modern</h2>
                </div>
            </div>
        </div>
    </section>


    


    <!-- <!Start Featured Product -->
     <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Artikel Terkini</h1>
                     <!-- <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p> --> 
                 </div>
            </div>
            <div class="row">
                
                 <?php foreach($artikel as $ar) :  ?>

                <div class="col-12 col-md-4 mb-4">
                    <div >
                        <!-- <a href="shop-single.html"> -->
                            <a href="<?php echo base_url('welcome/detail_artikel/'.$ar->id_artikel) ?>"><img src="<?php echo base_url('assets/upload/'.$ar->gambar) ?>" class="card-img-top" alt="..."></a>
                        </a>
                        <div class="card-body">
                           <!--  <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                            </ul> -->
                            <a href="<?php echo base_url('welcome/detail_artikel/'.$ar->id_artikel) ?>" class="h2 text-decoration-none text-dark"><b><?php echo $ar->judul_artikel ?></b></a>
                            <p  style="text-align: justify;"class="card-text"><?php echo $ar->keterangan ?>...
                            </p>
                            <a href="<?php echo base_url('welcome/detail_artikel/'.$ar->id_artikel) ?>" class="h5 text-decoration-none btn btn-success ">Selengkapnya</a>
                            <p class="text-muted"><i class="far fa-clock">&nbsp;</i>
                                 <?php 
                                        if($ar->tanggal_update =="0000-00-00"){
                                             echo "-";
                                        }else{
                                             echo date('d/m/Y',strtotime($ar->tanggal_update));
                                        }
                         ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ; ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            
            <div class="col-lg-3">
                
                <h1 class="h2 pb-4">Kategori</h1>

                <ul class="list-unstyled templatemo-accordion">
                    
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h2 text-decoration-none" href="">
                            Kategori Produk
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                       <ul id="collapseTwo" class="collapse list-unstyled pl-3 h3">
                            <li><a class="h3 text-decoration-none " href="<?php echo base_url('customer/kategori2/kemasan') ?>">Kemasan</a></li>
                            <li class="mt-2"><a class="h3 text-decoration-none" href="<?php echo base_url('customer/kategori2/buku') ?>">Buku</a></li>
                            <li class="mt-2"><a class="h3 text-decoration-none" href="<?php echo base_url('customer/kategori2/promosi') ?>">Promosi</a></li>
                            <li class="mt-2"><a class="h3 text-decoration-none" href="<?php echo base_url('customer/kategori2/textile') ?>">Textile</a></li>
                            <li class="mt-2"><a class="h3 text-decoration-none" href="<?php echo base_url('customer/kategori2/banner') ?>">Banner Display</a></li>
                            <li class="mt-2"><a class="h3 text-decoration-none" href="<?php echo base_url('customer/kategori2/kantor') ?>">Perlengkapan Kantor</a></li>
                            <li class="mt-2"><a class="h3 text-decoration-none" href="<?php echo base_url('customer/kategori2/souvenir') ?>">Souvenir</a></li>
                        </ul>
                    </li>
                    <!-- <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li> -->
                </ul>
           
            </div>
             
            <div class="col-lg-9">
                <div class="row">

                    <div class="col-md-6">
                        <!-- <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul> -->
                    </div>
                 <!--    <div  class="col-md-6 pb-4 text-right">
                         <?php echo form_open('welcome'); ?>  
                <div class="input-group mb-2">     
                    <input  type="text" class="form-control" id="inputPassword2" name="key" placeholder="Cari Produk">
                    <button type="submit" class="input-group-text bg-success text-light" value="search">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                    
                </div>
                <?php echo form_close(); ?>
                        <div class="d-flex">

                         
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <!-- <div class="nav-bar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php 
                                    $keranjang = 'keranjang Belanja:'.$this->cart->total_items(). 'items'
                                 ?>
                                 <?php echo $keranjang ?>
                            </li>  
                        </ul>
                    </div> -->
                    
                    <?php foreach($mobil as $mb) :  ?>
                    <div class="col-md-4">
                       
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo base_url('customer/data_produk/detail_produk/'.$mb->id_mobil) ?>"><i class="far fa-eye"></i></a></li>
                                        
                                        <?php echo anchor('customer/dashboard/tambah_keranjang/'.$mb->id_mobil,'<button class="btn btn-success  text-white mt-2 swalDefaultSuccess"><i class="fas fa-cart-plus"></i></button>') ?>
                                        
                                        <!-- <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $mb->produk ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <!-- <li>M/L/X/XL</li> -->
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">Rp.<?php echo number_format($mb->harga,0,',','.')  ?>/<?php echo $mb->satuan ?></p>
                            </div>
                        </div>
                        <!-- <?php echo form_close(); ?> -->
                    </div>
                    
                    <?php endforeach ; ?>
                
                </div>
               
                  <br>
                  <a class="wafixed" href="https://api.whatsapp.com/send?phone= +6282274033195&text=Hai, Saya tertarik dengan produk pramecreative" target="_blank"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x text-success"></i>
  <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
</span></a>
    <!-- <div class="container">
        <div style="text-align: center;">
        
<button class="btn btn-info " id="btn" >load more</button>
<span style="color: blue" id="akhir"></span> -->
                <div div="row">

                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="btn btn-xl btn-success" href="<?php echo base_url('customer/produk2/id') ?>">Produk Lainnya</a>
                        </li>
                 
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
      <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Klien Kami</h1>
                   <!--  <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p> -->
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/pemko.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/permata1.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/deli.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/ut.png" alt="Brand Logo"></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/tvri.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/pks.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/bss.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/Mitsubishi.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/Kominfo.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/Hyundai.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/Human.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href=""><img style="height: 80px" class="img-fluid brand-img" src="<?php echo base_url() ?>/assets/assets_shop/assets/img/Rumah_zakat.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>

        <div>
                
                 <div class="container">
    <div class="sosmed">
        <?php foreach($link as $lk) : ?>
    <ul class="sticky">
        <input id='hideshare' type="checkbox" />
       
        
        <li class="share facebook"><span><a href="https://www.facebook.com/share.php?u=<?php echo $lk->link ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> <b>Facebook</b></a></span></li>
   

        <li class="share twitter"><span><a href="https://twitter.com/intent/tweet?url=<?php echo $lk->link ?>l" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i> <b>Twitter</b></a></span></li>

        
       <!--  <li class="openall"><input id='openall' type="checkbox" /><label for="openall" class="switch"><span><i class="fa fa-plus" aria-hidden="true"></i></span></label> -->
            <ul class="allsosmed">

                <div class="login">
                   
                </div>
            <?php endforeach ; ?>
            </ul>
        </li>
        <label for="hideshare" class="switch"><span class="show"></span></label>
    </ul>
</div>
    </div>
        </div>
            </div>
                 </div>
                </div>
             </div>
         </div>
    </div>

</div>
    </section>


<style type="text/css">
.sosmed{padding:0;margin:0;position:fixed;right:-119px;top:20%;width:200px}
.sosmed input#hideshare,.sosmed input#openall{display:none}
.sosmed ul,.sosmed ul li{list-style:none;list-style-type:none}
.sticky li.openall{margin:0;padding:0}
.sticky li.share{background-color:#333;color:#efefef;height:43px;padding:0;margin:0 0 1px 0;-webkit-transition:all 0.25s ease-in-out;-moz-transition:all 0.25s ease-in-out;-o-transition:all 0.25s ease-in-out;transition:all 0.25s ease-in-out;cursor:pointer}
.sticky li.share:hover{margin-left:-10px;-webkit-transform:translateX(-115px);-moz-transform:translateX(-115px);-o-transform:translateX(-115px);-ms-transform:translateX(-115px);transform:translateX(-115px)}
.sticky li.share i{float:left;margin:11px;margin-right:15px;color:white;font-size:20px}
.sticky li.share b{padding:0;margin:0;text-transform:uppercase;line-height:43px}
.sticky li a{text-decoration:none;color:white}
.sosmed li.facebook{background:#3b5999}
.sosmed li.twitter{background:#55acee}
.sosmed li.google{background:#dd4b39}
input:checked#hideshare ~ li.share,input:checked#hideshare ~ li.openall{display:none}
/*label span.show,.sosmed li.openall label{position:relative;cursor:pointer;display:block;width:43px;font-size:20px}*/
.sosmed li.openall label{text-align:center;background:#bbb;color:white}
input:checked#hideshare ~ label span.show{padding:5px;text-align:center}
/*label span.show:after{content:'\f105';font-family:FontAwesome}*/
input:checked#hideshare ~ label span.show:after{content:'\f104'}
/*Popup*/
input:checked#openall ~ .allsosmed{position:fixed;top:20%;left:20%;right:20%;background:#fafafa;transition:opacity 500ms;width:50%;margin:0 auto;padding:2%;box-sizing:border-box;-webkit-transition:width 2s;/* Safari */
    transition:width 2s;z-index:999;box-shadow:0 0 15px rgba(0,0,0,.1);overflow:auto;max-width:500px}
@media screen and (max-width:700px){input:checked#openall ~ .allsosmed{left:10%;right:10%;width:70%}}
@media screen and (max-width:500px){input:checked#openall ~ .allsosmed{left:5%;right:5%;width:80%}.allsosmed li a{font-size:12px}}
@media screen and (max-width:300px){input:checked#openall ~ .allsosmed{top:5%}.openall .allsosmed li a{width:100%}}
.allsosmed{width:0%;-webkit-transition:width 2s;/* Safari */
    transition:width 2s;position:absolute;z-index:-99}
.allsosmed li a{float:left;position:relative;margin:2px;overflow:hidden;line-height:0;width:48%;padding:10px;box-sizing:border-box;border-radius:3px}
.allsosmed li a i{margin-right:5px}
rgba(0,0,0,0.5);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;border-radius:3px;color:#fafafa;margin:3px}
.allsosmed .login form input.email{width:75%}
.allsosmed .login form input.signin{width:20%;min-width:80px;cursor:pointer}


.wafixed {
    position: fixed;
    right: 30px;
    bottom: 30px;
    z-index: 999;
}
</style>
    <script type="text/javascript">
//<![CDATA[
var siteurl = window.location.href;
document.write('');

function pinIt() {
    var t = document.createElement("script");
    t.setAttribute("type", "text/javascript"), t.setAttribute("charset", "UTF-8"), t.setAttribute("src", "https://assets.pinterest.com/js/pinmarklet.js?r=" + 99999999 * Math.random()), document.body.appendChild(t)
};
//]]>
</script>
   
    <!--End Brands-->

    

    <!-- 
     -->

