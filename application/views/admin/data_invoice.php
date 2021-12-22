<div class="main-content">
        <section class="section">
          <div style="background-color: #59ab6e !important;" class="section-header">
            <h1 style="color: white">Data Invoice</h1>
          </div>
         
          <?php echo $this->session->flashdata('pesan') ?>

          <table  id="data-table"  class="table table-hover table-striped table-bordered">
          	<thead>
               <tr>
          		<th>No</th>
          		<th>Nama Customer</th>
          		<th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Batas Pembayaran</th>
          		<th>Action</th>

          	</tr>
               </thead>
          	<?php 
          	$no=1;
          	foreach ($invoice as $inv):?>

               <tbody>
          	<tr>
          		<td><?php echo $no++ ?></td>
          		<td><?php echo $inv->nama ?></td>
                    <td><?php echo $inv->alamat ?></td>
                     <td><?php echo $inv->no_telepon ?></td>
                    <td><?php echo $inv->tanggal_pesan ?></td>
                    <td><?php echo $inv->batas_bayar ?></td>
          		
                    <td>
                          <a href="<?php echo base_url('admin/data_invoice/detail_invoice/').$inv->id_invoice ?>"class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                         <a href="<?php echo base_url('admin/data_invoice/delete_invoice/').$inv->id_invoice ?>"class="btn btn-sm btn-danger"onclick="return confirm('Yakin ingin hapus')"><i class="fas fa-trash"></i></a>
                        
                    </td>
          	</tr>
               </tbody>
          	<?php endforeach ; ?>	
          </table>