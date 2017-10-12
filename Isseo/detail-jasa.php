<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: login.php');
}
$url = file_get_contents("http://localhost/iseoo_api/current-jasa-detail.php?jid=".$_GET['jid']);
$get_json = json_decode($url);
foreach($get_json->return as $index=>$obj){}
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Integrated System Solutions</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
</head>

<body>


    <div id="all">
        <header>

                <header>

           <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">
 <form class="navbar-form navbar-left navbar-input-group" role="search">
   <div class="input-group">
                    <input type="text" class="form-control"
                           placeholder="Search" id="inputGroup"/>
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
</form>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="navbar-rights ">
                                   
                                </li>
                                
                              
                              

  <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class = "fa fa-bell "> </i> <b class="caret"></b></a>
                                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">
    
  
   <div class="notifications-wrapper">
     <a class="content" href="#">
      
       <div class="notification-item">
        <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
        <p class="item-info">Marketing 101, Video Assignment</p>
      </div>
       
    </a>
     <a class="content" href="#">
      <div class="notification-item">
        <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
        <p class="item-info">Marketing 101, Video Assignment</p>
      </div>
    </a>
     <a class="content" href="#">
      <div class="notification-item">
        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
        <p class="item-info">Marketing 101, Video Assignment</p>
      </div>
    </a>
     <a class="content" href="#">
      <div class="notification-item">
        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
        <p class="item-info">Marketing 101, Video Assignment</p>
      </div>

    </a>
     <a class="content" href="#">
      <div class="notification-item">
        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
        <p class="item-info">Marketing 101, Video Assignment</p>
      </div>
    </a>
     <a class="content" href="#">
      <div class="notification-item">
        <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
        <p class="item-info">Marketing 101, Video Assignment</p>
      </div>
    </a>

   </div>
    
    <div class="notification-footer"><h4 class="menu-title">Lihat Semua <i class="glyphicon glyphicon-circle-arrow-right"></i></h4></div>
  </ul>
  
                                   


                                </li>

                              <li class="dropdown">
    <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
     Layanan <b class="caret"></b></a>
                <ul class="dropdown-menu ">
                    <li class="akun"><a href="#"> Permintaan</a></li>
                    <li class="akun"><a href="#"> Transaksi</a></li>
					<li class="akun"><a href="#"> Detail Layanan</a></li>
					
                </ul>


</li>


                                 <li >
                                    <a href="event.php" >Acara</a>
                                     
                                   


                                </li>
 <li class="dropdown">
    <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
    <img src="http://placehold.it/30x30" class="img-circle special-img"> <label style="font-size:12px; text-transform: none;"> <?= $_SESSION['username']?> </label><b class="caret"></b></a>
                <ul class="dropdown-menu ">
                    <li class="akun"><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                    <li class="akun"><a href="#"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                </ul>
</li>


                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?= $obj->nama_jasa;?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a                            </li>
                            <li><a href="Layanan.html">Layanan</a>
                            </li>
                            <li><?= $obj->nama_jasa;?>
                            </li>
                            
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-12">

                        <p class="lead"><?= $obj->deskripsi;?>
                        </p>
                        
                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="img/portfolio-4.jpg" alt="" class="img-responsive">
                                </div>

                              
                                <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    <form method="post" action="http://localhost/iseoo_api/order-jasa.php?eid=<?= $_GET['eid']?>&jid=<?= $_GET['jid']?>">
                                        <div class="sizes">

                                            <h3>Kontak  : <?= $obj->kontak;?></h3>

                                            <!-- <label for="size_s">
                                                <a href="#">3</a>
                                                <input type="radio" id="size_s" name="size" value="s" class="size-input">
                                            </label>
                                           
 -->
                                        </div>

                                        <p class="price">Harga default order : <br><?= "Rp " . number_format($obj->harga,2,',','.');?></p>

                                        <p class="text-center">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Tambah ke event</button>
                                           
                                        </p>

                                    </form>
                                </div>

                                
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Detil Produk</h4>
                                <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                                <h4>Informasi Lainnya</h4>
                                <ul>
                                    <li>Polyester</li>
                                    <li>Machine wash</li>
                                </ul>
                                

                                <blockquote>
                                    <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                    </p>
                                </blockquote>
                        </div>

                       
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box text-uppercase">
                                    <h3>Produk yang berhubungan</h3>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product2.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>

                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product3.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product1.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box text-uppercase">
                                    <h3>Produk yang sering dilihat</h3>
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product3.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product1.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>


                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product2.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>

                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                        </div>

                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
		  _________________________________________________________ -->

                  
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

        
        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

       
 

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Your company / name goes here</p>
                    <p class="pull-right">Template by <a href="https://bootstrapious.com">Bootstrapious</a> & <a href="https://remoteplease.com">Remote Please</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    



</body>

</html>