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
	            Data Proses Rekomendasi
	        </div>
	        <div class="panel-body">
	        	<div class="table-responsive">
	        		<div class="table table-striped table-bordered table-hover">
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
                              	echo "<tr class='center'>
                                      <th>A<sub>{$da->id_tema}</sub> {$da->nama}</th>
                                      <td>".round($da->C1,2)."</td>
                                      <td>".round($da->C2,2)."</td>
                                      <td>".round($da->C3,2)."</td>
                                      <td>".round($da->C4,2)."</td>
                                      <td>".round($da->C5,2)."</td>
                                    </tr>\n";
                                }
                                ?>
                        </table>
                    </div>
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
                          
                            <form method="post" action="#" enctype="multipart/form-data">
                            	<input name="proses_rekomendasi" type="submit" value="Simpan" class="ok2"/>
                            	<form method="post" action="#" enctype="multipart/form-data">
                            </form>
