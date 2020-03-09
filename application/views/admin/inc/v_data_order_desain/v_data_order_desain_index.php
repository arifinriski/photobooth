<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?=$title?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            Data Order Desain
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	<p class="text-right"><button type="button" class="btn btn-info btn-sm" onclick="location.href='<?=$tambah?>'"><i class="fa fa-plus"></i> TAMBAH</button></p>
	            <div class="table-responsive">
	                <table class="table table-striped table-bordered table-hover" id="datatable">
	                    <thead>
	                        <th style="text-align: center;">No</th>
	                        	<th style="text-align: center;">Nama Customer</th>
	                        	<th style="text-align: center;">Tema Desain</th>
	                        	<th style="text-align: center;">Jenis Desain</th>
	                        	<th style="text-align: center;">Ukuran</th>
	                        	<th style="text-align: center;">Deskripsi</th>
	                        	<th style="text-align: center;">Tanggal Event</th>
	                        	<th style="text-align: center;">Lokasi Event</th>
	                        	<th style="text-align: center;">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $no = 1; 
	                    	foreach($data_order_desain as $val){ ?>
	                        <tr>
	                            <td style="text-align: center;"><?=$no?></td>
	                            <td style="text-align: center;"><?=$val['nama_customer']?></td>
	                            <td style="text-align: center;"><?=$val['tema_desain']?></td>
	                            <td style="text-align: center;"><?=$val['jenis_desain']?></td>
	                            <td style="text-align: center;"><?=$val['ukuran']?></td>
	                            <td style="text-align: center;"><?=$val['deskripsi']?></td>
	                            <td style="text-align: center;"><?=$val['tanggal_event']?></td>
	                            <td style="text-align: center;"><?=$val['lokasi_event']?></td>
	                           	<td style="text-align: center;">
								   <button type="button" class="btn btn-warning btn-xs" onclick="location.href='<?=base_url();?>admin/data_order_desain/edit/<?=$val['id']?>'"><i class="fa fa-edit"></i> EDIT</button><br>
								   <a href="<?=$delete?><?=$val['id']?>"><button type="button" class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> DELETE</button></a><br>
								   <button type="button" class="btn btn-success btn-xs" onclick="location.href='<?=base_url();?>admin/data_order_desain/laporan/<?=$val['id']?>'"><i class="fa fa-list-alt"></i> Laporan</button>
	                            </td>
	                        </tr>
	                        <?php $no++; } ?>
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>

<div id="myModal" class="modal fade" id="gardenImage" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                	<center>
                    <img id="myImage" class="img-responsive" src="" >
                </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger center-block" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
<!-- /.row -->