<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= $title ?></h1>
    </div>
    <!-- /.col-lg-12 -->  
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="" id="FormLaporan">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row justify-content-center">
                        <div class="card bg-danger" style="width: 34rem;" align="center">
                            <div class="card-body text-light">
                                <form method="" action="">
                                    <select name="" id="bulan">
                                        <option value="0">Show All</option>
                                        <?php foreach ($bulan as $key => $row): ?>
                                               <option value="<?php echo $row->id ?>"><?php echo $row->nama ?></option>
                                        <?php endforeach ?>   
                                    </select>
                                   <!--  <div class="form-group col-sm text:black">
                                        <label for="tipe">Pilih Tipe</label>
                                        <select name="tipe" id="tipe" class="form-control" required>
                                            <option value="">--Pilih Tipe--</option>
                                            <option value="0">Tampilkan Semua</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group col-sm">
                                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-9">
                                
                            </div>
                        

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->