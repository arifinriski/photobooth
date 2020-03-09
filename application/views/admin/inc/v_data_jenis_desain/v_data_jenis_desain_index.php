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
	            Data Jenis Desain
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	<p class="text-right"><button type="button" class="btn btn-outline btn-default" onclick="location.href='<?=$tambah?>'"><i class="fa fa-plus"></i> TAMBAH</button></p>
	            <div class="table-responsive">
	                <table class="table table-striped table-bordered table-hover">
	                    <thead>
	                        <tr>
	                        	<th style="text-align: center;">No</th>
	                        	<th style="text-align: center;">Nama</th>
	                        	<th style="text-align: center;">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $no = 1; 
	                    	foreach($data_jenis_desain as $val){ ?>
	                        <tr>
	                            <td style="text-align: center;"><?=$no?></td>
	                            <td style="text-align: center;"><?=$val['nama']?></td>
	                            <td style="text-align: center;"><button type="button" class="btn btn-default btn-xs" onclick="location.href='<?=base_url();?>admin/data_jenis_desain/edit/<?=$val['id_jenis']?>'"><i class="fa fa-edit"></i> EDIT</button>
	                            	<a href="<?=$delete?><?=$val['id_jenis']?>"><button type="button" class="btn btn-default btn-xs" onclick="return confirm('Apakah kamu ingin menghapus data ini?')"><i class="fa fa-trash-o"></i> DELETE</button></a>
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