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
                Data Tema Desain (Edit)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="../edit_act/<?=$param?>" method="post">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="inp[gambar]" class="form-control" placeholder="Contoh:" value="<?=$val['gambar']?>" required>
                               <td align="center"><img src="<?php echo base_url().'assets/template/img/'.$val['gambar']; ?>" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="inp[harga]" class="form-control" placeholder="Contoh: Rp 1.500.000" value="<?php echo $val['harga'] ?>"required>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested)-->
                </div>
                <!-- /.row (nested)-->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->