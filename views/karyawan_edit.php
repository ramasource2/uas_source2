<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_karyawan WHERE id_karyawan='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
						 <div class="form-group">
                            <label for="nm_karyawan" class="col-sm-3 control-label">Nama Karyawan *</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_karyawan" value="<?=$data['nm_karyawan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama karyawan" required>
                            </div>
                        </div>
                       

                         
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat *</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan alamat" required>
                            </div>
                        </div>
                       

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan *</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan jabatan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">No Hp *</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>"  class="form-control" id="inputPassword3" placeholder="Inputkan jabatan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Status *</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" value="<?=$data['status']?>" class="form-control" id="inputPassword3" placeholder="Inputkan jabatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=karyawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

                        </div>
                        
                        </div>

<?php
if($_POST){
    //Ambil data dari form
 
    
    $nm_karyawan = $_POST['nm_karyawan'];
    $alamat      = $_POST['alamat'];
    $jabatan     = $_POST['jabatan'];
    $no_telp     = $_POST['no_telp'];
    $status      = $_POST['status'];
   
    $sql="UPDATE tbl_karyawan SET nm_karyawan    = '$nm_karyawan',
                                     alamat      = '$alamat',
                                     jabatan     = '$jabatan',
                                     no_telp     = '$no_telp',
                                     status      = '$status'
                              WHERE id_karyawan = '$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Update Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=karyawan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Update Data Gagal');<script>";
    }
    }

?>
