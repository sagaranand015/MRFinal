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

    <title>Login | Mentored-Research</title>

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

        body {
        	background: #070716;
        }

        h1 {
        	color: #fff;
        }

         /*for the smallest phones*/ 
        @media (max-width:767px){
			
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
        	
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
            
        }

        /*for large screens*/ 
        @media (min-width:1200px){
            
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

            // for checking the query string and all.
	    	var qs = getQueryStrings();

    		// for the scrolly thing.
    		$('.scrolly').scrolly();

            // for different query strings
            if(qs["logout"] == "1") {
                popup.children('p').remove();
                popup.append("<p>You have successfully logged out. Thank You.</p>").fadeIn();
            }

    		// for navigation of the sign up button.
    		$('#btnSignup').on('click', function() {
    			window.location.href = "signup.php";
    		});

    		// for the login form and login button functionality!
			$('#formLogin').validator().on('submit', function (e) {
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
					alertMsg.fadeOut();
					popup.children('p').remove();
					popup.append("<p>Oops! Looks like you did not fill the fields correctly. Please Recheck and try again.</p>").fadeIn();
				} 
				else {
					// everything looks good. Write the code for login here.
					var email = $('#txtEmail').val().trim();
					var pwd = $('#txtPwd').val().trim();

					popup.fadeOut();
					alertMsg.children('p').remove();
					alertMsg.append("<p>Please wait for a moment while we log you in...</p>").fadeIn();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "1", email: email, pwd: pwd
						},
						success: function(response) {
							alert(response);

							popup.fadeOut();
							alertMsg.children('p').remove();
							alertMsg.fadeOut();

							if(response == "A") {  // go to the admin page.

							}
							else if(response == "B") {   // go to the Director page.
								
							}
							else if(response == "C") {   // go to the Mentor page.
								
							}
							else if(response == "D") {  // go to the Mentee page.
								
							}
							else if(response == "-A" || response == "-B" || response == "-C" || response == "-D") {   // error in password or username.
								
							}
							else if(response == "0") {   // email not there in the User table.
								
							}
							else {   // error condition
								popup.children('p').remove();
								popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
							}
						},
						error: function() {
							alertMsg.children('p').remove();
							alertMsg.fadeOut();
							popup.children('p').remove();
							popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
						}
					});
				
				}   // end of else
				return false;
			});

			$('#btnForgotPassword').on('click', function() {
				$('.forgotPwdModal').modal('show');
				return false;
			});

			// for the login form and login button functionality!
			$('#formForgotPwd').validator().on('submit', function (e) {
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
					alertMsg.fadeOut();
					popup.children('p').remove();
					popup.append("<p>Oops! Looks like you did not fill the fields correctly. Please Recheck and try again.</p>").fadeIn();
				} 
				else {
					// everything looks good. Write the code for forgot Password here.

					var pwdName = $('#txtForgotPwdName').val().trim();
					var pwdEmail = $('#txtForgotPwdEmail').val().trim();

					popup.fadeOut();
					alertMsg.children('p').remove();
					alertMsg.append("<p>Please wait for a moment while we reset your password...</p>").fadeIn();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "2", pwdName: pwdName, pwdEmail: pwdEmail
						},
						success: function(response) {

							popup.fadeOut();
							alertMsg.children('p').remove();
							alertMsg.fadeOut();

							if(response == "1") {
								popup.children('p').remove();
								popup.append("<p>Your Password change request has been proceeded. Please check your mailbox for further details.</p>").fadeIn();								
							}
							else if(response == "0") {
								popup.children('p').remove();
								popup.append("<p>Sorry, but we could not find this email address in our database. Please try again with the Registered Email address.</p>").fadeIn();									
							}
							else if(response == "-2") {
								popup.children('p').remove();
								popup.append("<p>Oops! Looks like this email address has not signed up yet. Please try again with the Registered Email Address</p>").fadeIn();									
							}
							else if(response == "2") {
								popup.children('p').remove();
								popup.append("<p>Apparently, we are facing difficulties with your network connection. Please try again for a successful change request.</p>").fadeIn();									
							}
							else {
								popup.children('p').remove();
								popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();									
							}
						},
						error: function() {
							alertMsg.children('p').remove();
							alertMsg.fadeOut();
							popup.children('p').remove();
							popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
						}
					});

				}   // end of else
				return false;
			});

			// focus on Email field.
			$('#txtEmail').focus();

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

    <div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
          <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #070716;">
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
                        <a class="scrolly" href="http://mentored-research.com"></a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com">MR-Home</a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="login-section" style="padding-botton: 0px;">
    	<div class="container">
    		<h1 class="page-header text-center">
    			Login
    		</h1>

    		<!-- table for the contact us form -->
    		<form role="form" data-toggle="validator" id="formLogin">
	    		<table class="table">
	    			<tr>
	    				<td>
	    					<input type="email" class="form-control" placeholder="Enter Email*" id="txtEmail" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="password" class="form-control" placeholder="Enter Password*" id="txtPwd" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<a href="#" id="btnForgotPassword">Forgot Password</a>		
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<input type="submit" class="btn btn-lg btn-primary btn-block" id="btnLogin" value="Log In" />
	    				</td>
	    			</tr>
	    		</table>
    		</form>

    		<form>
    			<table class="table">
	    			<tr>
	    				<td>
	    					<h1 class="text-center">
	    						Sign up here
	    					</h1>
	    				</td>
	    			</tr>
    				<tr>
    					<td>
    						<input type="button" class="btn btn-lg btn-primary btn-block" value="Sign Up Here" id="btnSignup" />
    					</td>
    				</tr>
    			</table>
    		</form>
		</div>
    </section>

    <!-- <section id="signup-section" style="padding-top: 0px;">
    	<div class="container">
    		<h1 class="page-header text-center">
    			Sign Up here
    		</h1>
    		<input type="button" class="btn btn-lg btn-primary btn-block" value="Sign Up Here" id="btnSignup" />
    	</div>
    </section> -->

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

	<!-- for all the modals here -->
	<div class="modal fade forgotPwdModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title forgotPwdTitle">Reset your Password</h4>
				</div>
				<div class="modal-body forgotPwdBody">

					<form role="form" data-toggle="validator" id="formForgotPwd">
						<table class="table">
							<tr>
								<td>
									<input type="text" class="form-control" placeholder="Enter Name*" id="txtForgotPwdName" required />
								</td>
							</tr>
							<tr>
								<td>
									<input type="email" class="form-control" placeholder="Enter Registered Email*" id="txtForgotPwdEmail" required />
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="Reset Password" id="btnResetPwd" class="btn btn-lg btn-primary btn-block" />
								</td>
							</tr>
						</table>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

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
