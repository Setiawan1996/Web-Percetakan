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
                    <div  class="col-md-6 pb-4 text-right">
                         <?php echo form_open('customer/produk2'); ?>  
                <div class="input-group mb-2">     
                    <input  type="text" class="form-control" id="inputPassword2" name="key" placeholder="Cari Produk" autocomplete="off">
                    <button type="submit" class="input-group-text bg-success text-light" value="search">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                    
                </div>
                <?php echo form_close(); ?>
                        <div class="d-flex">

                         
                        </div>
                    </div>
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
                                        <!-- <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li> -->
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo base_url('customer/data_produk/detail_produk/'.$mb->id_mobil) ?>"><i class="far fa-eye"></i></a></li>
                                        
                                        <?php echo anchor('customer/produk/tambah_keranjang/'.$mb->id_mobil,'<button class="btn btn-success  text-white mt-2 swalDefaultSuccess"><i class="fas fa-cart-plus"></i></button>') ?>
                                        
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
          <div class="row">
                <div class="col">
                    <?php echo $pagination; ?>
                </div>  
            </div>
            
               
   
            </div>

        </div>
    </div>
    <script >
        $(document).ready(function(){
            var count = 0;
            var limit=2;
            var test="produk2/load";
            $("button").click(function(){
                limit=limit + 2;
            $("#page").load(test,{
                tambah:limit                
            
            }); 

            if(limit == test.length){
                count = 0;
                $("#btn").hide();
                $("#akhir").append("anda telah mencapai data terakhir");
                return;
            }

            });
            
        });
    </script>