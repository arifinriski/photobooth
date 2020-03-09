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
                Data User (Edit)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="../edit_act/<?=$param?>" method="post">
                            <!-- <div class="form-group">
                                <label>Id User</label>
                                <input type="number" name="inp[id_user]" class="form-control" placeholder="Contoh: 001" required>
                            </div> -->
                            <div class="form-group">
                                <label>Nama User</label>
                                <input type="text" name="inp[nama]" class="form-control" placeholder="Contoh: Agus Pacul" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="inp[email]" class="form-control" placeholder="Contoh: ninorzssaptr484@gmail.com" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="inp[username]" class="form-control" placeholder="Masukkan username anda" value="" required>
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" name="inp[no_telp]" class="form-control" placeholder="Contoh: 089667323726" value="" required>
                            </div>
                            <div class="form-group">
                              <label for="input">Status</label>
                                <select class="form-control" placeholder="inp[status]" name="inp[status]" aria-describedby="sizing-addon2"required>
                                            <?php 
                                              $get_data_select = $this->db->query('SELECT * from user')->result_array();
                                              foreach ($get_data_select as $d_select) {
                                                if ($val['status'] == $d_select['status']) {
                                                  $selected = 'selected';
                                                }else{
                                                  $selected = '';
                                                }
                                            ?>
                                            <option value="<?php echo $d_select['status']?>" <?php echo $selected;?>><?php echo $d_select['status']?></option>
                                            <?php } ?>
                                </select>                           
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