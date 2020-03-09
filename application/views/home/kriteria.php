  <div class="classes-section spad">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div id="mobile-menu-wrap"></div>      
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="form-group">                  
                        <div>
                            <table border='1'>
                              <caption>
                                Tabel Kriteria C<sub>i</sub>
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
                  </div>
            </div>
        </div>
    </div>

  </section>