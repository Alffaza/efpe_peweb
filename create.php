<!DOCTYPE html>
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
                                    </li><li>
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
									<h1>Create Account</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
            <section aria-label="section">
                <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-lg-7 center-div">
                            <form id="form-create-item" class="form-border" method="post" action="src/process/signup.php">
                                <div class="field-set">
                                    <!-- <h5>Upload Photo</h5>

                                    <div class="d-create-file">
                                        <p id="file_name">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</p>
                                        <input type="button" id="get_file" class="btn-main" value="Browse">
                                        <input type="file" id="upload_file">
                                    </div>

                                    <div class="spacer-40"></div> -->

                                    <h5>NIK</h5>
                                    <input type="text" name="nik" id="item_title" class="form-control" placeholder="123456" />

                                    <h5>Nama</h5>
                                    <input type="text" name="nama" id="item_title" class="form-control" placeholder="Banana123" />

                                    <h5>Nomor Telpon</h5>
                                    <input type="text" name="no_telp" id="item_title" class="form-control" placeholder="08123456" />
                                    <!-- <h5>Email</h5>
                                    <input type="text" name="item_title" id="item_title" class="form-control" placeholder="fazaganteng@gmail.com" /> -->

                                    <h5>Password</h5>
                                    <input type="password" name="password" id="item_title" class="form-control" placeholder="312ananab" />

                                    <input type="submit" id="submit" class="btn-main" value="Create Account"">
                                    <div class="spacer-single"></div>
                                </div>
                            </form>
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