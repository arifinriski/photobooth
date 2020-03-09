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
	            Data Tema Desain
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	<p class="text-right"><button type="button" class="btn btn-outline btn-default" onclick="location.href='<?=$tambah?>'"><i class="fa fa-plus"></i> TAMBAH</button></p>
	            <div class="table-responsive">
	                <table class="table table-striped table-bordered table-hover">
	                    <thead>
	                        <tr>
	                        	<th style="text-align: center;">No</th>
	                        	<th style="text-align: center;">Gambar</th>
	                        	<th style="text-align: center;">Tema Desain</th>
	                        	<th style="text-align: center;">Harga</th>
	                        	<th style="text-align: center;">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $no = 1; 
	                    	foreach($data_tema_desain as $val){ ?>
	                        <tr>
	                            <td style="text-align: center;"><?=$no?></td>
	                            <td align="center"><a href="#" id=<?= 'pop'.$val['id_tema'];?>><img onclick="onClickImage(<?= $val['id_tema'];?>)" id=<?= 'imageresource'.$val['id_tema']?> src="<?php echo base_url().'assets/template/img/'.$val['gambar']; ?>" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></a></td>
	                            <td style="text-align: center;"><?=$val['nama']?></td>
	                            <td style="text-align: center;"><?= 'Rp.' . number_format($val['harga'], 2, ',', '.')?></td>
	                           	<td style="text-align: center;"><button type="button" class="btn btn-default btn-xs" onclick="location.href='<?=base_url();?>admin/data_tema_desain/edit/<?=$val['id_tema']?>'"><i class="fa fa-edit"></i> EDIT</button>
	                            	<a href="<?=$delete?><?=$val['id_tema']?>"><button type="button" class="btn btn-default btn-xs" onclick="return confirm('Apakah kamu ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> DELETE</button></a>
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