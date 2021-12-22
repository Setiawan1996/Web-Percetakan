<!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">


                <div class="col-md-3 pt-5">
                    <a href="<?php echo base_url('welcome') ?>"><img style="margin-left: 10px" width="150" src="<?php echo base_url() ?>/assets/prame2.png"></a>
                    <br><br><br><br><font class="text-light text-decoration-none" size="2">Copyright &copy; <?php echo date('Y'); ?> Pramecreative</font>
                </div>

                <div class="col-md-3 pt-5">
                    <h2 class=" h3 text-light border-bottom pb-3 border-light">Ikuti Kami</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        
                        <li>
                             <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/pramecreative"><i class="fab fa-facebook-f fa-lg fa-fw mt-3"></i></a>
                              <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/pramecreative/"><i style="margin-left: 10px" class="fab fa-instagram fa-lg fa-fw"></i></a>
                               <a class="text-light text-decoration-none" target="_blank" href="https://youtube.com/"><i style="margin-left: 20px"  class="fab fa-youtube fa-lg fa-fw mb-3"></i></a>
                        </li>
                       
                    </ul>
                </div>



                <div class="col-md-3 pt-5">
                    <h2 class=" h3 text-light border-bottom pb-3 border-light">Produk Kami</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class=" text-decoration-none " href="<?php echo base_url('customer/kategori2/kemasan') ?>">Kemasan</a></li>
                            <li style="padding-top: 1px"><a class=" text-decoration-none" href="<?php echo base_url('customer/kategori2/buku') ?>">Buku</a></li>
                            <li style="padding-top: 1px"><a class=" text-decoration-none" href="<?php echo base_url('customer/kategori2/promosi') ?>">Promosi</a></li>
                            <li style="padding-top: 1px"><a class=" text-decoration-none" href="<?php echo base_url('customer/kategori2/textile') ?>">Textile</a></li>
                            <li style="padding-top: 1px"><a class=" text-decoration-none" href="<?php echo base_url('customer/kategori2/banner') ?>">Banner Display</a></li>
                            <li style="padding-top: 1px"><a class=" text-decoration-none" href="<?php echo base_url('customer/kategori2/kantor') ?>">Perlengkapan Kantor</a></li>
                            <li style="padding-top: 1px"><a class=" text-decoration-none" href="<?php echo base_url('customer/kategori2/souvenir') ?>">Souvenir</a></li>
                    </ul>
                </div>

                <div class="col-md-3 pt-5">
                    <h2 class=" h3 text-light border-bottom pb-3 border-light">Metode Pembayaran</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" ><img width="50" src="<?php echo base_url() ?>/assets/ovo.jpg"></a></li>
                        <li><a class="text-decoration-none" ><img width="50" src="<?php echo base_url() ?>/assets/mandiri.jpg"></a></li>
                        <li><a class="text-decoration-none" ><img width="50" src="<?php echo base_url() ?>/assets/bca.jpg"></a></li>
                        <li><a class="text-decoration-none" ><img width="50" src="<?php echo base_url() ?>/assets/bsi.jpeg"></a></li>
                    </ul>
                </div>

            </div>

            
        </div>

        <!-- <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Pramecreative 
                            <a rel="sponsored" href="https://templatemo.com/" target="_blank"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/assets_shop/assets/js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/assets_shop/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/assets_shop/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-latest.min.js"></script> -->
    <script src="<?php echo base_url() ?>alert/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/assets_shop/assets/js/templatemo.js"></script>
    <script src="<?php echo base_url() ?>/assets/assets_shop/assets/js/custom.js"></script>
    <!-- <script src="<?php echo base_url() ?>/assets/assets_shop/assets/js/loadmore.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>/assets/assets_shop/assets/js/script.js"></script>

    <script type="text/javascript">
        $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    });
    </script> -->
   <!--  <script >
        $(document).ready(function(){
            var count = 0;
            var limit=1;
            var test="kemasan/load";
            $("button").click(function(){
                limit=limit + 4;
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

    </script> -->
    <script>
          $(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
    </script>
    <!-- End Script -->
</body>


<!-- Mirrored from technext.github.io/zay-shop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Sep 2021 02:25:20 GMT -->
</html>