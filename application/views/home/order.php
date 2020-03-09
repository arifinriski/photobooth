    <div class="row">
      <br>
    </div>
        <div class="container">
          <div class="row">
                    <div class="col-md-6">
                    
                            
                </div>
            </div>
          </table>
        </div>
        
        <!-- <?php  ?> -->
        <form method="post" action="<?php echo base_url() ?>index/tambah_act" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <h3><b>Form Desain</b></h3> 
                      <div class="form-group">
                        <label>Customer</label>
                        <input type="hidden" name="inp[id_customer]" class="form-control" value="<?php echo $this->session->userdata('id_user');?>" readonly>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('nama_customer');?>" readonly>
                    </div>
                      <div class="form-group">
                        <label>Tema yang dipilih</label>
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
                        <input type="text" id="inp[tanggal_event]" name="inp[tanggal_event]" class="form-control datepicker" placeholder="Contoh: Masukkan tanggal event anda" > 
                    </div>
                    <div class="form-group">
                        <label>Lokasi Event</label>
                        <input type="text" id="inp[lokasi_event]" name="inp[lokasi_event]" class="form-control" placeholder="Contoh: Masukkan lokasi event anda" > 
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                
            </div>
            <!-- /.col-lg-6 (nested)-->
          </div>
        </div>
        </form>
    </div>
  </section>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <!-- <script type="text/javascript"> -->
    <!-- document.getElementById('btnsave').onclick(function(){ -->
      <!-- document.getElementById('datanama').value('loveyou'); -->
      <!-- alert('loveyour') -->
    <!-- }) -->

    <!-- // $('#btnsave').click(function(){ -->
      
    <!-- //  var arr = document.getElementById("#datnam").value(); -->
    <!-- //  alert(arr); -->
    <!-- //  console.log(arr); -->
    <!-- // }) -->
  </script>