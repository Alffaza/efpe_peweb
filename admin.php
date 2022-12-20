
<?php
    include 'src/koneksi.php';

    session_start();

    $id = $_SESSION['id_admin'];
    if(!isset($id)){
        header('location: login_admin.php');
    }
?>

<html lang="zxx">

<head>
    <title>KKP</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="KKP" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">

        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="home.html">
                                            <img alt="" src="images/logo.png" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="home.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="home.html">Profile</a>                             
                                    </li>
                                    <li>
                                        <a href="home.html">Document</a>                             
                                    </li>
                                    
                                </ul>
                                <div class="menu_side_area">
                                    <a href="login.html" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Sign out</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/26.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Admin</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
            <section aria-label="section">
                <!-- <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-md-6 offset-md-3">
                            <a href="document-upload.php" class="opt-create">
                                <img src="images/misc/coll-single.png" alt="">
                                <h3>Upload Document</h3>
                            </a>
                            <a href="home.html" class="opt-create">
                                <img src="images/misc/coll-multiple.png" alt="">
                                <h3>Print Document</h3>
                            </a>
                        </div>                             
                    </div>
                </div> -->
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomor Peserta</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Pas Foto</th>
                    <th scope="col">Berkas</th>
                    <th scope="col"/>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row_num = 1;

                    include 'src/koneksi.php';

                    $sql = $pdo->prepare("SELECT * FROM Peserta JOIN Akun_Peserta WHERE Peserta.sudah_oke=false");
                    $sql->execute();
                    while($data = $sql->fetch(PDO::FETCH_ASSOC)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row_num.'</th>';
                        echo '<td>'.$data['nomor_peserta'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['nik'].'</td>';
                        echo '<td>'.$data['kualifikasi_pendidikan'].'</td>';
                        echo '<td>'.$data['no_telp'].'</td>';
                        echo '<td><img src="images/pas/'.$data['pas_foto'].'" width="100" height="100"/></td>';
                        echo '<td><a href="images/berkas/'.$data['foto_berkas'].'"target="_blank">'.$data['foto_berkas'].'</a></td>';
                        echo '<td><a href="src/process/verif.php?id='.$data['nomor_peserta'].'">verify</a></td>';
                        echo '</tr>';
                        $row_num = $row_num + 1;
                    }
                    // echo '<tr>';
                    // echo '<th scope="row">1</th>';
                    // echo '<td>'.$data.'</td>';
                    // echo '<td>Otto</td>';
                    // echo '<td>@mdo</td>';
                    // echo '</tr>';
                    ?>
                    <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr> -->
                </tbody>
                </table>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
           
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>


</body>

</html>