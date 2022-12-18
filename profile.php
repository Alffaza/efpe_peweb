<?php
session_start()
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
                                    <a href="src/process/signout.php" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Sign out</span></a>
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
									<h1>Document</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
            <section aria-label="section">
                <?php
                include 'src/koneksi.php';

                $msg = 'berkas anda belum diverifikasi';

                $id = $_SESSION['id_akun'];
                $sql = $pdo->prepare("SELECT * FROM Peserta WHERE id_akun=:id AND sudah_oke=true");
                $sql->bindParam(':id', $id);
                $sql->execute();
                $result=$sql->fetch();
                if($result)
                    $msg = 'berkas anda sudah diverifikasi, silahkan cetak kartu ujian';

                echo '<h1 style="text-align:center">'.$msg.'</h1>';
                ?>
                <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-md-6 offset-md-3">
                            <a href="document-upload.php" class="opt-create">
                                <img src="images/misc/coll-single.png" alt="">
                                <h3>Upload / Edit Document</h3>
                            </a>
                            <a href="src/process/generate_kartu.php" class="opt-create">
                                <img src="images/misc/coll-multiple.png" alt="">
                                <h3>Print Document</h3>
                            </a>
                        </div>                             
                    </div>
                </div>
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