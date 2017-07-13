<div id="page-wrapper">
            <div class="container-fluid" id="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h1>Pontianak</h1>
                        <ul>
                            <li class="btn btn-primary"><a href="melihat_detai_cabang.php">Informasi Cabang</a></li>
                            <li class="btn btn-primary"><a href="daftaroperator.html">Daftar Operator</a> </li>
                            <li class="btn btn-primary"><a href="melihat_kurir.php">Daftar Kurir</a></li>
                        </ul>

                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group" style="padding-left: 380pt">
                                <div class="col-sm-offset-2 col-sm-10">
                                
                                  <a href="menambah_kurir.php"><button type="Sumbit" class="btn btn-default">Tambah Kurir</button>
                                 </a>
                                
                                </div>
                            </div>
                            </div>
                            <form class="form-horizontal" role="form" method="POST" >
                            
                    <div class="form-group">
                      <label for="data_transaksi" class="col-sm-1 control-label"></label>
                          <div class="col-sm-12">
                            <table class="table table-striped" width="480" border="1" style="background-color: white">
                              <thead style="text-align: center">
                                  <tr>
                                    <td>Id_Kurir </td>
                                    <td>Nama Kurir </td>
                                    <td>NIK</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Alamat</td>
                                    <td>Telepon</td>
                                    <td colspan="2">Aksi</td>
                                  </tr>
                              </thead>
                              <tbody style="font-size: 9pt">
                                
                                <?php
                                    $i=1;
                                    foreach ($isi_kurir as $kr) { ?>
                                        <tr>
                                        
                                            <td><?= $kr['id_kurir'] ?></td>
                                            <td><?= $kr['nama'] ?></td>
                                            <td><?= $kr['nik'] ?></td>
                                            <td><?= $kr['id_jeniskelamin'] ?></td>
                                            <td><?= $kr['alamat_kurir'] ?></td>
                                            <td><?= $kr['telepon'] ?></td>
                                            <td><a href="ubah_berita.php?id=<?php echo $kr['id_kurir']?>" class="btn btn-primary btn-xs">Edit</a></td>
                                            <td><a href="ubah_berita.php?id=<?php echo $kr['id_kurir']?>" class="btn btn-primary btn-xs">Hapus</a></td>
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