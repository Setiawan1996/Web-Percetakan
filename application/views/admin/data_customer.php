<div class="main-content">
        <section class="section">
          <div style="background-color: #59ab6e !important; "class="section-header">
            <h1 style="color: white">Data Customer</h1>
          </div>
          <!-- <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Customer</a> -->
          <?php echo $this->session->flashdata('pesan') ?>

          <table  id="data-table"  class="table table-hover table-striped table-bordered">
          	<thead>
               <tr>
          		<th>No</th>
          		<th>Nama</th>
          		<th>Alamat</th>
                    <th>No.Telepon</th>
          		<th>Action</th>

          	</tr>
               </thead>
          	<?php 
          	$no=1;
          	foreach($customer as $cs):?>
               <tbody>
          	<tr>
          		<td><?php echo $no++ ?></td>
          		<td><?php echo $cs->nama?></td>
                    <td><?php echo $cs->alamat ?></td>
                    <td><?php echo $cs->no_telepon ?></td>
          		
                    <td>
                         <!--  <a href="<?php echo base_url('admin/data_customer/detail_customer/').$cs->id_customer ?>"class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a> -->
                         <a href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer ?>"class="btn btn-sm btn-danger"onclick="return confirm('Yakin ingin hapus')"><i class="fas fa-trash"></i></a>
                        <!--  <a href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer ?>"class="btn btn-sm btn-primary" ><i class="fas fa-edit"></i></a> -->
                    </td>
          	</tr>
               </tbody>
          	<?php endforeach ; ?>	
          </table>