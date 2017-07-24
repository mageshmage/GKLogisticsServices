<?php
if(count($_POST)>0) {
    require_once("db.php");
    $sql = "SELECT TrackId, Location FROM tracking where TrackId = '" . $_POST["trackid"] . "'";
    $result = mysqli_query($conn,$sql);
    $message = "Successfully";
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GKLogisticsServices</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <img src="img/logo.ico" class="img-rounded" alt="Cinque Terre" width="50" height="50">
                        </li>
                        <li></li>
                        <li>
                            <a class="navbar-brand page-scroll" href="#page-top">GKLogisticsServices</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="home.php">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#tracking">Tracking</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#clients">Clients</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">MOVES COMES CHEAPER THIS FALL</h1>
                <hr>
                <p>This Fall the Prices on All the Local and Long Distance Moves We Offer Will Drop Dramatically!</p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<a href="#tracking" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </header>

    <section class="bg-primary" id="tracking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Shipment Visiblity</h2>
                    <hr class="light">
                    <p class="text-faded">We allow seamless tracking of good making the shipping process more transparent.</p>
                    <div class="form-group">
                        <form name="frmUser" method="post" action="">

                            <input class="form-control input-sm" name="trackid" id="trackid" autocomplete="off" placeholder="Please Enter TrackId" type="text">
                            <br>
                            <a href="" class="page-scroll btn btn-default btn-xl sr-button" data-id="abcd1234" id="getTracking" type="submit" name="submit" value="Submit" data-toggle="modal" data-target="#myModal" >Proceed Now</a>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-hidden="true">*</button>
                                    <h4 class="modal-title" style="color: orangered">
                                        <i class="glyphicon glyphicon-user"></i> Tracking Details
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div id="employee_data-loader" style="display: none; text-align: center;">
                                        <img src="ajax-loader.gif">
                                    </div>
                                    <div id="employee-detail">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="table" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th data-field="id">TrackId</th>
                                                            <th data-field="name">Location</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tablebody"></tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="javascript:window.location.reload()" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="door.php"><i class="fa fa-4x fa fa-home text-primary sr-icons" rel="tooltip" title="Click to view more" id="doortodoor"></i></a>
                        <h3>Door To Door</h3>
                        <p class="text-muted">Shipping</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="ground.php"><i class="fa fa-4x fa fa-truck text-primary sr-icons" rel="tooltip" title="Click to view more" id="groundcargo"></i></a>
                        <h3>Ground Cargo</h3>
                        <p class="text-muted">Carting</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="train.php"><i class="fa fa-4x fa fa-train text-primary sr-icons" rel="tooltip" title="Click to view more" id="trainservice"></i></a>
                        <h3>Train Cargo</h3>
                        <p class="text-muted">Distribution</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="air.php"><i class="fa fa-4x fa-plane text-primary sr-icons" rel="tooltip" title="Click to view more" id="airservice"></i></a>
                        <h3>Air Cargo</h3>
                        <p class="text-muted">Shipping</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" class = "bg-primary" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="img/portfolio/fullsize/door.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/door.jpg" class="img-responsive" alt="" width=100% height="230px">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Door To Door
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="img/portfolio/fullsize/road.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/road.jpg" class="img-responsive" alt="" width=100% height="230px">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Ground Cargo
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="img/portfolio/fullsize/train.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/train.jpg" class="img-responsive" alt="" width=100% height="230px">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Train Cargo
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a href="img/portfolio/fullsize/air.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/air.jpg" class="img-responsive" alt="" width=100% height="230px">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Air Cargo
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="l">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Our Network</h2>
                    <hr class="light">
                    <p class="text-faded">We Provide Fastest, Accurate Courier &amp; Cargo Services to all major cities. </p>

                    <img src="img/india-map.jpg" class="img-rounded" alt="Cinque Terre" width=100% height="650px">

                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Satisfied Clients</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="http://www8.hp.com" target="_blank" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/HP1.png" class="img-responsive" alt="">
                        </a>
                        <!--<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>-->
                        <h3>Hewlett Packard</h3>
                        <!--<p class="text-muted">Our templates are updated regularly so they don't break.</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://www.hpe.com" target="_blank" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/HPE.png" class="img-responsive" alt="">
                        </a>
                        <!--<i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>-->
                        <h3>Hewlett Packard Enterprice</h3>
                        <!--<p class="text-muted">You can use this theme as is, or you can make changes!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <!--<p class="text-muted">We update dependencies to keep things fresh.</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <hr class="light">					
                    <p class="text-faded">We Provide Fastest, Accurate Courier &amp; Cargo Services. </p>
                    <a href="about.php" class="page-scroll btn btn-default btn-xl sr-button" >To Know More</a>
                </div>
            </div>
        </div>
    </section>



    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your service with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>91-9810105093</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p>gkls@gklogisticsservices.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://www.linkedin.com/in/gklogisticsservices-gkls-20734a142/" target="_blank"><i class="fa fa-linkedin fa-3x sr-contact" rel="tooltip" title="Our Linkedin Page" id="linkdin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://www.facebook.com/GKLogisticsServices-1745653605725538/" target="_blank"><i  class="fa fa-facebook fa-3x sr-contact" rel="tooltip" title="Our FaceBook Page" id="facebook"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://twitter.com/gkls_official" target="_blank"><i class="fa fa-twitter fa-3x sr-contact" rel="tooltip" title="Our Twitter Page" id="twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a href="https://business.google.com/b/114363345229851743190/dashboard/l/12771338825068974228?hl=en" target="_blank"><i class="fa fa-google-plus fa-3x sr-contact" rel="tooltip" title="Our Google+ Page" id="googleplus"></i></a>
                    </div>
                </div>
                <section>

            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>


    <script src="../GK_Couriers/assets/jquery-1.12.4.min.js"></script>
    <script src="../GK_Couriers/assets/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function(){
            $("[rel=tooltip]").tooltip({ placement: 'right'});
        });


        $(document).ready(function(){
            $(document).on('click', '#getTracking', function(e){
                e.preventDefault();

                //$('#employee-detail').hide();
                $('#employee_data-loader').show();
                $.ajax({
                    url: 'Tracking_Data.php',
                    type: 'POST',
                    data: 'trackid='+ $('#trackid').val(),
                    dataType: 'json',
                    cache: false
                })
                    .done(function(data){
                       console.log(data)
                       var mymodal = $('#myModal');

                        if(data.length > 0){
                            //or **if(arrayName.length)**
                            //this array is not empty
                            for (x in data) {
                                console.log(data[x])
                                //$('#employee-detail').append('<tr><td>'+data[x]['trackid']+'</td><td>'+data[x]['location']+'</td></tr>');
                                $('#tablebody').append('<tr><td>'+data[x]['trackid']+'</td><td>'+data[x]['location']+'</td></tr>');
                                //mymodal.modal('show');
                            }
                        }else{
                            //this array is empty
                            $('#tablebody').append('Oops... Tracking details is not available')
                        }
                       $('#employee_data-loader').hide();
                    })
                    .fail(function(){
                        $('#employee-detail').html('Error, Please try again...');
                        $('#employee_data-loader').hide();
                    });
            });
        });

    </script>


        </body>

</html>
