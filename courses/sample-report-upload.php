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

    <title>Mentored-Research | Admin</title>

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

    <!-- for the form jQuery plugin for uploading files -->
    <script type="text/javascript" src="js/jquery.form.min.js"></script>

    <!-- for the cookies jQuery plugin -->
    <script src="js/jquery.cookie.js"></script>    

    <!-- for the video CDN for showing custom videos -->
    <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.11/video.js"></script>

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

        .main-div {
        	margin-top: 5%;
        }

        .nav-div {
        	margin: 5% 0%;
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


        @media (max-width:767px){
            
        }   

        @media (min-width:768px){
        	
        }

        @media (min-width:992px){

        }

        @media (min-width:1200px) {

        }
		 
    </style>

    <script type="text/javascript">

    	$(window).load(function() {
			var overlay = $('#overlay').addClass('overlay-remove');
    	});

    	$(document).ready(function() {

    		var alertMsg = $('#alertMsg').fadeOut();
	        var popup = $('#popup').fadeOut();    
	        $('#btnExitPopup').on('click', function() {
	            popup.children('p').remove();
	            popup.fadeOut();
	            return false;
	        });

	        // for navigating to the dashboard link
	        $('.btn-dashboard').on('click', function() {
	        	window.location.href = "admin.php";
	        	return false;
	        });

	        // for navigating to the home link
	        $('.btn-home').on('click', function() {
	        	window.location.href = "http://mentored-research.com/";
	        	return false;
	        });

	        // for navigating to the logout link
	        $('.btn-logout').on('click', function() {
	        	alert("Logout!");
	        	return false;
	        });

    	});

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

	<div class="overlay-show" id="overlay">
		<img src="img/load.gif" class="overlay-img" />
	</div>

	<div class="overlay-remove" id="overlay-error">
	</div>

    <div id="alertMsg" class="alert alert-warning hide-menu" role="alert">
    </div>

    <div id="popup" class="alert alert-danger hide-menu" role="alert">
            <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="progress" style="display: none;">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only"></span>
                </div>
            </div>
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
                <a class="navbar-brand page-scroll" href="http://mentored-research.com">Mentored-Research</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#page-top"></a>
                    </li>
                    <li>
                    	<a href="#" class="btn-dashboard">Your Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
    	<div class="row">
			<!-- for showing the guides and documents -->
	        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 main-div upload-div">

	        	<?php 

					// for the PHP helper functions.
					include('helpers.php');

                    if(isset($_FILES["fileAssignmentSampleReport"]) && $_FILES["fileAssignmentSampleReport"]["error"]== UPLOAD_ERR_OK)
                    {
                        ############ Edit settings ##############
                        $uploadDirectory    = 'uploads/assignmentSampleReport/'; //specify upload directory ends with / (slash)
                        ##########################################
                        
                        $fileName           = strtolower($_FILES['fileAssignmentSampleReport']['name']);
                        $fileExt            = substr($fileName, strrpos($fileName, '.')); //get file extention
                        $date               = date_create();
                        $timestamp          = date_timestamp_get($date);
                        $newFileName        = $timestamp . "_" . $fileName;  //.$File_Ext; //new file name  

                        $courseId = "-1";
                        $assId = "-1";
                        $sampleReportName = "-1";
                        if(isset($_POST["course-list-ass-sample-report"])) {
                            $courseId = $_POST["course-list-ass-sample-report"];
                        }
                        if(isset($_POST["assignment-list-ass-sample-report"])) {
                            $assId = $_POST["assignment-list-ass-sample-report"];
                        }
                        if(isset($_POST["txtSampleReportName"])) {
                            $sampleReportName = $_POST["txtSampleReportName"];
                        }
                        
                        if($courseId == "-1" || $assId == "-1") {
                            echo "<h3 class='page-header'>Upload failed</h3><p>Looks like the parameters for Sample Report upload are not correct. Please try again or contact us at: <code>tech@mentored-research.com</code></p>";
                        }
                        else if($sampleReportName == "-1") {
                            echo "<h3 class='page-header'>Upload failed</h3><p>Looks like you have not entered the Sample Report name. Please try again or contact us at: <code>tech@mentored-research.com</code></p>";
                        }
                        else {
                            if(move_uploaded_file($_FILES['fileAssignmentSampleReport']['tmp_name'], $uploadDirectory.$newFileName )) {
                                // save the link to the database.
                                $register = RegisterAssignmentSampleReport($assId, $courseId, $sampleReportName, $uploadDirectory.$newFileName);
                                if($register == "1") {
                                    echo "<h3 class='page-header'>Upload Success</h3><p>Your Assignment Sample Report upload is successful.</p>";   
                                }
                                else {
                                    echo "<h3 class='page-header'>Upload failed</h3><p>Looks like we could not register the uploaded file. Please try again or contact us at: <code>tech@mentored-research.com</code></p>";
                                }
                            }
                            else {
                                echo "<h3 class='page-header'>Upload failed</h3><p>The file was not uploaded. Please try again or contact us at: <code>tech@mentored-research.com</code></p>";
                            }
                        }
                    }
                    else {
                        echo "<h3 class='page-header'>Upload failed</h3><p>Looks like the file is too huge to be uploaded. Please try again with the file of smaller size or contact us at: <code>tech@mentored-research.com</code></p>";
                    }

				?>

				<div class="col-lg-4 col-md-4 col-sm-10 nav-div">
					<button class="btn btn-lg btn-primary btn-block btn-dashboard">Your Dashboard</button>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-10 nav-div">
					<button class="btn btn-lg btn-primary btn-block btn-home">M-R Home</button>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-10 nav-div">
					<button class="btn btn-lg btn-primary btn-block btn-logout">Logout</button>
				</div>

	        </div>
    	</div>  <!-- ./row -->
    </div>   <!-- ./container-fluid -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Mentored-Research 2015</span>
                </div>
                <div class="col-md-4">
                    <!-- <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul> -->
                </div>
                <div class="col-md-4">   <!-- TODO -->
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
    <script src="js/classie.js"></script> 
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

</body>
</html>

