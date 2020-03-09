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
	            Data Customer
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	<p class="text-right"><button type="button" class="btn btn-outline btn-default" onclick="location.href='<?=$tambah?>'"><i class="fa fa-plus"></i> TAMBAH</button></p>
	            <div class="table-responsive-lg">
	                <table class="table table-striped table-bordered table-hover">
	                    <thead>
	                        <tr>
	                        	<th style="text-align: center;">No</th>
	                        	<th style="text-align: center;">Nama Customer</th>
	                        	<th style="text-align: center;">Email</th>
	                        	<th style="text-align: center;">Telepon</th>
	                        	<th style="text-align: center;">Username</th>
	                        	<th style="text-align: center;">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $no = 1; 
	                    	foreach($data_customer as $val){ ?>
	                        <tr>
	                            <td style="text-align: center;"><?=$no?></td>
	                            <td style="text-align: center;"><?=$val['nama_customer']?></td>
	                            <td style="text-align: center;"><?=$val['email']?></td>
	                            <td style="text-align: center;"><?=$val['telepon']?></td>
	                            <td style="text-align: center;"><?=$val['username']?></td>
	                            <td style="text-align: center;"><button type="button" class="btn btn-default btn-xs" onclick="location.href='<?=base_url();?>admin/data_customer/edit/<?=$val['id_customer']?>'"><i class="fa fa-edit"></i> EDIT</button>
	                            	<a href="<?=$delete?><?=$val['id_customer']?>"><button type="button" class="btn btn-default btn-xs" onclick="return confirm('Apakah kamu ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> DELETE</button></a>
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
<!-- /.row -->