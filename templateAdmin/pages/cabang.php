<div id="page-wrapper">
                <div class="container-fluid" id="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cabang Ekspedisi</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group" style="padding-left: 380pt">
                                <div class="col-sm-offset-2 col-sm-10">
                                 <a href="menambah_cabang.php"> <button type="Sumbit" class="btn btn-default">Tambah</button></a>
                                </div>
                            </div>
                            </div>
                            <form class="form-horizontal" role="form" >
                            
                    <div class="form-group">
                      <label for="data_transaksi" class="col-sm-1 control-label"></label>
                          <div class="col-sm-10">
                            <table class="table table-striped" width="480" border="1" style="background-color: white">
                              <thead style="text-align: center">
                                  <tr>
                                    <td>Nama Cabang</td>
                                    <td>Alamat </td>
                                    <td>Telepon</td>
                                    <td colspan="2">Aksi</td>
                                  </tr>
                              </thead>
                              <tbody style="font-size: 9pt">
                              <?php
                                    $i=1;
                                    foreach ($isi_cabang as $cb) { ?>
                                        <tr>
                                        
                                            <td><?= $cb['nama'] ?></td>
                                            <td><?= $cb['alamat'] ?></td>
                                            <td><?= $cb['telepon'] ?></td>
                                    <td style="text-align: center">
                                    <a href="melihat_detail_cabang.php?cb=<?php echo $id_cabang['id_cabang']?>" class="btn btn-primary btn-xs">Detail</a>
                                    <a href="menghapus_cabang.php" class="btn btn-primary btn-xs">Hapus</a>
                                    </td>


                                            
                                        </tr>
                                        <?php
                                        $i++;
                                   } ?>
                                

                              </tbody>
                            </table>
                          </div>
                    </div>
                  </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 