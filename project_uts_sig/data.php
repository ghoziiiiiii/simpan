<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ghozi Akbar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <style>
        #map {
            height: 80vh;
        }
        td.wrap {
            word-break: break-all;
        }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Perusahaan Pelalawan</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data.php">Data</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://wa.me/682284041347">HelpDesk</a>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link Profil-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sosmed</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="https://ghoziakbar23@gmail.com">Gmail</a>
                                        <a class="dropdown-item" href="https://www.instagram.com">Instagram</a>
                                       
                                        <a class="dropdown-item" href="https://wa.me/682284041347">WhatsApp</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link Profil-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Login</a>
                                        <a class="dropdown-item" href="#!">Registrasi</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
              
                <!-- Page content-->
<!-- Page content-->
<div class="container-fluid">
            <h1 class="mt-4">DATA</h1>
            <a href="tambahdata.php" class="btn btn-primary ml-auto">Tambah Data</a>
            <table class="table table-striped table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Jenis Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Website</th>
                        <th scope="col">Aksi</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                    include "koneksi.php";
                        $no=1;
                            $ambildata = mysqli_query($koneksi, "SELECT * FROM data_perusahaan");
                                while ($tampil = mysqli_fetch_array($ambildata)) {
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td>$tampil[id]</td>
                                            <td>$tampil[nama_perusahaan]</td>
                                            <td>$tampil[jenis_perusahaan]</td>
                                            <td>$tampil[alamat]</td>
                                            <td>$tampil[latitude]</td>
                                            <td>$tampil[longitude]</td>
                                            <td class='wrap'>$tampil[website]</td>
                                            <td><a href='?kode=$tampil[id]'>Hapus</a></td>
                                            <td><a href='ubahdata.php?kode=$tampil[id]'>Ubah</td>
                                            </tr>";

                                            $no++;
                                    }

                    ?>
                    </table>
                    <?php
                    if(isset($_GET['kode'])){

                        mysqli_query($koneksi, "DELETE FROM data_perusahaan WHERE id ='$_GET[kode]'");

                        echo"Data Telah Terhapus";
                        echo"<meta http-equiv=refresh content=2;URL='data.php'>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">

        </script>
    </body>
</html>`