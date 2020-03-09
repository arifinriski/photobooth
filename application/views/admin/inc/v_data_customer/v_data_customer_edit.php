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
                Data Customer (Edit)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="../edit_act/<?=$param?>" method="post">
                        
                            <div class="form-group">
                                <label>Nama Customer</label>
                                <input type="text" name="inp[nama_customer]" class="form-control" placeholder="Contoh: Nino" value="<?=$val['nama_customer']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="inp[email]" class="form-control" placeholder="Contoh: ninorzssaptr484@gmail.com" value="<?=$val['email']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" name="inp[telepon]" class="form-control" placeholder="Contoh: 089667323726" value="<?=$val['telepon']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="inp[username]" class="form-control" placeholder="Masukkan username anda" value="<?=$val['username']?>" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda" value="<?=$val['password']?>" required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="inp[email]" class="form-control" placeholder="Contoh: ninorzssaptr484@gmail.com" value="<?=$val['email']?>" required>
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