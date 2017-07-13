<div id="page-wrapper">
                <div class="container-fluid" id="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Laporan Pendapatan</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group" style="padding-bottom: 40pt">
                              <label for="inputagama" class="col-sm-1 control-label"></label>
                              <div class="col-sm-5">
                                  <select class="form-control">
                                      <option value="#">-Periode-</option>
                                      <option value="Kubu Raya">Perminggu</option>
                                      <option value="Pontianak">Perbulan</option>
                                      
                                  </select>
                              </div>
                            </div>
                            <form class="form-horizontal" role="form" action="tambahkurir.html">
                            
                    <div class="form-group">
                      <label for="data_transaksi" class="col-sm-1 control-label"></label>
                          <div class="col-sm-12 ">
                            <table class="table table-striped" width="480" border="1" style="background-color: white">
                              <thead style="text-align: center">
                                  <tr>
                                    <td>Tahun/Bulan</td>
                                    <td>Cabang</td>
                                    <td>Total Pendapatan</td>
                                  </tr>
                              </thead>
                              <tbody style="font-size: 9pt">
                               <?php
                                    $i=1;
                                    foreach ($isi_laporan as $lp) { ?>
                                        <tr>
                                        
                                            <td><?= $lp['tgl_transaksi'] ?></td>
                                            <td><?= $lp['id_cabangpenerima'] ?></td>
                                            <td><?= $lp['total_biaya'] ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                   } ?>
                                
                                <tr>
                                  <td colspan="2" style="text-align: center">Total Biaya</td>
                                  <td></td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                    </div>
                  </form>
                  <div style="padding-left: 480pt">
                    <a href="#" id="cetak" class="btn btn-primary btn-sm">Cetak</a>
                  </div>
                  
                        </div>
                        
                    </div>
                </div>
            </div>