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
                Data Kriteria (Edit)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="../edit_act/<?=$param?>" method="post">
                            <div class="form-group">
                                <label>Kriteria</label>
                                <input type="text" name="inp[kriteria]" class="form-control" placeholder="Contoh: Harga" value="<?=$val['kriteria']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Nilai Atribut</label>
                                <input type="text" name="inp[nilai_atribut]" class="form-control" placeholder="Contoh: Harga" value="<?=$val['nilai_atribut']?>" required>
                            </div>
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