<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Invoice</h1>
          </div>
         
          <?php echo $this->session->flashdata('pesan') ?>

          <table  id="data-table"  class="table table-hover table-striped table-bordered">
          	<thead>
               <tr>
          		<th>No</th>
          		<th>Nama Produk</th>
          		<th>Jumlah Pesanan</th>
               <th>Harga Satuan</th>
              <th>Sub Total</th>
 
          	</tr>
               </thead>
          	<?php 
          	$no=1;
            $total=0;
          	foreach ($pesanan as $psn):
              $subtotal = $psn->jumlah * $psn->harga;
              $total += $subtotal;
              ?>

               <tbody>
          	<tr>
          		<td><?php echo $no++ ?></td>
          		<td><?php echo $psn->produk ?></td>
                  
                     <td><?php echo $psn->jumlah ?></td>
                    <td>Rp. <?php echo number_format($psn->harga,0,',','.')  ?></td>
                    <td>Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
          	</tr>

               </tbody>
          	<?php endforeach ; ?>	
            <td colspan="4" align="right"><b>Grand Total</b></td>
            <td align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
          </table>