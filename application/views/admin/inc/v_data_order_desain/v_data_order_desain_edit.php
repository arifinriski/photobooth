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
                Data Order Desain (Edit)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="../edit_act/<?=$param?>" method="post">
                            <div class="form-group">
                              <label for="input">Id Customer</label>
                                <select class="form-control" placeholder="inp[id_customer]" name="inp[id_customer]" aria-describedby="sizing-addon2"required>
                                            <?php 
                                              $get_data_select = $this->db->query('SELECT * from customer')->result_array();
                                              foreach ($get_data_select as $d_select) {
                                                if ($val['id_customer'] == $d_select['id_customer']) {
                                                  $selected = 'selected';
                                                }else{
                                                  $selected = '';
                                                }
                                            ?>
                                            <option value="<?php echo $d_select['id_customer']?>" <?php echo $selected;?>><?php echo $d_select['username']?></option>
                                            <?php } ?>
                                </select>                  
                            </div>
                            <div class="form-group">
                              <label for="input">Tema Desain</label>
                                <select class="form-control" placeholder="inp[id_tema]" name="inp[id_tema]" aria-describedby="sizing-addon2"required>
                                            <?php 
                                              $get_data_select = $this->db->query('SELECT * from tema_desain')->result_array();
                                              foreach ($get_data_select as $d_select) {
                                                if ($val['id_tema'] == $d_select['id_tema']) {
                                                  $selected = 'selected';
                                                }else{
                                                  $selected = '';
                                                }
                                            ?>
                                            <option value="<?php echo $d_select['id_tema']?>" <?php echo $selected;?>><?php echo $d_select['nama']?></option>
                                            <?php } ?>
                                </select>
                                                            
                            </div>
                            <div class="form-group">
                              <label for="input">Jenis Desain</label>
                              <select class="form-control" placeholder="inp[id_jenis]" name="inp[id_jenis]" aria-describedby="sizing-addon2"required>
                                            <?php 
                                              $get_data_select = $this->db->query('SELECT * from jenis_desain')->result_array();
                                              foreach ($get_data_select as $d_select) {
                                                if ($val['id_jenis'] == $d_select['id_jenis']) {
                                                  $selected = 'selected';
                                                }else{
                                                  $selected = '';
                                                }
                                            ?>
                                            <option value="<?php echo $d_select['id_jenis']?>" <?php echo $selected;?>><?php echo $d_select['nama']?></option>
                                            <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ukuran</label>
                                <select class="form-control" placeholder="inp[id_ukuran]" name="inp[id_ukuran]" aria-describedby="sizing-addon2"required>
                                            <?php 
                                              $get_data_select = $this->db->query('SELECT * from ukuran')->result_array();
                                              foreach ($get_data_select as $d_select) {
                                                if ($val['id_ukuran'] == $d_select['id_ukuran']) {
                                                  $selected = 'selected';
                                                }else{
                                                  $selected = '';
                                                }
                                            ?>
                                            <option value="<?php echo $d_select['id_ukuran']?>" <?php echo $selected;?>><?php echo $d_select['nama']?></option>
                                            <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="inp[deskripsi]" class="form-control" placeholder="Contoh: Tambahkan deskripsi" value="<?=$val['deskripsi']?>"required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Event</label>
                                <input type="date" name="inp[tanggal_event]" class="form-control" placeholder="Contoh: Masukkan tanggal event anda" value="<?=$val['tanggal_event']?>"required>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Event</label>
                                <input type="text" name="inp[lokasi_event]" class="form-control" placeholder="Contoh: Masukkan lokasi event anda" value="<?=$val['lokasi_event']?>"required>
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