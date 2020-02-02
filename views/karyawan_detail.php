<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Karyawan </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail karyawan-->
                    <?php
                    $sql = "SELECT * FROM tbl_karyawan WHERE id_karyawan ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel --->
                    <table class="table table-bordered table-striped table-hover"> 
                       
                        
                        <tr>
                            <td width="30%">Nama karyawan</td> <td><?= $data['nm_karyawan'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td> <td><?= $data['jabatan'] ?></td>
                        </tr>

                        <tr>
                            <td>No Hp</td> <td><?= $data['no_telp'] ?></td>
                        </tr>

                        <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>

						
                    </table>
				
                </div> 
                <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=karyawan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data karyawan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

