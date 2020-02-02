<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Karyawan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_karyawan WHERE id_karyawan='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Karyawan Dinas Sosial Kisaran</h2>
                        <h4> Mekar Baru, Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara 21211<br> 
                        <h3>DATA KARYAWAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Karyawan</td> <td><?= $data['nm_karyawan'] ?></td>
                                </tr>

                                <tr>
                                    <td>alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                               
                                <tr>
                                    <td>Jabatan</td> <td><strong><?= $data['jabatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td> <td><?= $data['no_telp'] ?></td>
                                </tr>
								<tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
								
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>M.RISKI Pratama<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>