<div id="page-wrapper">
                <div class="container-fluid" id="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" >Tambah Kurir</h1>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" role="form" action="aksi_tambah_kurir.php" method="POST">
                            <div class="form-group">
                                <label for="Id_kurir" class="col-sm-3">Id_Kurir</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="id_kurir" placeholder="" name="id_kurir">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="Nama" class="col-sm-3">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nama" placeholder="" name="nama">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="id_jeniskelamin" class="col-sm-3">Jenis Kelamin</label>
                                    <div class="col-sm-5">
                                    <?php foreach ($daftar_jeniskelamin as $km): ?>
                                        <label class="radio-inline">
                                    <input type="radio" name="id_jeniskelamin" id="id_jeniskelamin" value="<?php echo $km['id_jeniskelamin'] ?>"><?php echo $km['jenis_kelamin'] ?>
                                    </label>
                                    <?php endforeach ?>     
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat_kurir" class="col-sm-3">Alamat</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" cols="34" name="alamat_kurir" id="alamat_kurir">
                                          
                                        </textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-3">No. Handphone</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="telepon" placeholder="" name="telepon">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="id_cabang" class="col-sm-3">id cabang</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="id_cabang" placeholder="" name="id_cabang">
                                    </div>
                            </div>

                           
                            <div class="form-group" style="padding-left: 270pt">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="Sumbit" class="btn btn-default" id="simpan">Simpan</button>
                                </div>
                            </div>



                        </form>
        
            </div>
                </div>
            </div>
        </div> 