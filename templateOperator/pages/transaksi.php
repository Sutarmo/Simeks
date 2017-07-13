<div id="page-wrapper">
                <div class="container-fluid" id="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="text-align: center">Transaksi</h1>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" role="form" action="aksi_transaksi.php" method="POST">
                            <div class="form-group">
                                <label for="id_transaksi" class="col-sm-3"></label>
                                    <div class="col-sm-5">
                                        
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_transaksi" class="col-sm-3">Tanggal</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="tgl_transaksi" placeholder="" name="tgl_transaksi">
                                     </div>
                            </div>     
                            <h2 class="page-header">Pengirim</h2>
                            <div class="form-group">
                                <label for="nama_pengirim" class="col-sm-3">Nama Pengirim</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nama_pengirim" placeholder="" name="nama_pengirim">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat_pengirim" class="col-sm-3">Alamat Pengirim</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" cols="40" name="alamat_pengirim" id="alamat_pengirim">
                                          
                                        </textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                              <label for="kota_pengirim" class="col-sm-3">Kota Pengirim</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="kota_pengirim">
                                    <?php foreach ($daftar_kota as $tc): ?>
                                      <option value="<?php echo $tc['nama'] ?>"><?php echo $tc['nama'] ?></option>
                                    <?php endforeach ?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="telepon_pengirim" class="col-sm-3">Telepon Pengirim</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="telepon_pengirim" placeholder="" name="telepon_pengirim">
                                    </div>
                            </div>
                             <h2 class="page-header">Penerima</h2>
                            <div class="form-group">
                                <label for="nama_penerima" class="col-sm-3">Nama Penerima</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nama_penerima" placeholder="" name="nama_penerima">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat_penerima" class="col-sm-3">Alamat Penerima</label>
                                    <div class="col-sm-5">
                                       <textarea rows="4" cols="40" name="alamat_penerima" id="alamat_penerima">
                                          
                                        </textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                              <label for="kota_penerima" class="col-sm-3">Kota Penerima</label>
                              <div class="col-sm-5">
                                  <select class="form-control">
                                    <?php foreach ($daftar_kota as $tc): ?>
                                      <option value="<?php echo $tc['nama'] ?>"><?php echo $tc['nama'] ?></option>
                                    <?php endforeach ?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="telepon_penerima" class="col-sm-3">Telepon Penerima</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="telepon_penerima" placeholder="" name="telepon_penerima">
                                    </div>
                            </div>
                             <h2 class="page-header">Barang</h2>
                            <div class="form-group">
                                <label for="nama_barang" class="col-sm-3">Nama Barang </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nama_barang" placeholder="" name="nama_barang">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="berat_barang" class="col-sm-3">Berat</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="berat_barang" placeholder="" name="berat_barang">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="berat_barang" class="col-sm-3">Biaya</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="total_biaya" placeholder="" name="total_biaya">
                                    </div>
                            </div>
                            
                            <div class="form-group" style="padding-left: 260pt">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="Sumbit" class="btn btn-default">Simpan</button>
                                </div>
                            </div>



                        </form>
        
            </div>
                </div>
            </div>
        </div>