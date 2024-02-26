<?php
    include "koneksi.php";

                    if(isset($_POST['proses'])){
                        mysqli_query($koneksi,"insert into data_perusahaan set
                        id = '$_POST[id]',
                        nama_perusahaan = '$_POST[nama_perusahaan]',
                        jenis_perusahaan = '$_POST[jenis_perusahaan]',
                        alamat = '$_POST[alamat]',
                        latitude = '$_POST[latitude]',
                        longitude = '$_POST[longitude]',
                        website = '$_POST[website]'");

                        echo "Data anda telah tersimpan";
                    }
                        if (mysqli_affected_rows($koneksi) > 0){
                            header('Location: data.php');                       
                    }
?>
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
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <style>
            #map{[]
                height: 80vh;
            }
        </style>    
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Pelayanan Data Perusahaan</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="data.php">Data</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://wa.me/6285375636278">Helpdesk</a>
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
                                <!-- <li class="nav-item"><a class="nav-link" href="#!">Sosmed</a></li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sosmed</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="https://www.facebook.com/">Facebook</a>
                                        <a class="dropdown-item" href="https://www.instagram.com/">Instagram</a>
                   
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="#!">Tiktok</a>
                                    </div>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masuk</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Login</a>
                                        <a class="dropdown-item" href="#!">Registrasi</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <!-- Page content-->
                <div class="container-fluid">
                    <h2 class="mt-4">Tambah Data</h2>
                    <form action="" method="post">
                    <table>
                        <tr>
                            <td width ="130">Nama Perusahaan</td>
                            <td> <input type="text" name="nama_perusahaan"></td>
                        </tr>
                        <tr>
                            <td width ="130">Jenis Perusahaan</td>
                            <td> <input type="text" name="jenis_perusahaan"></td>
                        </tr>
                        <tr>
                            <td width ="130">Alamat</td>
                            <td> <input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td width ="130">Latitude</td>
                            <td> <input type="text" name="latitude"></td>
                        </tr>
                        <tr>
                            <td width ="130">Longitude</td>
                            <td> <input type="text" name="longitude"></td>
                        </tr>
                        <tr>
                            <td width ="130">Website</td>
                            <td> <input type="text" name="website"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <input type="submit" value="simpan" name="proses"></td>
                        </tr>
                    </table>
                </form>

               
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            
        </script>
    </body>
</html>