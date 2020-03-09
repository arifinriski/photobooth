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
              Proses Perhitungan
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                              <h3><b>Data Rekomendasi Desain</b></h3> 
                              <br>Halaman ini untuk melakukan perhitungan/seleksi dengan metode SAW</br>
                              
                        <div>
                              <div class="col-md-12">
                                <div class="panel panel-default">
                                  <div class="panel-heading">

                            <div>
                            <table border='1'>
                              <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Table Kriteria</b></label>
                              </caption>
                              <tr>
                                <th>No</th>
                                <!-- <th>Simbol</th> -->
                                <th>Kriteria</th>
                                <th>Atribut</th>
                              </tr>
                              <?php
                              
                              $i=0;
                              foreach ($data_kriteria as $dk) {
                                ?>
                                <tr>
                                    <td class='right'><?php echo ++$i; ?></td>
                                    <!-- <td class='center'><?php //echo C{$i}; ?></td> -->
                                    <td><?php echo $dk->kriteria; ?></td>
                                    <td><?php echo $dk->nilai_atribut; ?></td>
                                  </tr>
                                  <?php
                                }
                              ?>
                            
                            </table>
                        </div>
                        <div>
                            <table border='1'>
                              <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Pembobotan Kriteria (W)</b></label>
                              </caption>
                              <tr>
                                <th>No</th>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                              </tr>
                              <?php
                              
                              $i=0;
                               $W=array();
                              foreach ($data_bobot_kriteria as $dbk) {
                                $W[]=$dbk->bobot;
                                ?>
                                <tr>
                                
                               <tr class='center'><td><?php echo ++$i; ?></td>
                                        <!-- <td>C{$i}</td> -->
                                    <td><?php echo $dbk->kriteria; ?></td>
                                    <td><?php echo $dbk->bobot; ?></td>
                                      </tr>
                                      <?php
                                    }
                                  ?>
                            </table>
                        </div>
                        <div>
                            <table border='1'>
                              <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Rating Kecocokan Alternatif Setiap Kriteria</b></label>
                              </caption>
                              <tr>
                                <th rowspan='2'>Alternatif</th>
                                <th colspan='5'>Kriteria</th>
                              </tr>
                              <tr>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                              </tr>
                              <?php
                              
                              foreach ($data_alternative as $da) {
                                ?>
                                <tr class='center'>
                                        <th>A<sub><?php echo $da->id_tema; ?></sub> <?php echo $da->nama; ?></th>
                                        <td><?php echo round($da->C1,1); ?></td>
                                        <td><?php echo round($da->C2,1); ?></td>
                                        <td><?php echo round($da->C3,1); ?></td>
                                        <td><?php echo round($da->C4,1); ?></td>
                                        <td><?php echo round($da->C5,1); ?></td>
                                      </tr>
                                      <?php
                              }
                            ?>
                            </table>
                        </div>
                     <!--  <div>
                            <table border='1'>
                             <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Matriks Keputusan (X)</b></label>
                              </caption>
                              <tr>
                                <th rowspan='2'>Alternatif</th>
                                <th colspan='5'>Kriteria</th>
                              </tr>
                              <tr>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th> 
                              </tr>
                              <?php
                            
                              $X=array(1=>array(),2=>array(),3=>array(),4=>array(),5=>array());
                              foreach($data_matriks as $dm){

                              array_push($X[1],round($dm->C1,2));
                              array_push($X[2],round($dm->C2,2));
                              array_push($X[3],round($dm->C3,2));
                              array_push($X[4],round($dm->C4,2));
                              array_push($X[5],round($dm->C5,2));
                              
                              echo "<tr class='center'>
                                      <th>A<sub>{$dm->id_tema}</sub> {$dm->nama}</th>
                                      <td>".round($dm->C1,2)."</td>
                                      <td>".round($dm->C2,2)."</td>
                                      <td>".round($dm->C3,2)."</td>
                                      <td>".round($dm->C4,2)."</td>
                                      <td>".round($dm->C5,2)."</td>
                                      </tr>\n";
                                
                              }
                            ?>
                            </table>
                        </div> -->
                        <div>
                            <table border='1'>
                              <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Matriks Normalisasi</b></label>
                              </caption>
                              <tr>
                                <th rowspan='2'>Alternatif</th>
                                <th colspan='5'>Kriteria</th>
                              </tr>
                              <tr>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                              </tr>
                              <?php
                              $sd = array();
                              foreach($data_matriks as $dm){
                              //MEMBUAT ARRAY UNTUK DIPROSES
                              $dt1[] = array(floatval($dm->C1));
                              $dt2[] = array(floatval($dm->C2));
                              $dt3[] = array(floatval($dm->C3));
                              $dt4[] = array(floatval($dm->C4));
                              $dt5[] = array(floatval($dm->C5));
                              }
                              foreach ($data_matriks as $matrs){
                                //MELEPAS ARRAY UNTUK AMBIL NILAI MIN DAN MAX
                                $normal1 = implode(min($dt1));
                                $normal2 = implode(max($dt2));
                                $normal3 = implode(min($dt3));
                                $normal4 = implode(min($dt4));
                                $normal5 = implode(max($dt5));
                                
                                //MENGHITUNG NILAI NORMALISASI PER KRITERIA
                                $pros1 = floatval($normal1/$matrs->C1);
                                $pros2 = floatval($matrs->C2/$normal2);
                                $pros3 = floatval($normal3/$matrs->C3);
                                $pros4 = floatval($normal4/$matrs->C4);
                                $pros5 = floatval($matrs->C5/$normal5);
                                
                                //MEMBUAT ARRAY UNTUK PEMANGGILAN DATA
                                $ps1 = array($pros1);
                                $ps2 = array($pros2);
                                $ps3 = array($pros3);
                                $ps4 = array($pros4);
                                $ps5 = array($pros5);
                                echo "<tr class='center'>
                                      <th>A<sub>{$matrs->id_tema}</sub> {$matrs->nama}</th>
                                      <td>".round($pros1,2)."</td>
                                      <td>".round($pros2,2)."</td>
                                      <td>".round($pros3,2)."</td>
                                      <td>".round($pros4,2)."</td>
                                      <td>".round($pros5,2)."</td>
                                    </tr>\n";
                               
                                    //MENGHITUNG NILAI PREFERENSI
                                    foreach ($data_normalisasi as $value){ 
                                     $sd2[] = array(
                                      "hitung" => round(($ps1[0]*$value['B1'])+($ps2[0]*$value['B2'])+($ps3[0]*$value['B3'])+($ps4[0]*$value['B4'])+($ps5[0]*$value['B5']),2),
                                      "nama" => ($matrs->nama)
                                      );
                                    }
                               
                              }
                            ?>
                            </table>
                        </div>
                        <div>
                            <table border='1'>
                              <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Nilai Preferensi</b></label>
                              </caption>
                              <tr>
                                <th>No</th>
                                <th>Alternatif</th>
                                <th>Hasil</th>
                              </tr>
                              <?php
                              $no=1;
                              //MEMANGGIL NILAI PREFERENSI
                              foreach ($sd2 as $key => $fds) {
                                echo "<tr class='center'>
                                       <th>$no</th>
                                       <th>".$fds["nama"]."</th>
                                       
                                       <th>".$fds["hitung"]."</th>
                                      </tr>\n";
                                $no++;      
                              }
                            ?>
                            </table>
                        </div>
                        <div>
                            <table border='1'>
                              <table class="table table-striped">
                              <caption>
                                <label for="input"><b>Hasil Perangkingan</b></label>
                              </caption>
                              <tr>
                                <th>No</th>
                                <th>Alternatif</th>
                                <th>Hasil</th>
                              </tr>
                              <?php
                              $no=0;
                              
                              //MEMBUAT PENGURUTAN DARI NILAI PALING BESAR 
                              foreach ($sd2 as $key => $urutan) {
                                 $ars[] = $urutan;
                                 rsort($ars);
                               }
                               
                                //MEMANGGIL NILAI HASIL SORTING
                               foreach ($ars as $key => $pergi) {
                              
                                  # code...
                                  echo "<tr class='center'>
                                        <th>".(++$no)."</th>
                                        <th>".$pergi["nama"]."</th>
                                        <th>".$pergi["hitung"]."</th>
                                      </tr>";
                                
                                } 
                              
                            ?>
                            </table>
                        </div> 
                </div>
            </div>
          </table>
        </div>
        <div class="col-lg-12">
        <h3 class="page-header"></h3>
        <form method="post" action="">
          <div class="form-group">
            <?php 
              foreach ($ars as $key => $val){
                echo "1";
                echo '<input type="text" id="datnam" name="datnam" class="datnam" value='.$val["nama"].'>';
                echo '<input type="text" class="dathit" id="dathit" name="dathit[]" value='.$val["hitung"].'>';  
              }
            ?>
          </div>
          <div class="form-group">
            <input type="text" name="datanama" id="datanama">
          </div>
          <div class="form-group">
            <input type="submit" name="btnsave" id="btnsave" onclick="btnsave();">
          </div>
        </form>
        </div>
        <!-- <?php } ?> -->
            
                            <!-- <form role="form" action="tambah_act" method="post">
                              <div class="form-group">
                                <label>Customer</label>
                                <input type="text" name="inp[id_customer]" class="form-control" value="<?php echo $this->session->userdata('id_customer');?>" readonly>
                            </div>
                             <div class="form-group">
                                <label>Tema setelah direkomendasi</label>
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
                        </form> -->
                    </div>
                    <!-- /.col-lg-6 (nested)-->
                </div>
          </div>
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