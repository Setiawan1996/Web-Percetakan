   <section class="bg-light">
    <?php foreach($detail as $dt) :  ?>
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                     <h1 class="mb-4" style="color: #59ab6e"><?php echo $dt->judul_artikel ?></h1> 
                 </div>
            </div>
  <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="container" >
                         <div class="container" >
                         <div class="container" >
                         <img  src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">

                            <p class="card-text mt-4"><?php echo $dt->keterangan_lengkap?>
                            <br>
                            <p class="card-text"><?php echo $dt->keterangan_lengkap_2?> 
                            <br>
                            <p class="card-text"><?php echo $dt->keterangan_lengkap_3?>
                            <br>
                            <p class="card-text"><?php echo $dt->keterangan_lengkap_4?>
                               <!--  style="text-align: justify; margin-top: 20px;"  -->
                            

                        </div>

             <?php endforeach ; ?>

              
    </section>



 

  