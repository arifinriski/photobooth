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
	            Data Kriteria
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped table-bordered table-hover">
	                    <thead>
	                        <tr>
	                        	<th style="text-align: center;">No</th>
	                        	<th style="text-align: center;">Kriteria</th>
	                        	<th style="text-align: center;">Nilai Atribut</th>
	                        	<th style="text-align: center;">Bobot</th>
	                        	<th style="text-align: center;">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $no = 1; 
	                    	foreach($data_kriteria as $val){ ?>
	                        <tr>
	                            <td style="text-align: center;"><?=$no?></td>
	                            <td style="text-align: center;"><?=$val['kriteria']?></td>
	                            <td style="text-align: center;"><?=$val['nilai_atribut']?></td>
	                            <td style="text-align: center;"><?=$val['bobot']?></td>
	                            <td style="text-align: center;"><button type="button" class="btn btn-default btn-xs" onclick="location.href='<?=base_url();?>admin/data_kriteria/edit/<?=$val['id_kriteria']?>'"><i class="fa fa-edit"></i> EDIT</button>
	                            	<a href="<?=$delete?><?=$val['id_kriteria']?>"><button type="button" class="btn btn-default btn-xs" onclick="return confirm('Apakah kamu ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> DELETE</button></a>
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