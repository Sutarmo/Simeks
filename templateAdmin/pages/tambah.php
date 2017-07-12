<div id="page-wrapper">
                <div class="container-fluid" id="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" >Tambah Cabang</h1>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" role="form" action="aksi_tambah_cabang.php" method="POST">
                            <div class="form-group">
                                <label for="Id_Kurir" class="col-sm-3">Id_Cabang</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="Id_cabang" placeholder="" name="id_cabang">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="Nama" class="col-sm-3">Nama Cabang</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nama" placeholder="" name="nama">
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Alamat" class="col-sm-3">Alamat</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" cols="34" name="alamat">
                                          
                                        </textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-3">Telepon</label>
                                    <div class="col-sm-5">
                                        <input type="char" class="form-control" id="telepon" placeholder="" name="telepon">
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