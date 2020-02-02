<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Data Karyawan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="?page=utama"> <i class="fa fa-home"></i> Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-folder"></i> Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                     
                        <li><a href="?page=karyawan&actions=tampil"> <i class="fa fa-folder-open"></i> Data karyawan</a></li>
                       
                        <!-- <li><a href="?page=peminjaman&actions=tampil">Peminjaman</a></li> -->
                    </ul>
                </li>
                 <li><a href="?page=arsip&actions=report"> <i class="fa fa-print"></i>Report</a></li>
               
                <li><a href="?page=user&actions=tampil"> <i class="fa fa-users"></i> User</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil"> <i class="fa fa-users"></i> Profil</a></li>
                <li><a href="?page=kontak&actions=tampil"> <i class="fa fa-phone"></i> Contact</a></li>

                   

              
                      
                    <!-- <li><a href=""><i class="fa fa-user"><strong> </strong></i>  </a></li> -->
                     

                 <li class="dropdown">
                    <?php if (isset($_SESSION['username'])) { ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user"></i> <?=$_SESSION['nama']?> <span class="caret"></span></a>
                    <?php  }?>
                    <ul class="dropdown-menu">

                         <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="#logout"> <i class="fa fa-sign-out"></i> Logout</a></li>
                <?php } ?>
                                    <!-- <li><a href="?page=peminjaman&actions=report"> <i class="fa fa-file"></i> Laporan Pinjaman</a></li> -->
                    </ul>
                </li>



            </ul>
        </div>
    </div>
</nav>

<div id="logout" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="" action="logout.php" method="">
        <h4>Anda yakin ingin keluar ?</h4>
       

        <button type="submit">Ya</button>

        </form>
    </div>
</div>
