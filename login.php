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
			
			<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
                <div class="overlay-gradient t50">
					<div class="center-y relative">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>Portal Pendaftaran dan Ujian.</h1>
                                <p class="lead">Portal Pendaftaran dan Ujian Pegawai Baru Kementerian Kelautan dan Perikanan Provinsi Jawa Timur.</p>
                            </div>
								
								<div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
									<div class="box-rounded padding40" data-bgcolor="#ffffff">
										<h3 class="mb10">Sign In</h3>
										<p>Login using an existing account or create a new account <a href="create.php">here<span></span></a>.</p>
										<form name="contactForm" id='contact_form' class="form-border" method="post" action='src/process/login.php'>

                                            <div class="field-set">
                                                <input type='text' name='nik' id='nik' class="form-control" placeholder="nik">
                                            </div>
											
											 <div class="field-set">
                                                <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                            </div>
											
											<div class="field-set">
												<input type='submit' id='send_message' class="btn btn-main btn-fullwidth color-2" value='Submit'>
											</div>
											
											<div class="clearfix"></div>
											
											<div class="spacer-single"></div>

                                        <!-- admin login -->
                                        <!-- <ul class="list s3">
                                            <li>Login As:</li>
                                            <li><a href="login-admin.html">Admin</a></li>
                                        </ul> -->
                                        <!-- admin login -->
                                </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		
            
            </div>
            <!-- content close -->

            
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
        

		
</body>

</html>