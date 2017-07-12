<div id="page-wrapper">
            <div class="container-fluid" id="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h1>Pontianak</h1>
                        <ul>
                            <li class="btn btn-primary"><a href="melihat_detail.php">Informasi Cabang</a></li>
                            <li class="btn btn-primary"><a href="daftaroperator.html">Daftar Operator</a> </li>
                            <li class="btn btn-primary"><a href="melihat_kurir.php">Daftar Kurir</a></li>
                        </ul>

                    </div>
                </div>
                    <div class="row">
                   
                        <div class="col-sm-12">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="form-group">

 <?php 
    foreach ($data as $data_cabang) {
 ?>
                                        <label  class="col-sm-3 ">Nama Cabang</label>
                                            <div class="col-sm-5">
                                                : <?= $data_cabang['nama'] ?>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 ">Id_cabang</label>
                                            <div class="col-sm-5">
                                                : <?= $data_cabang['id_cabang'] ?>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 ">Alamat</label>
                                            <div class="col-sm-5">
                                                : <?= $data_cabang['alamat'] ?>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 ">Telepon</label>
                                            <div class="col-sm-5">
                                                : <?= $data_cabang['telepon'] ?>
                                            </div>
                                    </div>
                                    <?php } ?>
                                </div>
                               <a href="mengubah_cabang.php" class="btn btn-primary"> Edit</a>
                            </form>
                            
                        </div>
                    </div>
                
            </div>
        </div> 