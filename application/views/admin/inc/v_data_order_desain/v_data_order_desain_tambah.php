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
                Data Order Desain (Tambah)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="tambah_act" method="post">
                            <div class="form-group">
                              <label for="input">Nama Customer</label>
                              <select id="inp[id_customer]" name="inp[id_customer]" class="form-control">
                                <option value="">-- Pilih Customer --</option>
                                    <?php 
                                      $get_data_select = $this->db->query('SELECT * from customer')->result_array();
                                      foreach ($get_data_select as $d_select) {
                                    ?>
                                    <option value="<?php echo $d_select['id_customer']?>"><?php echo $d_select['username'] ?></option>
                                    <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="input">Tema Desain</label>
                              <select id="inp[id_tema]" name="inp[id_tema]" class="form-control">
                                <option value="">-- Pilih Tema --</option>
                                    <?php 
                                      $get_data_select = $this->db->query('SELECT * from tema_desain')->result_array();
                                      foreach ($get_data_select as $d_select) {
                                    ?>
                                    <option value="<?php echo $d_select['id_tema']?>"><?php echo $d_select['nama']?></option>
                                    <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="input">Jenis Desain</label>
                              <select id="inp[id_jenis]" name="inp[id_jenis]" class="form-control">
                                <option value="">-- Pilih Jenis --</option>
                                    <?php 
                                      $get_data_select = $this->db->query('SELECT * from jenis_desain')->result_array();
                                      foreach ($get_data_select as $d_select) {
                                    ?>
                                    <option value="<?php echo $d_select['id_jenis']?>"><?php echo $d_select['nama']?></option>
                                    <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="input">Ukuran</label>
                              <select id="inp[id_ukuran]" name="inp[id_ukuran]" class="form-control">
                                <option value="">-- Pilih Ukuran --</option>
                                    <?php 
                                      $get_data_select = $this->db->query('SELECT * from ukuran')->result_array();
                                      foreach ($get_data_select as $d_select) {
                                    ?>
                                    <option value="<?php echo $d_select['id_ukuran']?>"><?php echo $d_select['nama']?></option>
                                    <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" id="inp[deskripsi]" name="inp[deskripsi]" class="form-control" placeholder="Contoh: Masukkan deskripsi anda" > 
                            </div>
                            <div class="form-group">
                                <label>Tanggal Event</label>
                                <input type="date" id="inp[tanggal_event]" name="inp[tanggal_event]" class="form-control" placeholder="Contoh: Masukkan tanggal event anda" > 
                            </div>
                            <div class="form-group">
                                <label>Lokasi Event</label>
                                <input type="text" id="inp[lokasi_event]" name="inp[lokasi_event]" class="form-control" placeholder="Contoh: Masukkan lokasi event anda" > 
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