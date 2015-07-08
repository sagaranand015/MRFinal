<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Mentored Research Equity Research Initiative - the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities.">
    <meta name="keywords" content="Mentored Research Equity Research Initiative - the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities. ERI and Technical Analysis by Mentored-Research.">
    <meta name="author" content="Sagar Anand, Mentored-Research Tech Team">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <title>Mentored-Research | Mentee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- for jQuery -->
    <script src="js/jquery-1.7.1.min.js"></script>

    <!-- for my own custom jQuery Scripts -->
    <script src="js/customScripts.js"></script>

    <!-- for the social buttons coming from Bootstrap -->
    <link href="css/bootstrap-social.css" rel="stylesheet">    

    <!-- the latest jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- for the scrolly thing -->
    <script src="js/jquery.scrolly.min.js"></script>

    <!-- For validation of the Form input elements -->
    <script src="js/validator.min.js"></script>

    <style type="text/css">

        @font-face {
            font-family: regularText;
            src: url('fonts/AlegreyaSansSC-Regular.ttf');
        }

        @font-face {
            font-family: boldText;
            src: url('fonts/AlegreyaSansSC-Bold.ttf');
        }

        @font-face {
            font-family: lightText;
            src: url('fonts/AlegreyaSansSC-Light.ttf');
        }

        @font-face {
            font-family: mediumText;
            src: url('fonts/AlegreyaSansSC-Medium.ttf');
        }

        @font-face {
            font-family: writingText;
            src: url('fonts/SEGOEUIL.ttf');
        }

        #alertMsg {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;
            font-family: boldText;
            position: fixed;
        }

        #popup {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;    
            font-family: boldText;
            position: fixed;
        }

        footer {
        	background: rgb(233, 233, 233);
        }

        h1 {
        	color: #000;
        }

         /*for the smallest phones*/ 
        @media (max-width:767px){
            .sidebar {
                position: fixed;
                top: 0%;
                bottom: 0%;
                left: 0;
                z-index: 20;
                display: none;
                padding: 1%;
                overflow-x: hidden;
                overflow-y: auto; 
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
            .main-div {
		    	margin: 0% 2% 2% 0%;
		    }
		    .menu-show {
		    	margin: 25% 0% 0% 0%;	
		    	display: block;
		    }
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
        	.sidebar {
                position: fixed;
                top: 0%;
                bottom: 0%;
                left: 0;
                z-index: 20;
                display: none;
                padding: 1%;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
            .main-div {
		    	margin: 0% 2% 2% 0%;
		    }

		    .menu-show {
		    	margin: 10% 0% 0% 0%;	
		    	display: block;
		    }
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
            .sidebar {
                position: fixed;
                top: 11%;
                bottom: 0%;
                left: 0;
                z-index: 9;
                display: block;
                padding: 4% 1% 1% 1%;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
            .main-div {
		    	margin: 8% 2% 2% 17%;
		    }
		    .menu-show {
		    	display: none;
		    }
        }

        /*for large screens*/ 
        @media (min-width:1200px) {
            .sidebar {
                position: fixed;
                top: 10%;
                bottom: 0%;
                left: 0;
                z-index: 9;
                display: block;
                padding: 4% 1% 1% 1%;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }  
            .main-div {
		    	margin: 7% 2% 2% 17%;
		    }
		    .menu-show {
		    	display: none;
		    }
        }

        /* Sidebar navigation */
        .nav-sidebar {
            margin-right: -21px; /* 20px padding + 1px border */
            margin-bottom: 20px;
            margin-left: -20px;
        }
        .nav-sidebar > li > a {
            color: #000;
            padding-right: 20px;
            padding-left: 20px;
        }
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #fff;
            background-color: #428bca;
        }

        .show-menu {
        	display: block;
        }
        .hide-menu {
        	display: none;
        }

        .overlay-show {
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			z-index: 30;
			background-color: rgba(0,0,0,0.5);
		}
		.overlay-remove {
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			z-index: 30;
			background-color: rgba(0,0,0,0.5);
			display: none;
		}
		.overlay-img {
			position: relative;
			top: 45%;
			left: 45%;
		}

    </style>

	<script type="text/javascript">
        
        $(document).ready(function() {

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    

            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();
                return false;
            });

            var overlay = $('#overlay').addClass('overlay-remove');
            function showLoading() {
            	overlay.removeClass('overlay-remove');
            	overlay.addClass('overlay-show');
            }
            function hideLoading() {
            	overlay.removeClass('overlay-show');
            	overlay.addClass('overlay-remove');	
            }

            // for checking the query string and all.
	    	var qs = getQueryStrings();

    		// for the scrolly thing.
    		$('.scrolly').scrolly();

    		// media query functions
            if ($(window).width() >= 1200) {
            	$('.sidebar').addClass('show-menu');
            }
            else if ($(window).width() >= 992) {
            	$('.sidebar').addClass('show-menu');
            }
            else if ($(window).width() >= 768) {
            	$('.sidebar').addClass('hide-menu');
            }
            else if ($(window).width() <= 767) {
            	$('.sidebar').addClass('hide-menu');
            }
            else {
             	
            }

            // for showing the menu on the mobile site.
            $('#btnShowMenu').on('click', function() {
            	if($('.sidebar').hasClass('show-menu')) {
            		$(this).html("Show Menu");
            		$('.sidebar').removeClass('show-menu');
            		$('.sidebar').addClass('hide-menu');
            	}
            	else if($('.sidebar').hasClass('hide-menu')) {
            		$(this).html("Hide Menu");	
            		$('.sidebar').removeClass('hide-menu');
            		$('.sidebar').addClass('show-menu');
            	}
            	else {
            		
            	}
            	return false;
            }); 
            $('body, .main-div').on('click', function() {
	            if ($(window).width() >= 1200) {
	            }
	            else if ($(window).width() >= 992) {
	            }
	            else if ($(window).width() >= 768 || $(window).width() <= 767) {
            		$('.sidebar').removeClass('show-menu');
	        		$('.sidebar').addClass('hide-menu');
	        		$('#btnShowMenu').html("Show Menu");	
	            }
        		return false;
            });

            // hide all the divs on page load. Except for first div.
            $('.main-div').hide();

            // for all the links on the left hand side.
            $('.CRP').on('click', function() {
            	showDiv($('.CRP-div'));
            	return false;
            });

            $('.calender').on('click', function() {
            	showDiv($('.calender-div'));
            	return false;
            });

        });    // end of ready function.

	</script>

	<script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-41267406-1', 'auto');
        ga('send', 'pageview');
	</script>

</head>

<body id="page-top" class="index">

	<div class="overlay-remove" id="overlay">
		<img src="img/load.gif" class="overlay-img" />
	</div>

    <div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
          <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #070716; z-index: 10;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Mentored-Research</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#page-top"></a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com">MR-Home</a>
                    </li>
                    <!-- <li>
                    	<a class="scrolly" href="#campusAbs">Ambassador</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 col-xs-4 sidebar">
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="CRP">Central Resources</a></li>
                    <li><a href="#" class="calender">Program Calender</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	
                </ul>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block menu-show" id="btnShowMenu">
        	Menu
        </button>

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div CRP-div">
	        <h1 class="page-header">
	        	Central Resource Page
	        </h1>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div calender-div">
        	<h1 class="page-header">
	        	Programme Calender
	        </h1>
        </div>

    </div>

   <!--   <footer class="footer">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-4">
	                    <span class="copyright">Copyright &copy; Mentored-Research 2015</span>
	                </div>
	                <div class="col-md-4">
	                    <ul class="list-inline social-buttons">
	                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
	                        </li>
	                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
	                        </li>
	                    </ul>
	                </div>
	                <div class="col-md-4">  
	                    <ul class="list-inline social-buttons">
	                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
	                        </li>
	                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </footer> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
    <script src="js/classie.js"></script> 
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="js/agency.js"></script> -->

</body>

</html>
