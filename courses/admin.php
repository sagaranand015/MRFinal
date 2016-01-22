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

    <!-- for the cookies jQuery plugin -->
    <script src="js/jquery.cookie.js"></script>    

    <!-- for the form jQuery plugin for uploading files -->
    <script type="text/javascript" src="js/jquery.form.min.js"></script>

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
            color: #fff;
		}
        .assignment-video, .assignment-report, .assignment-offtopic, .assignment-extra, .latest-assignment-name {
            cursor: pointer;
        }

    </style>

	<script type="text/javascript">

        // this is thw window.load function for the getting the profile data from the database.
        $(window).load(function() {

        	var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    
            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();

                // to hide the progress bar.
                $('.progress').fadeOut();
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

            var email = $.cookie("email");
            if($.cookie("email") == "undefined" || $.cookie("email") == undefined) {
            	popup.children('p').remove();
            	popup.append("<p>You have not logged in. Please do so before continuing.</p>").fadeIn();
            }
            else {
            	showLoading();
	    		$.ajax({
	    			type: "GET",
	    			url: "AJAXFunctions.php",
	    			data: {
	    				no: "2", email: email, table: "Admin"
	    			},
	    			success: function(response) {
	    				if(response == "-1") {
	    					popup.children('p').remove();
	                    	popup.append("<p>Oops! We encountered an error while loading the page. Please try again.</p>").fadeIn();	
	    				}
	    				else if(response == "-2") {
	    					popup.children('p').remove();
	    					popup.fadeOut();
	                    	alertMsg.children('p').remove();
	                    	alertMsg.append("<p>You have not logged in properly. Please <a href='http://mentored-research.com/login' style='color: black;'>LOGIN AGAIN</a> to continue.</p>").fadeIn();
                    		$('#overlay-error').removeClass('overlay-remove');
	                    	$('#overlay-error').addClass('overlay-show');
	    				}	
	    				else {
	    					//populate all the fields here.
	    					var res = response.split(" ~~ ");
	    					$('#txtProfileName').val(res[1]);
	    					$('#txtProfileEmail').val(res[0]);
	    					$('#txtProfileContact').val(res[2]);
	    					$('#txtProfileOrgan').val(res[3]);
	    					$('#txtProfileProfile').val(res[4]);

	    					// populate the header of the dashboard.
	    					$('.profile-header').html(res[1] + "'s Dashboard");

	    					// set the cookie for the menteeID.
	    					$.cookie("id", res[5], {
	                            path: '/',
	                            expires: 365
	                        });
	    				}
	    			},
	    			error: function() {
	    				alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
	    			},
	    			complete: function() {
	    				hideLoading();
	    			}
	    		});   // end of ajax request.
            }   // end of else.
        });   // end of the window load function.

        $(document).ready(function() {

        	document.title = "Admin | " + $.cookie("email");

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    
            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();

                // to hide the progress bar.
                $('.progress').fadeOut();
                return false;
            });

            // for the loading overlay hiding and showing
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
	    	// for all the queryStrings

            //function to check file size before uploading.
            function beforeSubmit() {
            	alertMsg.children('p').remove();
            	alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
                //check whether browser fully supports all File API
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    if( !$('#fileCalender').val()) {   //check empty input filed 
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
                        return false;
                    }
                    var fsize = $('#fileCalender')[0].files[0].size; //get file size
                    var ftype = $('#fileCalender')[0].files[0].type; // get file type
                    //allow file types 
                    switch(ftype) {
                        case 'image/png': 
                        case 'image/gif': 
                        case 'image/jpeg': 
                        case 'image/pjpeg':
                            break;
                        default:
                            alertMsg.children('p').remove();
                        	alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in the correct format.</p>").fadeIn();
                            return false;
                    }
                    //Allowed file size is less than 5 MB (1048576)
                    if(fsize>5242880)   {
                        alertMsg.children('p').remove();
                    	alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p><b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.</p>").fadeIn();
                        return false;
                    }
                }
                else  {
                    alertMsg.children('p').remove();
                	alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Please upgrade your browser, because your current browser lacks some new features we need!</p>").fadeIn();
                    return false;
                }
                alertMsg.children('p').remove();
            	alertMsg.fadeOut();
            }   // end of beforeSubmit function.

            //progress bar function
            function OnProgress(event, position, total, percentComplete) {
                // show the loading overlay here, when the process of uploading starts.
                showLoading();
                popup.children('p').remove();
                popup.fadeIn();
                $('.progress').fadeIn();
                $('.progress-bar').width(percentComplete + '%') //update progressbar percent complete
                $('.progress-bar').html(percentComplete + '%'); //update status text
            }
            //function to format bites bit.ly/19yoIPO
            function bytesToSize(bytes) {
               var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
               if (bytes == 0) return '0 Bytes';
               var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
               return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
            }
            //function after succesful file upload (when server response)
            function afterSuccess() {
                // to hide the loading overlay after the uploading is done.
                hideLoading();
                popup.children('p').remove();
                popup.fadeOut();
                $('.progress').fadeOut();
                alertMsg.fadeIn();
                // finally, remove the courseID cookie here.
                $.removeCookie("courseID");
                // to fadeOut the alertMsg and reload the page after 3 seconds.
                setTimeout(function() {
                    alertMsg.fadeOut();
                    //location.reload();
                }, 10000);
            }     // end of afterSuccess function

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
            $('#btnCloseMenu').on('click', function() {
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
            // for the logout functionality
            $('.btnLogout').on('click', function() {
            	$.removeCookie("email", {
            		path: '/'
            	});
            	$.removeCookie("id", {
            		path: '/'
            	});
            	window.location.href = "logout.php";
            	return false;
            });

            // for updating the profile info on the admin page.
            $('#formProfile').validator().on('submit', function (e) {
                if (e.isDefaultPrevented()) {
                    alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Oops! Looks like you did not fill the fields of the Profile Data correctly. Please Recheck and try again.</p>").fadeIn();
                }
                else {
                    // make the AJAX Request for updating the profile data.
                    var name = $('#txtProfileName').val().trim();
                    var contact = $('#txtProfileContact').val().trim();
                    var profile = $('#txtProfileProfile').val().trim();
                    var email = $.cookie("email");

                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "1", email: email, name: name, contact: contact, profile: profile, table: "Admin"
                        },
                        success: function(response) {
                            if(response == "-1") {
                            	popup.children('p').remove();
                            	popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
                            }
                            else {
                    			popup.children('p').remove();
                            	popup.append("<p>Profile Update Successful.</p>").fadeIn();		
                            }
                        },
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });

			// this is for adding the course to the database.
			$('#formAddCourse').validator().on('submit', function (e) {
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Oops! Looks like you did not fill the fields of the Course Data correctly. Please Recheck and try again.</p>").fadeIn();
				}
				else {
					var courseName = $('#txtCourseName').val().trim();
					var courseDur = $('#txtCourseDuration').val().trim();
					var courseEdition = $('#txtCourseEdition').val().trim();
					var courseDesc = $('#txtCourseDesc').val().trim();

					showLoading();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "4", name: courseName, duration: courseDur, edition: courseEdition, desc: courseDesc
						},
						success: function(response) {
							if(response == "-1") {
								popup.children('p').remove();
	                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
							}
							else {
								popup.children('p').remove();
	                            popup.append("<p>Course Added Successfully.</p>").fadeIn();	
							}
						},
						error: function() {
							alertMsg.children('p').remove();
	                        alertMsg.fadeOut();
	                        popup.children('p').remove();
	                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
						},
						complete: function() {
							hideLoading();
						}
					});   // end of ajax request.
				}   // end of else
				return false;
			});

			// this is for adding the course to the database.
			$('#formAddOrganisation').validator().on('submit', function (e) {
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Oops! Looks like you did not fill the fields of the Organisation Data correctly. Please Recheck and try again.</p>").fadeIn();
				}
				else {
					var organName = $('#txtOrganName').val().trim();
					var organContact = $('#txtOrganContact').val().trim();
					var organAddress = $('#txtOrganAddress').val().trim();

					showLoading();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "5", name: organName, contact: organContact, address: organAddress
						},
						success: function(response) {
							if(response == "-1") {
								popup.children('p').remove();
	                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
							}
							else {
								popup.children('p').remove();
	                            popup.append("<p>Campus Added Successfully.</p>").fadeIn();	
							}
						},
						error: function() {
							alertMsg.children('p').remove();
	                        alertMsg.fadeOut();
	                        popup.children('p').remove();
	                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
						},
						complete: function() {
							hideLoading();
						}
					});   // end of ajax request
				}   // end of else.
				return false;
			});

			// for all the links on the left hand side.

			// for the dashboard link on LHS
            $('.dashboard').on('click', function() {
            	showDiv($('.dashboard-div'));
            	changeActiveState($(this).parent('li'));

            	// to show the list of organization on clicking of the dashboard button.
            	showLoading();
				$.ajax({
				    type: "GET",
				    url: "AJAXFunctions.php",
				    data: {
				        no: "3"
				    },
				    success: function(response) {
			    		if(response == "-1") {
			    			popup.children('p').remove();
				        	popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
				    	}
				    	else {
				    		$('.dashboard-organ').html(response);
				    	}
				    },
				    error: function() {
				        alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
				    },
				    complete: function() {
				        hideLoading();
				    }
				});
            	return false;
            });    // end of dashboard click link on LHS.
            // for the delegate event of the change of the organisation drop down on dashboard.
            // show all the directors and mentors and mentees here on this page.
            $('.dashboard-div').delegate('#ddl-organisation', 'change', function() {
                var organ = $(this).val();

                // this is to get the directors, mentors and mentees on the admin dashboard.
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "32", organ: organ
                    },
                    success: function(response) {
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                        }
                        else {
                            var res = $.parseJSON(response);
                            console.log(res);

                            // firstly, get the directors(index: 0)
                            var temp = "<h3>Directors: </h3>";
                            for(var i = 0;i<res[0].length;i++) {
                                temp += "<tr><td>" + res[0][i].DirectorName + "</td><td>" + res[0][i].DirectorEmail + "</td><td><a href='#' data-email='" + res[0][i].DirectorEmail + "' class='btnDashboardSendMessage'>Send Messsage</a></td></tr>";
                            }
                            $('.dashboard-director').html(temp);

                            // for the mentor display
                            temp = "<h3>Mentors: </h3>";
                            for(var i = 0;i<res[1].length;i++) {
                                temp += "<tr><td>" + res[1][i].MentorName + "</td><td>" + res[1][i].MentorEmail + "</td><td><a href='#' data-email='" + res[1][i].MentorEmail + "' class='btnDashboardSendMessage'>Send Messsage</a></td></tr>";
                            }
                            $('.dashboard-mentor').html(temp);

                            // for the mentee display
                            temp = "<h3>Mentees: </h3>";
                            for(var i = 0;i<res[2].length;i++) {
                                temp += "<tr><td>" + res[2][i].MenteeName + "</td><td>" + res[2][i].MenteeEmail + "</td><td><a href='#' data-email='" + res[2][i].MenteeEmail + "' class='btnDashboardSendMessage'>Send Messsage</a></td></tr>";
                            }
                            $('.dashboard-mentee').html(temp);
                        }
                    },
                    error: function() {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                    },
                    complete: function() {
                        hideLoading();
                    }
                });

            });   // end of delegate event.

            // for the send Message button that shows the modal for sending message.
            $('.dashboard-div').delegate('.btnDashboardSendMessage', 'click', function() {
                var email = $(this).attr('data-email');
                $('#txtSendMessageEmail').val(email);
                $('#sendMessageModal').modal('show');
                return false;
            });

            // for sending the message from the modal box.
            $('#btnSendMessage').on('click', function() {
                var msg = $('#txtSendMessage').val();

                var email = $('#txtSendMessageEmail').val();

                if(msg == "") {
                    popup.children('p').remove();
                    popup.append("<p>Please Enter a message to be sent</p>").fadeIn();
                }
                else if(email == "" || email == "undefined" || email == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Unexpected Error Occured. Please login again.</p>").fadeIn();   
                }
                else {   // ajax request to send the message to the email
                    $('#sendMessageModal').modal('hide');
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "33", email: email, msg: msg
                        },
                        success: function(response) {
                            if(response[0]["status"] == "sent") {
                                popup.children('p').remove();
                                popup.append("<p>Your Message has been sent. Thank You.</p>").fadeIn();
                                // remove the contents of the message box here.
                                $('#txtSendMessage').val("");
                            }
                            else if(response[0]["status"] == "queued" || response[0]["status"] == "scheduled") {
                                popup.children('p').remove();
                                popup.append("<p>Your Message has been Queued. Sit back and relax while we send your message in sometime.</p>").fadeIn();
                            }
                            else if(response[0]["status"] == "rejected" || response[0]["status"] == "invalid") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! Your Message could not ben sent. Please try again.</p>").fadeIn();
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of ajax Request
                }  // end of else.
                return false;
            });  // end of #btnSendMessage click.

			// for the assignment link on LHS
			$('.assignment').on('click', function() {
            	showDiv($('.assignment-div'));
            	changeActiveState($(this).parent('li'));

            	// to get all the courses as a drop down list
            	showLoading();
            	$.ajax({
            		type: "GET",
            		url: "AJAXFunctions.php",
            		data: {
            			no: "6"
            		},
            		success: function(response) {
            			// to show the courses drop down at appropriate place.
            			if(response == "-1") {
							popup.children('p').remove();
				        	popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();	            				
            			}
            			else {
            				$('.courselist-assignment').children('select').remove();
            				$('.courselist-assignment').append(response);
            			}
            		}, 
            		error: function() {
            			alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
            		},
            		complete: function() {
            			hideLoading();
            		}
            	});
            	return false;
            });    // end of assignment-div
			// for the delegate event of the course list 
			$('.assignment-div').delegate('#ddl-course', 'change', function() {
				// firstly, get the latest assignment number for the course.
				if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {
                	var courseID = $(this).val();
                	showLoading();
					$.ajax({
						type: "GET",
						url: "AJAXFunctions.php",
						data: {
							no: "8", courseID: courseID
						},
						success: function(response) {
							if(response == "-1") {
								$('.latest-ass-no').html("Please check internet connection. Or try again.");	
							}
							else {
								$('.latest-ass-no').html(response);
								// set the cookie of latst assignment no. for further use.
								$.cookie("latestAss", response, {
									path: '/'
								});
							}
						},
						error: function() {
							alertMsg.children('p').remove();
					        alertMsg.fadeOut();
					        popup.children('p').remove();
					        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
						},
						complete: function() {
							hideLoading();
						}
					});
                }   // end of else.
				return false;
			});   // end of delegate() in courses list in assignment-div
			$('#formAssignment').validator().on('submit', function (e) { 
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Oops! Looks like you did not fill the fields of the Assignment Data correctly. Please Recheck and try again.</p>").fadeIn();
				}
				else {
					// make the ajax Request to save the assignment details to the database.
					var courseAssID = $('.courselist-assignment').children('select').val();
					var assName = $('#txtAssName').val().trim();
					var assDesc = $('#txtAssDesc').val().trim();
					var assPostedOn = $('#txtAssPostedOn').val().trim();
					var assDeadline = $('#txtAssDeadline').val().trim();

					if(!isValidDate(assPostedOn) || !isValidDate(assDeadline)) {
						alertMsg.children('p').remove();
	                    alertMsg.fadeOut();
	                    popup.children('p').remove();
	                    popup.append("<p>Oops! Looks like you did not fill the Date Fields correctly. Please Recheck and try again.</p>").fadeIn();
					}
					else if(courseAssID == "-1") {
						popup.children('p').remove();
	                    popup.append("<p>Oops! Looks like you did not select the course. Please Recheck and try again.</p>").fadeIn();
					}
					else {
						showLoading();
						$.ajax({
							type: "GET",
							url: "AJAXFunctions.php",
							data: {
								no: "9", assCourse: courseAssID, assName: assName, assDesc: assDesc, assPostedOn: assPostedOn, assPostedBy: $.cookie("id"), assDeadline: assDeadline, assNo: $.cookie("latestAss")
							},
							success: function(response) {
								if(response == "-1") {
									popup.children('p').remove();
						        	popup.append("<p>Oops! We encountered an error while registering Assignment Details. Please try again.</p>").fadeIn();		
								}
								else {
									popup.children('p').remove();
						        	popup.append("<p>Assignment Details Successfully Added. Please go ahead and upload Assignment PDFs and other material.</p>").fadeIn();										
								}
							},
							error: function() {
								alertMsg.children('p').remove();
						        alertMsg.fadeOut();
						        popup.children('p').remove();
						        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
							},
							complete: function() {
								hideLoading();
							}
						});
					}  // end of inner else
				}  // end of outer else
				return false;
			});

			// for the assignmentPDF link on LHS
            $('.assignmentPDF').on('click', function() {
            	showDiv($('.assignmentPDF-div'));
            	changeActiveState($(this).parent('li'));

            	// to get all the courses as a drop down list
            	showLoading();
            	$.ajax({
            		type: "GET",
            		url: "AJAXFunctions.php",
            		data: {
            			no: "6"
            		},
            		success: function(response) {
            			// to show the courses drop down at appropriate place.
            			if(response == "-1") {
							popup.children('p').remove();
				        	popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();	            				
            			}
            			else {
            				$('.course-list-assPDF').children('select').remove();
            				$('.course-list-assPDF').append(response);
            			}
            		}, 
            		error: function() {
            			alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
            		},
            		complete: function() {
            			hideLoading();
            		}
            	});

                // for the delegate function of courseList-assPDF
                $('.assignmentPDF-div').delegate('#ddl-course', 'change', function() {
                    if($(this).val() == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>Looks like you have not selected the course. Please do so before uploading the calender.</p>").fadeIn();
                    }
                    else {

                        // set the hidden field here.
                        $('.col-assignment-pdf').append("<input type='hidden' name='course-list-assPDF' value='" + $(this).val() + "' />");
                        $('.col-ass-sample-report').append("<input type='hidden' name='course-list-ass-sample-report' value='" + $(this).val() + "' />");
                        $('.col-ass-video').append("<input type='hidden' name='course-list-ass-video' value='" + $(this).val() + "' />");
                        $('.col-ass-off-topic').append("<input type='hidden' name='course-list-ass-off-topic' value='" + $(this).val() + "' />");
                        $('.col-ass-extra').append("<input type='hidden' name='course-list-ass-extra' value='" + $(this).val() + "' />");

                        showLoading();
                        $.ajax({
                            type: "GET",
                            url: "AJAXFunctions.php",
                            data: {
                                no: "10", courseAssPDF: $(this).val()
                            },
                            success: function(response) {
                                // to show the assignments drop down at appropriate place.
                                if(response == "-1") {
                                    popup.children('p').remove();
                                    popup.append("<p>We could not retrieve the assignments from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                                }
                                else {
                                    $('.assignment-list-assPDF').children('select').remove();
                                    $('.assignment-list-assPDF').append(response);
                                }
                            }, 
                            error: function() {
                                alertMsg.children('p').remove();
                                alertMsg.fadeOut();
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                            },
                            complete: function() {
                                hideLoading();
                            }
                        });
                    }   // end of else.
                    return false;
                });    // end of delegate for courseAssPDF
                // for the delegate function of assignmentAssPDF
                $('.assignmentPDF-div').delegate("#ddl-assignment", 'change', function() {
                    if($(this).val() == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>Looks like you have not selected the assignment. Please do so before uploading the calender.</p>").fadeIn();
                    }
                    else {

                        $('.col-assignment-pdf').append("<input type='hidden' name='assignment-list-assPDF' value='" + $(this).val() + "' />");
                        $('.col-ass-sample-report').append("<input type='hidden' name='assignment-list-ass-sample-report' value='" + $(this).val() + "' />");
                        $('.col-ass-video').append("<input type='hidden' name='assignment-list-ass-video' value='" + $(this).val() + "' />");
                        $('.col-ass-off-topic').append("<input type='hidden' name='assignment-list-ass-off-topic' value='" + $(this).val() + "' />");
                        $('.col-ass-extra').append("<input type='hidden' name='assignment-list-ass-extra' value='" + $(this).val() + "' />");

                    }   // end of else (for ddl-assignment value to be -1 or not)
                    return false;
                });

            	return false;
            });    // end of AssignmentPDF link on LHS

            // -------------- for the form submit of the assignment materials ----------------
            // form submit to upload the assignment PDF upload
            $('#form-assignment-pdf').submit(function() { 
                showLoading();
                $(this).submit();
            });      

            // form submit to upload the assignment Sample Report upload
            $('#form-ass-sample-report').submit(function() { 
                showLoading();
                $(this).submit();
            });     // end of form submit for form-ass-sample-report

            // form submit to upload the assignment Off Topic upload
            $('#form-ass-off-topic').submit(function() { 
                showLoading();
                $(this).submit();
            });     // end of form submit for form-ass-off-topic

            // form submit to upload the assignment Extras upload
            $('#form-ass-extra').submit(function() { 
                showLoading();
                $(this).submit();
            });     // end of form submit for form-ass-sample-report 

            // form submit to add the video link to the db
            $('#form-ass-video').submit(function() { 
                
                var courseId = $("[name='course-list-ass-video']").val();
                var assId = $("[name='assignment-list-ass-video']").val();
                var assVideoName = $('#txtAssVideoName').val().trim();
                var assVideo = $("#txtAssVideo").val().trim();

                if(courseId == "" || courseId == undefined || courseId == "undefined" || assId == "" || assId == "undefined" || assId == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected either the course or the assignment. Please do so first.</p>").fadeIn();
                } else {
                     showLoading();
                     $.ajax({
                         type: "GET",
                         url: "AJAXFunctions.php",
                         data: {
                             no: "11", assID: assId, assVideo: assVideo, assVideoName: assVideoName
                         },
                         success: function(response) {
                             if(response == "-1") {
                                 popup.children('p').remove();
                                 popup.append("<p>Oops! We encountered an error while registering the Video link. Please try again.</p>").fadeIn();  
                             }
                             else {
                                 popup.children('p').remove();
                                 popup.append("<p>Assignment Video Added Successfully.</p>").fadeIn();       
                             }
                         },
                         error: function() {
                             alertMsg.children('p').remove();
                             alertMsg.fadeOut();
                             popup.children('p').remove();
                             popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                         },
                         complete: function() {
                             hideLoading();
                         }
                     });
                }   // end of else
                return false;
            });     // end of form submit for form-ass-video 

			// for adding the video link to the database.
			// $('#formAssVideo').validator().on('submit', function (e) { 
			// 	if (e.isDefaultPrevented()) {
			// 		alertMsg.children('p').remove();
   //                  alertMsg.fadeOut();
   //                  popup.children('p').remove();
   //                  popup.append("<p>Oops! Looks like you have not provided the Video Link. Please Recheck and try again.</p>").fadeIn();
			// 	}
			// 	else {
			// 		// put the ajax Request for the Video link to the database.
			// 		if($.cookie("assignmentAssPDF") == "undefined" ||  $.cookie("assignmentAssPDF") == undefined) {
			// 			popup.children('p').remove();
			// 	        popup.append("<p>Looks like you have not selected the Assignment Properly. Please do so first.</p>").fadeIn();	
			// 		}
			// 		else {
   //                      var assVideoName = $('#txtAssVideoName').val().trim();
			// 			var assVideo = $('#txtAssVideo').val().trim();
			// 			var assID = $.cookie("assignmentAssPDF");
			// 			showLoading();
			// 			$.ajax({
			// 				type: "GET",
			// 				url: "AJAXFunctions.php",
			// 				data: {
			// 					no: "11", assID: assID, assVideo: assVideo, assVideoName: assVideoName
			// 				},
			// 				success: function(response) {
			// 					if(response == "-1") {
			// 						popup.children('p').remove();
			// 	        			popup.append("<p>Oops! We encountered an error while registering the Video link. Please try again.</p>").fadeIn();	
			// 					}
			// 					else {
			// 						popup.children('p').remove();
			// 	        			popup.append("<p>Assignment Video Added Successfully.</p>").fadeIn();		
			// 					}
			// 				},
			// 				error: function() {
			// 					alertMsg.children('p').remove();
			// 			        alertMsg.fadeOut();
			// 			        popup.children('p').remove();
			// 			        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
			// 				},
			// 				complete: function() {
			// 					hideLoading();
			// 				}
			// 			});
			// 		}  // end of inner else.
			// 	}   // end of outer else.
			// 	return false;
			// });  // end of add video link form

			// for the profile link on LHS
            $('.profile').on('click', function() {
            	showDiv($('.profile-div'));
            	changeActiveState($(this).parent('li'));
            	return false;
            });

            // for the add course link on LHS
            $('.course').on('click', function() {
            	showDiv($('.course-div'));
            	changeActiveState($(this).parent('li'));
            	return false;
            });

            // for the add organisation link on LHS
            $('.organisation').on('click', function() {
            	showDiv($('.organisation-div'));
            	changeActiveState($(this).parent('li'));
            	return false;
            });

            // for the add course calender link on LHS
            $('.calender').on('click', function() {
            	showDiv($('.calender-div'));
            	changeActiveState($(this).parent('li'));

            	// to get all the courses as a drop down list
            	showLoading();
            	$.ajax({
            		type: "GET",
            		url: "AJAXFunctions.php",
            		data: {
            			no: "6"
            		},
            		success: function(response) {
            			// to show the courses drop down at appropriate place.
            			if(response == "-1") {
							popup.children('p').remove();
				        	popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();	            				
            			}
            			else {
            				$('.courseList').children('select').remove();
            				$('.courseList').append(response);
            			}
            		}, 
            		error: function() {
            			alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
            		},
            		complete: function() {
            			hideLoading();
            		}
            	});
            	return false;
            });   // end of calender link on LHS.
			// for the delegate event of the change of the course drop down on calender upload.
            $('.calender-div').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {
                    $('.courseList').append("<input type='hidden' name='calender-course' value='" + $(this).val() + "' />");
                }   // end of else
            });  // end of change (delegate) function in calender-div courses list
            $('#form-calender').submit(function() {
                var course = $('.courseList').children('select').val();
                if(course == "-1" || course == "undefined" || course == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();   
                } else {
                    showLoading();
                    $(this).submit();
                }
            });

			// for the add course calender link on LHS
            $('.guide').on('click', function() {
            	showDiv($('.guide-div'));
            	changeActiveState($(this).parent('li'));

            	// to get all the courses as a drop down list
            	showLoading();
            	$.ajax({
            		type: "GET",
            		url: "AJAXFunctions.php",
            		data: {
            			no: "6"
            		},
            		success: function(response) {
            			if(response == "-1") {
							popup.children('p').remove();
				        	popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();	            				
            			}
            			else {
                            // for the guides
            				$('.course-list-guide').children('select').remove();
            				$('.course-list-guide').append(response);

                            // for the annual reports
                            $('.course-list-annual-report').children('select').remove();
                            $('.course-list-annual-report').append(response);

                            // for the finance docs
                            $('.course-list-finance-doc').children('select').remove();
                            $('.course-list-finance-doc').append(response);
            			}
            		}, 
            		error: function() {
            			alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
            		},
            		complete: function() {
            			hideLoading();
            		}
            	});
            	return false;
            });   // end of guide link on LHS.
			
            // ----------------- for the course guide ----------------------------
			// for the delegate event of the change of the course drop down on calender upload.
            $('#form-guide').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {      
                    $('.course-list-guide').append("<input type='hidden' name='course-guide' value='" + $(this).val() + "' />");
                }   // end of else
            }); 
            // for the form submit of the calendar upload.
            $('#form-guide').submit(function() {
                var course = $('.course-list-guide').children('select').val();
                if(course == "-1" || course == undefined || course == "undefined") {
                    popup.children('p').remove();
                    popup.append("<p>You havn't selected the course. Please do so first.</p>").fadeIn();
                } else {
                    showLoading();
                    $(this).submit();
                }
            });  // end of form-guide submit

            // -------------- for the course annual reports -----------------------
            // for the delegate event of the change of the course drop down on calender upload.
            $('#form-annual-report').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {      
                    $('.course-list-annual-report').append("<input type='hidden' name='course-annual-report' value='" + $(this).val() + "' />");
                }   // end of else
            }); 
            // for the form submit of the calendar upload.
            $('#form-annual-report').submit(function() {
                var course = $('.course-list-annual-report').children('select').val();
                if(course == "-1" || course == undefined || course == "undefined") {
                    popup.children('p').remove();
                    popup.append("<p>You havn't selected the course in the annual report. Please do so first.</p>").fadeIn();
                } else {
                    showLoading();
                    $(this).submit();
                }
            });  // end of form-guide submit

            // -------------- for the course financial docs -----------------------
            // for the delegate event of the change of the course drop down on finance docs upload.
            $('#form-finance-doc').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {      
                    $('.course-list-finance-doc').append("<input type='hidden' name='course-finance-doc' value='" + $(this).val() + "' />");
                }   // end of else
            }); 
            // for the form submit of the calendar upload.
            $('#form-finance-doc').submit(function() {
                var course = $('.course-list-finance-doc').children('select').val();
                if(course == "-1" || course == undefined || course == "undefined") {
                    popup.children('p').remove();
                    popup.append("<p>You havn't selected the course in the annual report. Please do so first.</p>").fadeIn();
                } else {
                    showLoading();
                    $(this).submit();
                }
            });  // end of form-guide submit


			 // for the add user link on LHS
            $('.user').on('click', function() {
            	showDiv($('.user-div'));
            	changeActiveState($(this).parent('li'));

            	// for showing the correct tab
            	$('#director-tab').tab('show');
            	$('#add-user-tab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				});

				// for getting the organisation and course ddls.
            	showLoading();
            	$.ajax({
            		type: "GET",
            		url: "AJAXFunctions.php",
            		data: {
            			no: "6"
            		},
            		success: function(response) {
            			// to show the courses drop down at appropriate place.
            			if(response == "-1") {
							popup.children('p').remove();
				        	popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();	            				
            			}
            			else {
            				$('.add-mentor-course').children('select').remove();
            				$('.add-mentor-course').append(response);

            				$('.add-mentee-course').children('select').remove();
            				$('.add-mentee-course').append(response);
            			}
            		}, 
            		error: function() {
            			alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();	
            		}
            	});
				$.ajax({
				    type: "GET",
				    url: "AJAXFunctions.php",
				    data: {
				        no: "3"
				    },
				    success: function(response) {
			    		if(response == "-1") {
			    			popup.children('p').remove();
				        	popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
				    	}
				    	else {

				    		$('.add-director-organ').children('select').remove();
            				$('.add-director-organ').append(response);

				    		$('.add-mentor-organ').children('select').remove();
            				$('.add-mentor-organ').append(response);

            				$('.add-mentee-organ').children('select').remove();
            				$('.add-mentee-organ').append(response);
				    	}
				    },
				    error: function() {
				        alertMsg.children('p').remove();
				        alertMsg.fadeOut();
				        popup.children('p').remove();
				        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
				    },
				    complete: function() {
				        hideLoading();
				    }
				});   // end of second ajax request
                return false;
            });   // end of user link on LHS.
            // for the form submitting while adding the users to the database.
            $('#form-add-director').on('submit', function() {
                var organ = $('.add-director-organ').children('select').val();
                var directorEmail = $('#txtAddDirector').val().trim();
                if(organ == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Please select the organization correctly.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "16", organ: organ, course: "", email: directorEmail, level: "B"
                        },
                        success: function(response) {
                            if(response == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Director Successfully Added. Thank You.</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while adding the Director. Please try again.</p>").fadeIn();
                            }
                        },
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });

            // for the form submitting while adding the users(mentors) to the database.
            $('#form-add-mentor').on('submit', function() {
                var organ = $('.add-mentor-organ').children('select').val();
                var course = $('.add-mentor-course').children('select').val();
                var mentorEmail = $('#txtAddMentor').val().trim();
                if(organ == "-1" || course == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Please select the organization or course correctly.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "16", organ: organ, course: course, email: mentorEmail, level: "C"
                        },
                        success: function(response) {
                            if(response == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Mentor Successfully Added. Thank You.</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while adding the Mentor. Please try again.</p>").fadeIn();
                            }
                        },
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });

            // for the form submitting while adding the users(mentors) to the database.
            $('#form-add-mentee').on('submit', function() {
                var organ = $('.add-mentee-organ').children('select').val();
                var course = $('.add-mentee-course').children('select').val();
                var mentorEmail = $('#txtAddMentee').val().trim();
                if(organ == "-1" || course == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Please select the organization or course correctly.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "16", organ: organ, course: course, email: mentorEmail, level: "D"
                        },
                        success: function(response) {
                            if(response == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Mentee Successfully Added. Thank You.</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while adding the Mentee. Please try again.</p>").fadeIn();
                            }
                        },
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });   // end of submit() of form-add-mentee
            
            //function to check file size before uploading for the update Solution
            function beforeSubmitMenteeExcel() {
                alertMsg.children('p').remove();
                alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
                //check whether browser fully supports all File API
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    if( !$('#fileAddMentee').val()) {   //check empty input filed 
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
                        return false;
                    }
                    var fsize = $('#fileAddMentee')[0].files[0].size; //get file size
                    var ftype = $('#fileAddMentee')[0].files[0].type; // get file type
                    //allow file types 
                    switch(ftype) {
                        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                        case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                        case 'application/vnd.ms-excel':
                        case 'application/msexcel':
                        case 'application/x-msexcel':
                        case 'application/x-ms-excel':
                        case 'application/x-excel':
                        case 'application/x-dos_ms_excel':
                        case 'application/xls':
                        case 'application/x-xls':
                            break;
                        default:
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in the Excel format only.</p>").fadeIn();
                            return false;
                    }
                    //Allowed file size is less than 5 MB (1048576)
                    if(fsize>5242880)   {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p><b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.</p>").fadeIn();
                        return false;
                    }
                }
                else  {
                    alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Please upgrade your browser, because your current browser lacks some new features we need!</p>").fadeIn();
                    return false;
                }
                alertMsg.children('p').remove();
                alertMsg.fadeOut();
            }   // end of beforeSubmitMenteeExcel function.

            function afterSuccessMenteeExcel() {
                // to hide the loading overlay after the uploading is done.
                hideLoading();
                popup.children('p').remove();
                popup.fadeOut();
                $('.progress').fadeOut();
                alertMsg.fadeIn();
                // finally, remove the courseID cookie here.
                $('.user').trigger('click');
                // to fadeOut the alertMsg and reload the page after 3 seconds.
                setTimeout(function() {
                    alertMsg.fadeOut();
                    location.reload();
                }, 3000);
            }     // end of afterSuccessAssignmentSolution function

            // code for updateSolution File upload
            var optionsMenteeExcel = { 
                target:   '#alertMsg',   // target element(s) to be updated with server response 
                beforeSubmit:  beforeSubmitMenteeExcel,  // pre-submit callback 
                success:       afterSuccessMenteeExcel,  // post-submit callback 
                uploadProgress: OnProgress, //upload progress callback 
                resetForm: true        // reset the form after successful submit 
            };

            // for adding the mentees through the excel sheets.
            $('#form-add-mentee-excel').submit(function() {
                var organ1 = $('.add-mentee-organ').children('select').val();
                var course1 = $('.add-mentee-course').children('select').val();
                $.cookie("addMenteeOrgan", organ1);
                $.cookie("addMenteeCourse", course1);

                var email = $.cookie("email");
                var id = $.cookie("id");

                //alert($.cookie("addMenteeCourse") + " --> " + $.cookie("addMenteeOrgan"));
                if(organ1 == "-1" || course1 == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Please select the organisation and course before uploading files. Thank You.</p>").fadeIn();
                }
                else if(email == "-1" || id == "-1" || email == undefined || email == "undefined" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login again and try again.</p>").fadeIn();
                }
                else {
                    $(this).ajaxSubmit(optionsMenteeExcel);
                }
                return false;
            });   // end of submit() of form-add-mentee-excel

            //function to check file size before uploading for the update Solution
            function beforeSubmitMentorExcel() {
                alertMsg.children('p').remove();
                alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
                //check whether browser fully supports all File API
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    if( !$('#fileAddMentor').val()) {   //check empty input filed 
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
                        return false;
                    }
                    var fsize = $('#fileAddMentor')[0].files[0].size; //get file size
                    var ftype = $('#fileAddMentor')[0].files[0].type; // get file type
                    //allow file types 
                    switch(ftype) {
                        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                        case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                        case 'application/vnd.ms-excel':
                        case 'application/msexcel':
                        case 'application/x-msexcel':
                        case 'application/x-ms-excel':
                        case 'application/x-excel':
                        case 'application/x-dos_ms_excel':
                        case 'application/xls':
                        case 'application/x-xls':
                            break;
                        default:
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in the Excel format only.</p>").fadeIn();
                            return false;
                    }
                    //Allowed file size is less than 5 MB (1048576)
                    if(fsize>5242880)   {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p><b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.</p>").fadeIn();
                        return false;
                    }
                }
                else  {
                    alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Please upgrade your browser, because your current browser lacks some new features we need!</p>").fadeIn();
                    return false;
                }
                alertMsg.children('p').remove();
                alertMsg.fadeOut();
            }   // end of beforeSubmitMentorExcel function.


            // code for updateSolution File upload
            var optionsMentorExcel = { 
                target:   '#alertMsg',   // target element(s) to be updated with server response 
                beforeSubmit:  beforeSubmitMentorExcel,  // pre-submit callback 
                success:       afterSuccessMenteeExcel,  // post-submit callback 
                uploadProgress: OnProgress, //upload progress callback 
                resetForm: true        // reset the form after successful submit 
            };

            // for adding the mentees through the excel sheets.
            $('#form-add-mentor-excel').submit(function() {
                var organ1 = $('.add-mentor-organ').children('select').val();
                var course1 = $('.add-mentor-course').children('select').val();
                $.cookie("addMentorOrgan", organ1);
                $.cookie("addMentorCourse", course1);

                var email = $.cookie("email");
                var id = $.cookie("id");

                if(organ1 == "-1" || course1 == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Please select the organisation and course before uploading files. Thank You.</p>").fadeIn();
                }
                else if(email == "-1" || id == "-1" || email == undefined || email == "undefined" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login again and try again.</p>").fadeIn();
                }
                else {
                    $(this).ajaxSubmit(optionsMentorExcel);
                }
                return false;
            });   // end of submit() of form-add-mentor-excel


            // for the change password link on the LHS
            $('.password').on('click', function() {
                showDiv($('.password-div'));
                changeActiveState($(this).parent('li'));
                return false;
            });   // end of .password on LHS.
            $('#formChangePassword').submit(function() {
                // first, check for both the new passwords:
                var oldPassword = $('#txtOldPassword').val().trim();
                var newPassword = $('#txtNewPassword').val().trim();
                var newPasswordConfirm = $('#txtNewPasswordConfirm').val().trim();
                var email = $.cookie("email");

                if(newPassword != newPasswordConfirm) {
                    popup.children('p').remove();
                    popup.append("<p>Your Passwords do not match. Please recheck and try again.</p>").fadeIn();
                }
                else if(email == "" || email == "undefined" || email == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>You have not logged in properly. Please log out and login again.</p>").fadeIn();   
                }
                else {   // ajax request for password change
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "17", email: email, oldPassword: oldPassword, newPassword: newPassword, newPasswordConfirm: newPasswordConfirm, table: "Admin"
                        },
                        success: function(response) {
                            if(response == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Password Successfully Changed.</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Error encountered while changing your password. Please try again.</p>").fadeIn();   
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();  
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of AJAX Request.
                }
                return false;
            });   // end of formChangePassword submit()

			// for the change password link on the LHS
            $('.invite').on('click', function() {
                showDiv($('.invite-div'));
                changeActiveState($(this).parent('li'));
                return false;
            });   // end of .invite on LHS.
            // for sending the invites to the email
            $('#formSendInvite').submit(function() {
                var msg = $('#txtSendInviteMsg').val().trim();
                var emailList = $('#txtSendInvite').val().trim();
                var list1 = new Array();
                list1 = emailList.split(',');
                var list = new Array();
                for(var i=0;i<list1.length;i++) {
                    item = list1[i].trim();
                    if(item == "") {
                    }
                    else {
                        list.push(item);
                    }
                }
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "23", list: list, msg: msg
                    },
                    success: function(response) {
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();     
                        }
                        else {
                            popup.children('p').remove();
                            popup.append("<p>" + "<b>" + response + "</b>" + " mails have been sent. Thank You.</p>").fadeIn();     
                        }
                    },
                    error: function() {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();  
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
                return false;
            });   // end of form submit function()

            // for the assign-mentees div on the LHS
            $('.assign-mentee').on('click', function() {
                showDiv($('.assign-mentee-div'));
                changeActiveState($(this).parent('li'));

                // remove the previous elements.
                $('.assign-mentee-mentor').children('select').remove();
                $('.assign-mentee-mentee').children('input, label').remove();

                // firslty, get all the organisations and the courses.
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "3"
                    },
                    success: function(response) {
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        }
                        else {
                            $('.assign-mentee-organ').html(response);
                        }
                    },
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                    },
                    complete: function() {
                    }
                });
                // to get all the courses for the admin page.
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        }
                        else if(response == "0") {
                            popup.children('p').remove();
                            popup.append("<p>No Courses found in the database. Please try again.</p>").fadeIn();   
                        }
                        else {
                            $('.assign-mentee-course').html(response);
                        }
                    },
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                    },
                    complete: function() {
                        hideLoading();
                    }
                });   // end of getting all the courses on the admin page.
                return false;
            });   // end of the assign-mentees div on LHS.
            var assignOrgan = "-1";
            var assignCourse = "-1";
            // for the change event of the organization in ddl
            $('.assign-mentee-div').delegate('#ddl-organisation', 'change', function() {
                assignOrgan = $(this).val();
                assignCourse = $('.assign-mentee-course').children('select').val();
                if(assignCourse == "-1" || assignOrgan == "-1") {
                }
                else if(assignCourse != "-1" && assignOrgan != "-1") {
                    // for getting the mentors of the given organisation and course.
                    $('.assign-mentee-mentor').children('select').remove();  // to remove the previous one.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "29", organ: assignOrgan, course: assignCourse
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Mentors found in the database. Please try again.</p>").fadeIn();   
                            }
                            else {
                                $('.assign-mentee-mentor').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                        }
                    });
                    // for getting the mentees of the given organisation and course.
                    $('.assign-mentee-mentee').children('input, label').remove();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "30", organ: assignOrgan, course: assignCourse
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                            }
                            else if(response == "0" || response == "") {
                                popup.append("<p>No mentees left to be assigned.</p>").fadeIn();
                            }
                            else {
                                $('.assign-mentee-mentee').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });  // end of the second ajax call.

                }   // end of else if.
                return false;
            });    // end of delegate event for Organisation ddl.

            // for the change event of the course in ddl
            $('.assign-mentee-div').delegate('#ddl-course', 'change', function() {
                assignCourse = $(this).val();
                assignOrgan = $('.assign-mentee-organ').children('select').val();
                if(assignCourse == "-1" || assignOrgan == "-1") {
                }
                else if(assignCourse != "-1" && assignOrgan != "-1") {
                    // for getting the mentors of the given organisation and course.
                    $('.assign-mentee-mentor').children('select').remove();  // to remove the previous one.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "29", organ: assignOrgan, course: assignCourse
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Mentors found in the database. Please try again.</p>").fadeIn();   
                            }
                            else {
                                $('.assign-mentee-mentor').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                        }
                    });
                    // for getting the mentees of the given organisation and course.
                    $('.assign-mentee-mentee').children('input, label').remove();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "30", organ: assignOrgan, course: assignCourse
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                            }
                            else if(response == "0" || response == "") {
                                popup.append("<p>No mentees could be found in the database.</p>").fadeIn();
                            }
                            else {
                                $('.assign-mentee-mentee').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });  // end of second ajax request.

                }   // end of else if for checking assignOrgan and assignCourse
                return false;
            });   // end of delegate event for Course ddl.

            // for the button click for assignment of mentors to the mentees.
            $('#formAssignMentee').submit(function() {
                // get the selected mentees first.
                var selected = [];
                $('.assign-checkbox').each(function() {
                    var item = $(this);
                    if(item.is(':checked')) {
                        selected.push(item.attr('name'));
                    }
                });

                // now, the mentor selected.
                var mentor = $('.assign-mentee-mentor').children('select').val();
                var mentees = JSON.stringify(selected);

                if(mentor == "-1" || mentor == "") {
                    popup.children('p').remove();
                    popup.append("<p>Please select a mentor before assigning. Thank You.</p>").fadeIn();
                }
                else if(selected.length == 0) {
                    popup.children('p').remove();
                    popup.append("<p>Please select at least one mentee to be assigned to. Thank You.</p>").fadeIn();
                }
                else {
                    //now, the ajax request to assign the mentors to the selected mentees.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "31", mentorId: mentor, mentees: mentees
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>" + response + ". Please wait while we reload the page for you.</p>").fadeIn();

                                // reload the page for no problems afterwards.
                                setTimeout(function() {
                                    location.reload();
                                }, 5000);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });   // end of the submit() function.
                
            

            // --------------- Central Resources Page ------------------

            // for the Central Resources page on LHS
            $('.CRP').on('click', function() {
                showDiv($('.CRP-div'));
                changeActiveState($(this).parent('li'));

                // get the assignments drop down list from here.
                var email = $.cookie("email");
                var id = $.cookie("id");

                // to get all the courses as a drop down list
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        // to show the courses drop down at appropriate place.
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                        }
                        else {
                            $('.course-crp').children('select').remove();
                            $('.course-crp').append(response);
                        }
                    }, 
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
                return false;
            });   // end of click on LHS CRP link.

            $('.CRP-div').delegate('#ddl-course', 'change', function() {
                var courseId = $(this).val();
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "10", courseAssPDF: courseId
                    },
                    success: function(response) {
                        // to show the assignments drop down at appropriate place.
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve your assignments from the database. Please check your internet connection and try again.</p>").fadeIn();                             
                        }
                        else if(response == "-2") {
                            popup.children('p').remove();
                            popup.append("<p>You have not been assigned any courses. Please try again or contact your mentor.</p>").fadeIn();                               
                        }
                        else {
                            $('.assignment-crp').children('select').remove();
                            $('.assignment-crp').append(response);
                        }
                    }, 
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });   // end of ajax.
                return false;
            });   // end of delegate event of the course change drop down.

            // for the delegate event of the assignments in CRP.
            $('.CRP-div').delegate('#ddl-assignment', 'change', function() {
                var assID = $(this).val();

                // ajax request to get the assignment PDF and assignment materials.
                if(assID == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Please select an assignment before proceeding.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "13", assID: assID
                        },
                        success: function(response) {
                            console.log(response);
                            // now, parse the data and show all the results.
                            if(response.AssName == "" || response.AssName == undefined) { 
                                $('.assignment-name').html("No Assignment Name");   
                            }
                            else {
                                $('.assignment-name').html("<b>" + response.AssName + "</b>");
                            }
                            if(response.AssDesc == "" || response.AssDesc == undefined) { 
                                $('.assignment-desc').html("No Assignment Description");    
                            }
                            else {
                                $('.assignment-desc').html(response.AssDesc);
                            }
                            if(response.AssPostedOn == "" || response.AssPostedOn == undefined) { 
                                $('.assignment-postedon').html("No Assignment Date");   
                            }
                            else {
                                $('.assignment-postedon').html(response.AssPostedOn);
                            }
                            if(response.AssDeadline == "" || response.AssDeadline == undefined) { 
                                $('.assignment-deadline').html("No Assignment Deadline Date");  
                            }
                            else {
                                $('.assignment-deadline').html(response.AssDeadline);
                            }
                            if(response.AssPdf == "" || response.AssPdf == undefined) { 
                                $('.assignment-question').html("No Question Uploaded"); 
                            }
                            else {
                                $('.assignment-question').html("<a href='" + response.AssPdf + "' target='_blank'>Click to download Assignment</a>");
                            }

                            // now, for the assignment Video tabs.
                            $('.videos').children('.assignment-video').remove();
                            var videos = response.AssVideo;
                            var videoDiv = "";
                            for(var i=0;i<videos.length;i++) {
                                videoDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 assignment-video'";
                                if(videos[i] == undefined || videos[i] == "undefined" || videos[i] == "") {
                                    videoDiv += "data-url='" + "" +  "'>";
                                }
                                else {
                                    videoDiv += "data-url='" + videos[i] +  "'>";
                                }
                                videoDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-video-o fa-stack-1x fa-inverse'></i></span>";
                                videoDiv += "<p class='text-muted'>" + "Video Lecture " + (i+1) + "</p>";
                                videoDiv += "</div>";
                            }
                            $('.videos').append(videoDiv);

                            // now, for the assignment Sample Reports
                            $('.reports').children('.assignment-report').remove();
                            var reports = response.AssSampleReport;
                            var reportDiv = "";
                            for(var i=0;i<reports.length;i++) {
                                reportDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 assignment-report'";
                                if(reports[i] == undefined || reports[i] == "undefined" || reports[i] == "") {
                                    reportDiv += "data-url='" + "" +  "'>";
                                }
                                else {
                                    reportDiv += "data-url='" + reports[i] +  "'>";
                                }
                                reportDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-pdf-o fa-stack-1x fa-inverse'></i></span>";
                                reportDiv += "<p class='text-muted'>" + "Sample Report " + (i+1) + "</p>";
                                reportDiv += "</div>";
                            }
                            $('.reports').append(reportDiv);

                            // now, for the assignment Off Topics
                            $('.offtopics').children('.assignment-offtopic').remove();
                            var offtopics = response.AssOffTopic;
                            var offTopicDiv = "";
                            for(var i=0;i<offtopics.length;i++) {
                                offTopicDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 assignment-offtopic'";
                                if(offtopics[i] == undefined || offtopics[i] == "undefined" || offtopics[i] == "") {
                                    offTopicDiv += "data-url='" + "" +  "'>";
                                }
                                else {
                                    offTopicDiv += "data-url='" + offtopics[i] +  "'>";
                                }
                                offTopicDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-excel-o fa-stack-1x fa-inverse'></i></span>";
                                offTopicDiv += "<p class='text-muted'>" + "Off Topic Read " + (i+1) + "</p>";
                                offTopicDiv += "</div>";
                            }
                            $('.offtopics').append(offTopicDiv);

                            // now, for the assignment Extras
                            $('.extras').children('.assignment-extra').remove();
                            var extras = response.AssExtra;
                            var extraDiv = "";
                            for(var i=0;i<extras.length;i++) {
                                extraDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 assignment-extra'";
                                if(extras[i] == undefined || extras[i] == "undefined" || extras[i] == "") {
                                    extraDiv += "data-url='" + "" +  "'>";
                                }
                                else {
                                    extraDiv += "data-url='" + extras[i] +  "'>";
                                }
                                extraDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-word-o fa-stack-1x fa-inverse'></i></span>";
                                extraDiv += "<p class='text-muted'>" + "Extra Material " + (i+1) + "</p>";
                                extraDiv += "</div>";
                            }
                            $('.extras').append(extraDiv);

                        },
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }  // end of else.
                return false;
            });   // end of delegate function of the assigment ddl in CRP.
            // for the delegate function of the lecture videos.
            $('.videos').delegate('.assignment-video', 'click', function() {
                var url = $(this).attr('data-url');
                if(url == "" || url == undefined) {
                    alert("No defined.");
                }
                else {
                    $('#lecture-video-modal-body').html("<iframe src='" + url + "'></iframe>");
                    $('#lectureVideoModal').modal('show');  
                }

                // to hide the modal on click of the hide buttin
                $('#lectureVideoModal').on('hide.bs.modal', function (event) {
                    // for pausing the video that is playing.
                    var iframe = $('#lecture-video-modal-body').children('iframe');
                    iframe.attr('src', iframe.attr('src'));
                });

                return false;
            });
            // for the delegate function of the lecture Sample Reports
            $('.reports').delegate('.assignment-report', 'click', function() {
                var url = $(this).attr('data-url');
                if(url == "" || url == undefined) {
                    alert("No defined.");
                }
                else {
                    window.open(url, "_blank");
                }
                return false;
            });
            // for the delegate function of the lecture Off Topic Reads
            $('.offtopics').delegate('.assignment-offtopic', 'click', function() {
                var url = $(this).attr('data-url');
                if(url == "" || url == undefined) {
                    alert("No defined.");
                }
                else {
                    window.open(url, "_blank");
                }
                return false;
            });
            // for the delegate function of the lecture Off Topic Reads
            $('.extras').delegate('.assignment-extra', 'click', function() {
                var url = $(this).attr('data-url');
                if(url == "" || url == undefined) {
                    alert("No defined.");
                }
                else {
                    window.open(url, "_blank");
                }
                return false;
            });

            // for the adding of the quizzes.
            $('.quiz').on('click', function() {
                showDiv($('.quiz-div'));
                changeActiveState($(this).parent('li'));

                // for showing the correct tab on the quiz page.
                $('#quiz-tab').tab('show');
                $('#quiz-tab a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                });

                // to get the courses and the assignments on the add Quiz page.                
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        // to show the courses drop down at appropriate place.
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                        }
                        else {
                            $('.quiz-course').children('select').remove();
                            $('.quiz-course').append(response);
                        }
                    }, 
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
                return false;
            });   // end of Quiz link on the LHS.
            // to get the assignments on the Quiz Page on change of the course.
            $('.quiz-div').delegate('#ddl-course', 'change', function() {
                var courseId = $(this).val();
                if(courseId == "" || courseId == "undefined" || courseId == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Please select the course properly or try again.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "10", courseAssPDF: courseId
                        },
                        success: function(response) {
                            // to show the assignments drop down at appropriate place.
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>We could not retrieve your assignments from the database. Please check your internet connection and try again.</p>").fadeIn();                             
                            }
                            else if(response == "-2") {
                                popup.children('p').remove();
                                popup.append("<p>You have not been assigned any courses. Please try again or contact your mentor.</p>").fadeIn();                               
                            }
                            else {
                                $('.quiz-assignment').children('select').remove();
                                $('.quiz-assignment').append(response);
                            }
                        }, 
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of ajax.
                }  // end of else.
                return false;    
            });  // end of the course delegate function.

            // for the submit event of the basic course form.
            $('#form-add-basic-quiz').submit(function() {
                var email = $.cookie("email");
                var id = $.cookie("id");

                var courseId = $('.quiz-course').children('select').val();
                var assId = $('.quiz-assignment').children('select').val();

                var quizName = $('#txtQuizName').val();
                var deadline = $('#txtQuizDeadline').val();

                // to get all the questions.
                var question = [$('#txtQ1').val().replace(/['"]/g, ''), $('#txtQ2').val().replace(/['"]/g, ''), $('#txtQ3').val().replace(/['"]/g, ''), $('#txtQ4').val().replace(/['"]/g, ''), $('#txtQ5').val().replace(/['"]/g, '')];
                var jsonQues = JSON.stringify(question);

                // to get all the options.
                var options = [];
                $.each($('.ans-op'), function() {
                    options.push($(this).val());
                });
                var jsonOp = JSON.stringify(options);

                // to get all the answers selected.
                var ans = [];
                $.each($('.ans-radio'), function() {
                    var item = $(this).is(':checked');
                    if(item == true) {   // for all the checked radio buttons.
                        ans.push($(this).attr('for'));
                    }
                });
                var j = "";
                var answers = [];
                for(var i=0;i<ans.length;i++) {
                    j = "";
                    j += "#" + ans[i];
                    answers.push($(j).val().replace(/['"]/g, ''));
                }
                jsonAns = JSON.stringify(answers);

                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login and try again.</p>").fadeIn();
                }
                else if(quizName == "" || deadline == "") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you missed either the Quiz Name or Quiz Deadline. Please recheck and try again.</p>");
                }
                else {
                    // make the ajax request to save the quiz details nd questions
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "34", courseId: courseId, assId: assId, quizName: quizName, deadline: deadline, questions: jsonQues, answers: jsonAns, options: jsonOp
                        },
                        success: function(response) {
                            console.log(response);
                            var r = response.split(" ~ ");
                            if(r[0] == "1" && r[1] == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Quiz Added Successfully. Thank You.</p>").fadeIn();
                            }
                            else if(r[0] == '-1') {
                                popup.children('p').remove();
                                popup.append("<p>The Quiz wasn't registered. Please try again.</p>").fadeIn();
                            }
                            else if(r[0] == "1" && r[1] == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! The quiz was registered, but we could not upload the questions. Please contact the administrator(s).</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error adding the Quiz. Please try again.</p>").fadeIn();   
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });  //end of submit function.

            // ------------------ adding advanced quiz ------------------
            $('#form-add-advanced-quiz').submit(function() {
                var email = $.cookie("email");
                var id = $.cookie("id");

                var courseId = $('.quiz-course').children('select').val();
                var assId = $('.quiz-assignment').children('select').val();

                var quizName = $('#txtQuizName').val();
                var deadline = $('#txtQuizDeadline').val();

                // to get all the questions.
                var question = [ $('#txtadvQ1').val().replace(/['"]/g, ''), $('#txtadvQ2').val().replace(/['"]/g, ''), $('#txtadvQ3').val().replace(/['"]/g, ''), $('#txtadvQ4').val().replace(/['"]/g, ''), $('#txtadvQ5').val().replace(/['"]/g, '')];
                var jsonQues = JSON.stringify(question);

                var answer = [$('#txtAdvA1').val().replace(/['"]/g, ''), $('#txtAdvA2').val().replace(/['"]/g, ''), $('#txtAdvA3').val().replace(/['"]/g, ''), $('#txtAdvA4').val().replace(/['"]/g, ''), $('#txtAdvA5').val().replace(/['"]/g, '')];
                var jsonAns = JSON.stringify(answer);

                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login and try again.</p>").fadeIn();
                }
                else if(quizName == "" || deadline == "") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you missed either the Quiz Name or Quiz Deadline. Please recheck and try again.</p>");
                }
                else {
                    // make the ajax request for adding the Advanced Quiz here.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "45", courseId: courseId, assId: assId, quizName: quizName, deadline: deadline, questions: jsonQues, answers: jsonAns
                        },
                        success: function(response) {
                            console.log(response);
                            var r = response.split(" ~ ");
                            if(r[0] == "1" && r[1] == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Quiz Added Successfully. Thank You.</p>").fadeIn();
                            }
                            else if(r[0] == '-1') {
                                popup.children('p').remove();
                                popup.append("<p>The Quiz wasn't registered. Please try again.</p>").fadeIn();
                            }
                            else if(r[0] == "1" && r[1] == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! The quiz was registered, but we could not upload the questions. Please contact the administrator(s).</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error adding the Quiz. Please try again.</p>").fadeIn();   
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });

            // ------------------ mentee-status ------------------

            // for the mentee status link on the LHS.
            $('.status').on('click', function() {
                showDiv($('.status-div'));
                changeActiveState($(this).parent('li'));
                // firstly, get the courses and assignments for the admin page.
                // to get all the courses as a drop down list
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        // to show the courses drop down at appropriate place.
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                        }
                        else {
                            $('.mentee-status-course').children('select').remove();
                            $('.mentee-status-course').append(response);
                        }
                    }, 
                    error: function() {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });   // end of courses dll
                
                return false;
            });  // end of on-click event of status on LHS.
            // for the delegate function of course in mentee status tab.
            $('.status-div').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected the course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {
                    // to get all the assignments as a drop down list
                    var courseId = $(this).val();
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "10", courseAssPDF: courseId
                        },
                        success: function(response) {
                            // to show the assignments drop down at appropriate place.
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>We could not retrieve the assignments from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                            }
                            else {
                                $('.mentee-status-assignment').children('select').remove();
                                $('.mentee-status-assignment').append(response);
                            }
                        }, 
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }   // end of else.
                return false;
            });    // end of delegate event for getting the assignments from course.
            // for the change event of the assignment drop down list.
            $('.status-div').delegate('#ddl-assignment', 'change', function() {
                var assId = $(this).val();
                $('.mentee-status-div').children('table, h4').remove();
                if(assId == "-1" || assId == "undefined" || assId == undefined || assId == "") {
                    popup.children('p').remove();
                    popup.append("<p>Please select an Assignment before continuing.</p>").fadeIn();
                }
                else {
                    // to get the mentee statuses of all the mentees, filtered by course and assignment.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "40", assId: assId
                        },
                        success: function(response) {
                            console.log(response);
                            if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Submission/Feedback Records found.</p>").fadeIn();
                            }
                            else if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();      
                            }
                            else {
                                $('.mentee-status-div').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of ajax request.
                }  // end of else.
                return false;
            });   // end of the delegate change event of assignment ddl.

            // ------------------ evaluate quizzes ------------------
            $('.evaluate').on('click', function() {
                showDiv($('.evaluate-div'));
                changeActiveState($(this).parent('li'));

                $('.evaluate-div').children('.mentee-quiz-status-div').remove();   // remove the previous results.

                // to get all the courses as a drop down list
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        // to show the courses drop down at appropriate place.
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                        }
                        else {
                            $('.evaluate-course').children('select').remove();
                            $('.evaluate-course').append(response);
                        }
                    }, 
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
                return false;
            });
            // to get the assignments on change of courses drop down.
            $('.evaluate-div').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected the course. Please do so before continuing.</p>").fadeIn();
                }
                else {
                    // to get all the assignments as a drop down list
                    var courseAssPDF = $(this).val();
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "10", courseAssPDF: courseAssPDF
                        },
                        success: function(response) {
                            // to show the assignments drop down at appropriate place.
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>We could not retrieve the assignments from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                            }
                            else {
                                $('.evaluate-assignment').children('select').remove();
                                $('.evaluate-assignment').append(response);
                                $('.evaluate-quiz').children('select').remove();
                            }
                        }, 
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }   // end of else.
                return false;
            });    // end of delegate for courseAssPDF
            // to get the quizzes for the selected assignments
            $('.evaluate-div').delegate('#ddl-assignment', 'change', function() {

                // remove the quizzes drop down first
                $('.evaluate-quiz').children('select').remove();

                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected the Assignment. Please do so before continuing.</p>").fadeIn();
                }
                else {
                    var assId = $(this).val();
                    var courseId = $('.evaluate-course').children('select').val();

                    // to get the quizes from the db, filtered by assId and courseId
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "48", assId: assId, courseId: courseId
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>We could not retrieve the Quizzes from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Quizzes for the selected Course and Assignment. </p>").fadeIn();                                 
                            }
                            else {
                                $('.evaluate-quiz').children('select').remove();
                                $('.evaluate-quiz').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });  // end of delegate() of assignments.
            // for the change event of the quizzes drop down
            $('.evaluate-div').delegate('#ddl-quiz', 'change', function() {

                // remove the previous mentee records first.
                $('.evaluate-div').children('.mentee-quiz-status-div').remove();

                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected the Quiz. Please do so before continuing.</p>").fadeIn();
                }
                else {
                    var quizId = $(this).val();
                    var courseId = $('.evaluate-course').children('select').val();
                    var assId = $('.evaluate-assignment').children('select').val();

                    //to get all the mentees and their answers.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "49", assId: assId, courseId: courseId, quizId: quizId
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>We could not retrieve the requested information from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No submissions found for this Quiz. Please try again.</p>").fadeIn();                              
                            }       
                            else {
                                $('.evaluate-div').children('.mentee-quiz-status-div').remove();
                                $('.evaluate-div').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });   // end of delegate() for Quiz
            // for the evaluate button for each of the mentees.
            $('.evaluate-div').delegate('.btnEvaluate', 'click', function() {
                var quizId = $(this).attr('data-quiz');
                var assId = $(this).attr('data-assignment');
                var menteeId = $(this).attr('data-mentee');
                var courseId = $(this).attr('data-course');

                if(quizId == undefined || quizId == "undefined" || quizId == "-1" || assId == undefined || assId == "undefined" || assId == "-1" || courseId == undefined || courseId == "undefined" || courseId == "-1" || menteeId == undefined || menteeId == "undefined" || menteeId == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Oops! We encountered an internal error. Please refresh the page and try again.</p>").fadeIn();
                }
                else {
                    // make an ajax request to update the score.
                    var score = $('#' + menteeId).val();
                    if(score > 5 || score <= -2) {
                        popup.children('p').remove();
                        popup.append("Abbey! chutiya hai kya?! BC, 5 se zyada kaise ho sakta hai?.. Can you please bang your head on your screen?! *Pretty please* :/ ").fadeIn();
                    }
                    else {
                        showLoading();
                        $.ajax({
                            type: "GET",
                            url: "AJAXFunctions.php",
                            data: {
                                no: "50", assId: assId, courseId: courseId, menteeId: menteeId, quizId: quizId, score: score
                            },
                            success: function(response) {
                                if(response == "-1") {
                                    popup.children('p').remove();
                                    popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                                }
                                else {
                                    popup.children('p').remove();
                                    popup.append("<p>Evaluation done successfully. </p>").fadeIn();    
                                }
                            },
                            error: function() {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                            },
                            complete: function() {
                                hideLoading();
                            }
                        });
                    }
                }   // end of else.

                return false;
            });   // end of the click event of btnEvaluate

            // for adding the team members
            $('.team').on('click', function() {
                showDiv($('.team-div'));
                changeActiveState($(this).parent('li'));

                var email = $.cookie("email");
                var id = $.cookie("id");

                // firstly, get the list of all the mentors first.
                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login and try again.</p>").fadeIn();
                }
                else {
                    
                    // for getting the organisation and course ddls.
                    showLoading();
                    // $.ajax({
                    //     type: "GET",
                    //     url: "AJAXFunctions.php",
                    //     data: {
                    //         no: "6"
                    //     },
                    //     success: function(response) {
                    //         // to show the courses drop down at appropriate place.
                    //         if(response == "-1") {
                    //             popup.children('p').remove();
                    //             popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                    //         }
                    //         else {
                    //             $('.add-team-course').children('select').remove();
                    //             $('.add-team-course').append(response);
                    //         }
                    //     }, 
                    //     error: function() {
                    //         alertMsg.children('p').remove();
                    //         alertMsg.fadeOut();
                    //         popup.children('p').remove();
                    //         popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    //     }
                    // });
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "3"
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                            }
                            else {

                                $('.add-team-organ').children('select').remove();
                                $('.add-team-organ').append(response);
                            }
                        },
                        error: function() {
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of second ajax request

                }   // end of else
                return false;
            });

            // for the change event of the organisation ddl
            $('.team-div').delegate('#ddl-organisation', 'change', function() { 
                // remove the course ddl here and get a new one.
                $('.add-team-course').children('select').remove();
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        // to show the courses drop down at appropriate place.
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                        }
                        else {
                            $('.add-team-course').children('select').remove();
                            $('.add-team-course').append(response);
                        }
                    }, 
                    error: function() {
                        alertMsg.children('p').remove();
                        alertMsg.fadeOut();
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });

                return false;
            });

            // to show the list of mentors based on course and organ selection.
            $('.team-div').delegate('#ddl-course', 'change', function() {
                var organ = $('.add-team-organ').children('select').val();
                var course = $('.add-team-course').children('select').val();

                if(organ == "-1" || course == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected either organisation or course. Please do so before continuing.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "29", organ: organ, course: course
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Mentors found in the database. Please try again.</p>").fadeIn();   
                            }
                            else {
                                $('.add-team-mentor').children('select').remove();
                                $('.add-team-mentor').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }  // end of else
                return false;
            });

            // to show the list of mentees when the mentor is selected.
            $('.team-div').delegate('#ddl-mentor', 'change', function() { 
                var mentorId = $(this).val();

                var email = $.cookie("email");
                var id = $.cookie("id");

                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login and try again.</p>").fadeIn();
                }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "26", email: "", id: mentorId
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No mentees for the selected mentor</p>").fadeIn();       
                            }
                            else {
                                $('.add-team-mentee').children('select').remove();
                                $('.add-team-mentee').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });

            // for submitting the form containing the email address of the mentee's team member
            $('#add-team-member').submit(function() {
                var email = $.cookie("email");
                var id = $.cookie("id");

                var course = $('.add-team-course').children('select').val();
                var organ = $('.add-team-organ').children('select').val();
                var mentor = $('.add-team-mentor').children('select').val();
                var primary = $('.add-team-mentee').children('select').val();
                var secondaryEmail = $('#txtTeamMember').val().trim();

                // get all the parameters from the ddl lists and save the new team member
                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login and try again.</p>").fadeIn();
                }
                else {
                    if(course == "-1" || organ == "-1" || mentor == "-1" || primary == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>Looks like you have not selected the paramtered properly. Please do so and try again.</p>").fadeIn();
                    } 
                    else {
                        showLoading();
                        $.ajax({
                            type: "GET",
                            url: "AJAXFunctions.php",
                            data: {
                                no: "51", primaryUser: primary, secondaryUser: secondaryEmail
                            },
                            success: function(response) {
                                alert(response);
                                if(response == "-1") {
                                    popup.children('p').remove();
                                    popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                                }
                                else {
                                    popup.children('p').remove();
                                    popup.append("<p>Team member has been added. Thank You.</p>").fadeIn();
                                }
                            },
                            error: function() {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();
                            },
                            complete: function() {
                                hideLoading();
                            }
                        });
                    }   // end of inner else.
                }   // end of else
                return false; 
            });   // end of form submit

            // for adding the alternate mentors to the table.
            $('.alternate-mentor').on('click', function() {
                showDiv($('.alternate-mentor-div'));
                changeActiveState($(this).parent('li'));

                // to get all the courses as a drop down list
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "6"
                    },
                    success: function(response) {
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>We could not retrieve the courses from the database. Please check your internet connection and try again.</p>").fadeIn();                              
                        }
                        else {
                            $('.alternate-mentor-course').children('select').remove();
                            $('.alternate-mentor-course').append(response);
                        }
                    }, 
                    error: function() {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
                return false;
            });

            // for the form submit event of the alternate-mentor form.
            $('#form-add-alternate-mentor').submit(function() {

                var name = $('#txt-alternate-mentor-name').val().trim();
                var email = $('#txt-alternate-mentor-email').val().trim();
                var contact = $('#txt-alternate-mentor-contact').val().trim();
                var profile = $('#txt-alternate-mentor-profile').val().trim();

                var course = $('.alternate-mentor-course').children('select').val();
                if(course == "-1" || course == "0" || course == "undefined" || course == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Please select the course before adding the mentor</p>").fadeIn(); 
                } 
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "55", name: name, email: email, contact: contact, profile: profile, course: course
                        },
                        success: function(response) {
                            console.log(response);
                            if(response == "1") {
                                popup.children('p').remove();
                                popup.append("<p>Alternate Mentor has been added successfully.</p>").fadeIn();     
                            } 
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();     
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }
                return false;
            });

            // hide all the divs on page load. Except for first div.
            $('.main-div').hide();
            $('.CRP').trigger('click');

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
        <div class="overlay-img">
            <img src="img/load.gif" />
        </div>
	</div>

	<div class="overlay-remove" id="overlay-error">
	</div>

    <div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
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
                <a class="navbar-brand page-scroll" href="#page-top">Mentored-Research</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#page-top"></a>
                    </li>
                    <li>
                    	<a href="#" class="btnLogout">Logout</a>
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

                <i class="fa fa-remove fa-lg hidden-lg hidden-md" id="btnCloseMenu"></i>

                <ul class="nav nav-sidebar">
                    <li><a href="#" class="CRP">Central Resources</a></li>
                	<li><a href="#" class="dashboard">Admin Dashboard</a></li>
                    <li><a href="#" class="status">Mentee Status</a></li>
                    <li><a href="#" class="profile">Profile</a></li>
                    <li><a href="#" class="password">Change Password</a></li>
					<li><a href="#" class="invite">Send Invites</a></li>                    
                </ul>
                <ul class="nav nav-sidebar">
            		<li><a href="#" class="course">Add a Course</a></li>
            		<li><a href="#" class="organisation">Add an organisation</a></li>
            		<li><a href="#" class="calender">Add Course Calendar</a></li>
            		<li><a href="#" class="guide">Add Guides &amp; Documents</a></li>
                    <li><a href="#" class="alternate-mentor">Add Alternate Mentors</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="assignment">Add Assignment Details</a></li>
                	<li><a href="#" class="assignmentPDF">Add Assignment Material</a></li>
                    <!-- <li><a href="#" class="update-assignment">Update Assignment Material</a></li> -->
                    <li><a href="#" class="assign-mentee">Assign Mentees</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="user">Add User</a></li>
                    <li><a href="#" class="quiz">Add Quiz</a></li>
                    <li><a href="#" class="evaluate">Evaluate Quizzes</a></li>
                    <li><a href="#" class="team">Add Team(s)</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    
                </ul>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block menu-show" id="btnShowMenu">
        	Menu
        </button>

        <!-- for adding the alternate mentors -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div alternate-mentor-div">
            <h1 class="page-header">
                Add Alternate Mentor(s)
            </h1>

            <form id="form-add-alternate-mentor">
                <table class="table">
                    <tr>
                        <td>
                            <label>Select Course: </label>
                        </td>
                        <td class="alternate-mentor-course">
                            <!-- data will come from ajax here -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mentor Name: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="txt-alternate-mentor-name" placeholder="Enter Mentor's Name" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mentor Email: </label>
                        </td>
                        <td>
                            <input type="email" class="form-control" id="txt-alternate-mentor-email" placeholder="Enter Mentor's Email" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mentor Contact: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="txt-alternate-mentor-contact" placeholder="Enter Mentor's Contact" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mentor Profile: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="txt-alternate-mentor-profile" placeholder="Enter Mentor's Profile" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" id="btn-alternate-mentor-submit" value="Add Mentor" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- for adding the teams and team members -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div team-div">
            <h1 class="page-header">
                Add Team(s)
            </h1>

            <table class="table" id="table-add-team">
                 <tr>
                    <td>
                        <label>Select Organisation: </label>
                    </td>
                    <td class="add-team-organ">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Select Course: </label>
                    </td>
                    <td class="add-team-course">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Mentor: </label>
                    </td>
                    <td class="add-team-mentor">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Mentee: </label>
                    </td>
                    <td class="add-team-mentee">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
            </table>

            <br />

            <form id="add-team-member">
                <table class="table">
                    <tr>
                        <td>
                            <label>Enter Team Member's Email</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" placeholder="Enter Team Member's Email" class="form-control" id="txtTeamMember" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-lg btn-primary btn-block" id="btnAddTeamMember" value="Add Member" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- for evaluating the quizzes submitted by the mentees -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div evaluate-div">
            <h1 class="page-header">
                Evaluate Quiz
            </h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Course: </label>
                    </td>
                    <td class="evaluate-course">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>
                    <td class="evaluate-assignment">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Quiz: </label>
                    </td>
                    <td class="evaluate-quiz">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
            </table>

            <!-- data will come in another table for each of the mentee and their answers -->

        </div>   <!-- end of evaluate div -->

        <!-- for showing the statuses of the mentees under the mentor -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div status-div">
            <h1 class="page-header">
                Mentee Status
            </h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Course: </label>
                    </td>
                    <td class="mentee-status-course">
                        <!-- data will come from ajax here -->            
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>
                    <td class="mentee-status-assignment">
                        <!-- data will come from ajax here -->            
                    </td>
                </tr>
            </table>

            <div class="mentee-status-div">
                <!-- data will come from ajax here -->
            </div>   <!-- end of mentee-status-div -->
        </div>   <!-- end of status-div -->

        <!-- for adding the quiz --> 
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div quiz-div">
            <h1 class="page-header">
                Add Quiz
            </h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Course: </label>
                    </td>
                    <td class="quiz-course">
                        <!-- data will come from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>
                    <td class="quiz-assignment">
                        <!-- data will come from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Quiz Name: </label>
                    </td>
                    <td>
                        <input type="text" id="txtQuizName" class="form-control" placeholder="Enter Quiz Name" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Quiz Deadline: </label>
                    </td>
                    <td>
                        <input type="text" id="txtQuizDeadline" class="form-control" placeholder="mm/dd/yyyy" required />
                    </td>
                </tr>
            </table>

            <!-- for the Basic and Advanced Tabs on the quiz page -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#basic" id="quiz-tab" aria-controls="basic" role="tab" data-toggle="tab">Basic Quiz</a></li>
                <li role="presentation"><a href="#advanced" aria-controls="advanced" role="tab" data-toggle="tab">Advanced Quiz</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="basic">
                    <form id="form-add-basic-quiz">
                        <table class="table">
                            <tr>
                                <td>
                                    <textarea id="txtQ1" class="form-control" placeholder="Question No. 1" rows="8"></textarea>
                                </td>
                                <td>
                                    <input type="radio" name="answer1" for="ans11" class="ans-radio" />
                                    <input type="text" id="ans11" class="form-control ans-op" placeholder="Option 1 for Question 1"  />
                                    <input type="radio" name="answer1" for="ans12" class="ans-radio" />
                                    <input type="text" id="ans12" class="form-control ans-op" placeholder="Option 2 for Question 1"  />
                                    <input type="radio" name="answer1" for="ans13" class="ans-radio" />
                                    <input type="text" id="ans13" class="form-control ans-op" placeholder="Option 3 for Question 1"  />
                                    <input type="radio" name="answer1" for="ans14" class="ans-radio" />
                                    <input type="text" id="ans14" class="form-control ans-op" placeholder="Option 4 for Question 1"  />
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <textarea id="txtQ2" class="form-control" placeholder="Question No. 2" rows="8"></textarea>
                                </td>
                                <td>
                                    <input type="radio" name="answer2" for="ans21" class="ans-radio" />
                                    <input type="text" id="ans21" class="form-control ans-op" placeholder="Option 1 for Question 2"  />
                                    <input type="radio" name="answer2" for="ans22" class="ans-radio" />
                                    <input type="text" id="ans22" class="form-control ans-op" placeholder="Option 2 for Question 2"  />
                                    <input type="radio" name="answer2" for="ans23" class="ans-radio" />
                                    <input type="text" id="ans23" class="form-control ans-op" placeholder="Option 3 for Question 2"  />
                                    <input type="radio" name="answer2" for="ans24" class="ans-radio" />
                                    <input type="text" id="ans24" class="form-control ans-op" placeholder="Option 4 for Question 2"  />
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <textarea id="txtQ3" class="form-control" placeholder="Question No. 3" rows="8" ></textarea>
                                </td>
                                <td>
                                    <input type="radio" name="answer3" for="ans31" class="ans-radio"/>
                                    <input type="text" id="ans31" class="form-control ans-op" placeholder="Option 1 for Question 3"  />
                                    <input type="radio" name="answer3" for="ans32" class="ans-radio" />
                                    <input type="text" id="ans32" class="form-control ans-op" placeholder="Option 2 for Question 3"  />
                                    <input type="radio" name="answer3" for="ans33" class="ans-radio"/>
                                    <input type="text" id="ans33" class="form-control ans-op" placeholder="Option 3 for Question 3"  />
                                    <input type="radio" name="answer3" for="ans34" class="ans-radio" />
                                    <input type="text" id="ans34" class="form-control ans-op" placeholder="Option 4 for Question 3"  />
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <textarea id="txtQ4" class="form-control" placeholder="Question No. 4" rows="8"></textarea>
                                </td>
                                <td>
                                    <input type="radio" name="answer4" for="ans41" class="ans-radio" />
                                    <input type="text" id="ans41" class="form-control ans-op" placeholder="Option 1 for Question 4"  />
                                    <input type="radio" name="answer4" for="ans42" class="ans-radio" />
                                    <input type="text" id="ans42" class="form-control ans-op" placeholder="Option 2 for Question 4"  />
                                    <input type="radio" name="answer4" for="ans43" class="ans-radio"/>
                                    <input type="text" id="ans43" class="form-control ans-op" placeholder="Option 3 for Question 4"  />
                                    <input type="radio" name="answer4" for="ans44" class="ans-radio" />
                                    <input type="text" id="ans44" class="form-control ans-op" placeholder="Option 4 for Question 4"  />
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <textarea id="txtQ5" class="form-control" placeholder="Question No. 5" rows="8"></textarea>
                                </td>
                                <td>
                                    <input type="radio" name="answer5" for="ans51" class="ans-radio" />
                                    <input type="text" id="ans51" class="form-control ans-op" placeholder="Option 1 for Question 5"  />
                                    <input type="radio" name="answer5" for="ans52" class="ans-radio" />
                                    <input type="text" id="ans52" class="form-control ans-op" placeholder="Option 2 for Question 5"  />
                                    <input type="radio" name="answer5" for="ans53" class="ans-radio" />
                                    <input type="text" id="ans53" class="form-control ans-op" placeholder="Option 3 for Question 5"  />
                                    <input type="radio" name="answer5" for="ans54" class="ans-radio" />
                                    <input type="text" id="ans54" class="form-control ans-op" placeholder="Option 4 for Question 5"  />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Add Basic Quiz" class="btn btn-lg btn-primary btn-block" id="btnAddBasicQuiz" />
                                </td>
                            </tr>
                        </table> 
                    </form>
                </div>  <!-- end of Add Director -->

                <div role="tabpanel" class="tab-pane active" id="advanced">
                    <form id="form-add-advanced-quiz">
                        <table class="table">
                            <tr>
                                <td>
                                    <textarea id="txtadvQ1" class="form-control" placeholder="Advanced Question no. 1" rows="6"></textarea>
                                </td>
                                <td>
                                    <input type="text" id="txtAdvA1" placeholder="Advanced Answer 1" class="form-control" />
                                </td>   
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="txtadvQ2" class="form-control" placeholder="Advanced Question no. 2" rows="6"></textarea>
                                </td>
                                <td>
                                    <input type="text" id="txtAdvA2" placeholder="Advanced Answer 2" class="form-control" />
                                </td>   
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="txtadvQ3" class="form-control" placeholder="Advanced Question no. 3" rows="6"></textarea>
                                </td>
                                <td>
                                    <input type="text" id="txtAdvA3" placeholder="Advanced Answer 3" class="form-control" />
                                </td>   
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="txtadvQ4" class="form-control" placeholder="Advanced Question no. 4" rows="6"></textarea>
                                </td>
                                <td>
                                    <input type="text" id="txtAdvA4" placeholder="Advanced Answer 4" class="form-control" />
                                </td>   
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="txtadvQ5" class="form-control" placeholder="Advanced Question no. 5" rows="6"></textarea>
                                </td>
                                <td>
                                    <input type="text" id="txtAdvA5" placeholder="Advanced Answer 5" class="form-control" />
                                </td>   
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" id="btnAddAdvancedQuiz" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>  <!-- end of Add Director -->
            </div>   <!-- end of the enclosing tab-content div -->

        </div>   <!-- end of the quiz-div -->

        <!-- for the central resource page -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div CRP-div">
            <h1 class="page-header">
                Central Resource Page
            </h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Course: </label>
                    </td>
                    <td class="course-crp">
                        <!-- data will come here from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>
                    <td class="assignment-crp">
                        <!-- data will come here from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Assignment Name: </label>
                    </td>
                    <td class="assignment-name">
                        <!-- data will come here from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Assignment Description: </label>
                    </td>
                    <td class="assignment-desc">
                        <!-- data will come here from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Assignment Posted On: </label>
                    </td>
                    <td class="assignment-postedon">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Assignment Deadline: </label>
                    </td>
                    <td class="assignment-deadline">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Assignment Question: </label>
                    </td>
                    <td class="assignment-question">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
            </table>

            <!-- for assignment videos -->
            <div class="row text-center videos">
                <h3 class="page-header">
                    Assignment Video Lectures
                </h3>
                <!-- data will come from ajax here -->
            </div>

            <!-- for assignment Sample Reports -->
            <div class="row text-center reports">
                <h3 class="page-header">
                    Assignment Sample Reports
                </h3>
                <!-- data will come from ajax here -->
            </div>

            <!-- for assignment Off Topics -->
            <div class="row text-center offtopics">
                <h3 class="page-header">
                    Assignment Off Topic Reads
                </h3>
                <!-- data will come from ajax here -->
            </div>

            <!-- for assignment Extras -->
            <div class="row text-center extras">
                <h3 class="page-header">
                    Assignment Extras
                </h3>
                <!-- data will come from ajax here -->
            </div>
            
        </div>  <!-- end of CRP-div -->


        <!-- for the assign mentees div -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div assign-mentee-div">
            <h1 class="page-header">
                Assign Mentees
            </h1>

            <form id="formAssignMentee">
                <table class="table">
                    <tr>
                        <td>
                            <label>Select Organisation: </label>
                        </td>
                        <td class="assign-mentee-organ">
                            <!-- from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Select Course: </label>
                        </td>
                        <td class="assign-mentee-course">
                            <!-- from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Select Mentor: </label>
                        </td>
                        <td class="assign-mentee-mentor">
                            <!-- from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Select Mentees: </label>
                        </td>
                        <td class="assign-mentee-mentee">
                            <!-- from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Assign Mentees" class="btn btn-lg btn-primary btn-block" id="btnAssignMentee" />
                        </td>
                    </tr>
                </table>
            </form>

        </div>  <!-- end of assign-mentees div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div invite-div">
            <h1 class="page-header">
                Send Invites
            </h1>
            <form id="formSendInvite">
                <table class="table">
                	<tr>
                		<td style="max-width: 30%;width: 30%;">
                			<label for="txtSendInvite">Add Email address, separated by commas: </label>
                		</td>
                    	<td>
                    		<textarea id="txtSendInvite" class="form-control" placholder="Enter the list of Email Addresses, seprarated by commas" rows="8" required></textarea>
                    	</td>
                    </tr>
                	<tr>
                		<td style="max-width: 30%;width: 30%;">
                			<label for="txtSendInviteMsg">Add your comment to be shown above the coupon: </label>
                		</td>
                		<td>
                    		<textarea id="txtSendInviteMsg" class="form-control" placholder="Write a line for the invite to be sent to the user..." rows="10"></textarea>
                    	</td>
                	</tr>
                    <tr>
                    	<td colspan="2">
                    		<input type="submit" value="Send Invite(s)" class="btn btn-lg btn-block btn-primary" />
                    	</td>
                    </tr>
                </table>
            </form>
        </div>  <!-- end of invite send div -->

          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div password-div">
            <h1 class="page-header">
                Change Password
            </h1>
            <form id="formChangePassword">
                <table class="table">
                    <tr>
                        <td>
                            <label>Enter Old Password: </label>
                        </td>
                        <td>
                            <input type="password" id="txtOldPassword" class="form-control" placeholder="Old Password" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Enter New Password: </label>
                        </td>
                        <td>
                            <input type="password" id="txtNewPassword" class="form-control" placeholder="New Password" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Confirm New Password: </label>
                        </td>
                        <td>
                            <input type="password" id="txtNewPasswordConfirm" class="form-control" placeholder="Confirm New Password" required />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Change Password" class="btn btn-lg btn-primary btn-block" id="btnChangePassword" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>  <!-- end of change-password div -->

        <!-- div for adding the users -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div user-div">
	        <h1 class="page-header">
	        	Add Users
	        </h1>

            <ul class="nav nav-tabs nav-justified" role="tablist">
				<li role="presentation" class="active"><a href="#director" id="director-tab" aria-controls="director" role="tab" data-toggle="tab">Add Director</a></li>
				<li role="presentation"><a href="#mentor" aria-controls="mentor" role="tab" data-toggle="tab">Add Mentor</a></li>
				<li role="presentation"><a href="#mentee" aria-controls="mentee" role="tab" data-toggle="tab">Add Mentee</a></li>
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="director">
					<form id="form-add-director">
						<table class="table">
							<tr>
								<td>
									<label>Select Organisation: </label>
								</td>
								<td class="add-director-organ">
									<!-- data from ajax -->
								</td>
							</tr>
							<tr>
								<td>
									<label>Director Email Address: </label>
								</td>
								<td>
									<input type="email" placeholder="Director Email Address" id="txtAddDirector" class="form-control" required />
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" value="Add Director" class="btn btn-lg btn-primary btn-block" />
								</td>
							</tr>
						</table>
					</form>
				</div>  <!-- end of Add Director -->
				<div role="tabpanel" class="tab-pane" id="mentor">
					<form id="form-add-mentor">
						<table class="table">
							<tr>
								<td>
									<label>Select Organisation: </label>
								</td>
								<td class="add-mentor-organ">
									<!-- data from ajax -->
								</td>
							</tr>
							<tr>
								<td>
									<label>Select Course: </label>
								</td>
								<td class="add-mentor-course">
									<!-- data from ajax -->
								</td>
							</tr>
							<tr>
								<td>
									<label>Mentor Email Address: </label>
								</td>
								<td>
									<input type="email" placeholder="Mentor Email Address" id="txtAddMentor" class="form-control" required/>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" value="Add Mentor" class="btn btn-lg btn-primary btn-block" />
								</td>
							</tr>
						</table>
					</form>

                    <!-- for adding the mentee through the excel sheets -->
                    <form id="form-add-mentor-excel" action="userMentor-upload.php" method="post" enctype="multipart/form-data">
                        <h1 class="page-header">
                            Mentor Excel Upload
                        </h1>
                        <table class="table">
                            <tr>
                                <td>
                                    <label>Select File to Upload:</label>
                                </td>
                                <td>
                                    <input type="file" name="fileAddMentor" id="fileAddMentor" class="btn btn-lg btn-primary btn-block" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" id="btnAddMentorExcel" class="btn btn-lg btn-primary btn-block" />
                                </td>
                            </tr>
                        </table>
                    </form>

				</div>   <!-- end of mentor div -->

				<div role="tabpanel" class="tab-pane" id="mentee">
					<form id="form-add-mentee">
						<table class="table">
							<tr>
								<td>
									<label>Select Organisation: </label>
								</td>
								<td class="add-mentee-organ">
									<!-- data from ajax -->
								</td>
							</tr>
							<tr>
								<td>
									<label>Select Course: </label>
								</td>
								<td class="add-mentee-course">
									<!-- data from ajax -->
								</td>
							</tr>
							<tr>
								<td>
									<label>Mentee Email Address: </label>
								</td>
								<td>
									<input type="email" placeholder="Mentee Email Address" id="txtAddMentee" class="form-control" required />
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" value="Add Mentee" class="btn btn-lg btn-primary btn-block" />
								</td>
							</tr>
						</table>
					</form>

                    <!-- for adding the mentee through the excel sheets -->
                    <form id="form-add-mentee-excel" action="userMentee-upload.php" method="post" enctype="multipart/form-data">
                        <h1 class="page-header">
                            Mentee Excel Upload
                        </h1>
                        <table class="table">
                            <tr>
                                <td>
                                    <label>Select File to Upload:</label>
                                </td>
                                <td>
                                    <input type="file" name="fileAddMentee" id="fileAddMentee" class="btn btn-lg btn-primary btn-block" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" id="btnAddMenteeExcel" class="btn btn-lg btn-primary btn-block" />
                                </td>
                            </tr>
                        </table>
                    </form>
				</div>
			</div>
        </div>  <!-- end of add user div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div assignment-div">
	        <h1 class="page-header">
	        	Upload new Assignment
	        </h1>

        	<table class="table">
        		<tr>
        			<td>
        				<label>Select Course: </label>
        			</td>
        			<td class="courselist-assignment">
						        				
        			</td>
        		</tr>
        		<tr>
        			<td>
        				<label>Latest Assignment Number: </label>
        			</td>
        			<td class="latest-ass-no">
        				<!-- data coming from ajax -->				
        			</td>
        		</tr>
        	</table>

        	<form role="form" data-toggle="validator" id="formAssignment">
        		<table class="table">
    				<tr>
	        			<td>
	        				<label>Assignment Name: </label>
	        			</td>
	        			<td>
	        				<input type="text" id="txtAssName" class="form-control" placeholder="Assignment Name" required />
	        			</td>
	        		</tr>
	        		<tr>
	        			<td>
	        				<label>Assignment Description: </label>
	        			</td>
	        			<td>
	        				<textarea id="txtAssDesc" class="form-control" placeholder="Assignment Description" rows="4" ></textarea> 
	        			</td>
	        		</tr>
	        		<tr>
	        			<td>
	        				<label>Assignment Posted On: </label>
	        			</td>
	        			<td>
	        				<input type="text" id="txtAssPostedOn" class="form-control" placeholder="mm/dd/yyyy" required />
	        			</td>
	        		</tr>
	        		<tr>
	        			<td>
	        				<label>Assignment Deadline: </label>
	        			</td>
	        			<td>
	        				<input type="text" id="txtAssDeadline" class="form-control" placeholder="mm/dd/yyyy" required />
	        			</td>
	        		</tr>
	        		<tr>
	        			<td colspan="2">
	        				<input type="submit" class="btn btn-lg btn-primary btn-block" value="Upload Assignment" id="btnUploadAssignment" />
	        			</td>
	        		</tr>
        		</table>
        	</form>
        </div>   <!-- end of assignment Details div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div assignmentPDF-div">
        	<h1 class="page-header">
        		Add Assignment PDF
        	</h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Course: </label>
                    </td>
                    <td class="course-list-assPDF">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>
                    <td class="assignment-list-assPDF">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
            </table>

        	<form action="assignment-upload-admin.php" method="post" enctype="multipart/form-data" id="form-assignment-pdf">
        		<h3 class="page-header">
    				Upload Assignment PDF
        		</h3>
        		<table class="table">
                    <tr class="hidden">
                        <td class="col-assignment-pdf">
                            <!-- data will come from ajax here -->
                        </td>
                    </tr>
	    			<tr>
	    				<td>
	    					<label>Upload Assignment PDF: </label>
	    				</td>
	    				<td>
	    					<input type="file" name="fileAssignmentPDF" id="fileAssignmentPDF" name="fileAssignmentPDF" class="btn btn-lg btn-primary btn-block" required />
	    				</td>
	    			</tr>
	    			<tr>
	    				<td colspan="2">
	    					<input type="submit"  id="btnSubmitAssignment" value="Upload Assignment PDF" class="btn btn-lg btn-primary btn-block" /> 
	    				</td>
	    			</tr>
	        	</table>
        	</form>

        	<br />

        	<!-- table for Assignment Videos -->
        	<form id="form-ass-video">
		    	<h3 class="page-header">
					Add Video Lectures
	    		</h3>
        		<table class="table">
                    <tr class="hidden">
                        <td class="col-ass-video">
                            <!-- data will come from ajax here -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Add Video Name: </label>
                        </td>
                        <td>
                            <input type="text" placeholder="Video Lecture Name" id="txtAssVideoName" class="form-control" required />
                        </td>
                    </tr>
					<tr>
						<td>
							<label>Add Video Link: </label>
						</td>
						<td>
							<input type="text" placeholder="Video Lecture Link" id="txtAssVideo" class="form-control" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Video Link" id="btnAddAssVideo" />
						</td>
					</tr>
		    	</table>	
        	</form>

        	<br />

        	<!-- table for Assignment Sample Report Upload -->
        	<form action="sample-report-upload.php" method="post" enctype="multipart/form-data" id="form-ass-sample-report">
        		<h3 class="page-header">
    				Upload Sample Reports
        		</h3>
        		<table class="table">
                    <tr class="hidden">
                        <td class="col-ass-sample-report">
                            <!-- data will come from ajax here -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Add Sample Report Name: </label>
                        </td>
                        <td>
                            <input type="text" placeholder="Sample Report Name" id="txtSampleReportName" name="txtSampleReportName" class="form-control" required />
                        </td>
                    </tr>
					<tr>
						<td>
							<label>Upload Sample Report: </label>
						</td>
						<td>
							<input type="file" name="fileAssignmentSampleReport" id="fileAssignmentSampleReport" name="fileAssignmentSampleReport" class="btn btn-lg btn-primary btn-block" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Sample Report" id="btnAddAssSampleReport" />
						</td>
					</tr>
		    	</table>	
        	</form>

        	<br />

        	<!-- table for Assignment Off Topic Upload -->
        	<form action="off-topic-upload.php" method="post" enctype="multipart/form-data" id="form-ass-off-topic">
        		<h3 class="page-header">
    				Upload Off Topic Reads
        		</h3>
        		<table class="table">
                    <tr class="hidden">
                        <td class="col-ass-off-topic">
                            <!-- data will come from ajax here -->
                        </td>
                    </tr>
					<tr>
						<td>
							<label>Upload Off Topic Reads: </label>
						</td>
						<td>
							<input type="file" name="fileAssignmentOffTopic" id="fileAssignmentOffTopic" name="fileAssignmentOffTopic" class="btn btn-lg btn-primary btn-block" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Off Topic Reads" id="btnAddAssOffTopic" />
						</td>
					</tr>
		    	</table>	
        	</form>

        	<br />

        	<!-- table for Assignment Off Topic Upload -->
        	<form action="extra-upload-admin.php" method="post" enctype="multipart/form-data" id="form-ass-extra">
				<h3 class="page-header">
    				Upload Assignment Extras
        		</h3>        	
        		<table class="table">
                    <tr class="hidden">
                        <td class="col-ass-extra">
                            <!-- data will come from ajax here -->
                        </td>
                    </tr>
					<tr>
						<td>
							<label>Upload Extra Reads: </label>
						</td>
						<td>
							<input type="file" name="fileAssignmentExtra" id="fileAssignmentExtra" name="fileAssignmentExtra" class="btn btn-lg btn-primary btn-block" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Assignment Extra" id="btnAddAssExtra" />
						</td>
					</tr>
		    	</table>	
        	</form>

        </div>   <!-- end of assignmentPDF-div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div guide-div">

            <form action="guide-upload-admin.php" method="post" enctype="multipart/form-data" id="form-guide">
                <h4 class="page-header">
                    Upload Course Guide
                </h4>
    		    <table class="table">
                    <tr>
                        <td>
                            <label id="lblCourseDdl" for="ddlCourse">Select Course: </label>
                        </td>
                        <td class="course-list-guide">
                            <!-- course list will come from ajax -->
                        </td>
                    </tr>
    		    	<tr>
    		    		<td>
    		    			<label>Guide Content/Name: </label>
    		    		</td>
    		    		<td>
    		    			<input type="text" placeholder="Course Guide Content/Name" name="txtGuideName" id="txtGuideName" class="form-control" required />
    		    		</td>
    		    	</tr>
                    <tr>
                        <td>
                            <label>Upload Course Guide: </label>
                        </td>
                        <td>
                            <input name="fileGuide" id="fileGuide" type="file" class="btn btn-lg btn-primary btn-block" required/>            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit"  id="submit-btn" value="Upload Course Guide" class="btn btn-lg btn-primary btn-block" />                
                        </td>
                    </tr>
                </table>
            </form>

            <form action="annual-report-upload.php" method="post" enctype="multipart/form-data" id="form-annual-report">
                <h4 class="page-header">
                    Upload Annual Report
                </h4>
                <table class="table">
                    <tr>
                        <td>
                            <label id="lblCourseDdl" for="ddlCourse">Select Course: </label>
                        </td>
                        <td class="course-list-annual-report">
                            <!-- course list will come from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Annual Report Content/Name: </label>
                        </td>
                        <td>
                            <input type="text" placeholder="Annual Report Content/Name" id="txtAnnualReportName" name="txtAnnualReportName" class="form-control" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Upload Annual Report: </label>
                        </td>
                        <td>
                            <input name="fileAnnualReport" id="fileAnnualReport" type="file" class="btn btn-lg btn-primary btn-block" required />            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit"  id="btnSubmitAnnualReport" value="Upload Annual Report" class="btn btn-lg btn-primary btn-block" />                
                        </td>
                    </tr>
                </table>
            </form> 

            <form action="finance-doc-upload.php" method="post" enctype="multipart/form-data" id="form-finance-doc">
                <h4 class="page-header">
                    Upload Finance Documents
                </h4>
                <table class="table">
                    <tr>
                        <td>
                            <label id="lblCourseDdl" for="ddlCourse">Select Course: </label>
                        </td>
                        <td class="course-list-finance-doc">
                            <!-- course list will come from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Finance Document Content/Name: </label>
                        </td>
                        <td>
                            <input type="text" placeholder="Finance Document Content/Name" id="txtFinanceDocName" name="txtFinanceDocName" class="form-control" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Upload Annual Report: </label>
                        </td>
                        <td>
                            <input name="fileFinanceDoc" id="fileFinanceDoc" type="file" class="btn btn-lg btn-primary btn-block" required/>            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit"  id="btnSubmitFinanceDoc" value="Upload Financial Document" class="btn btn-lg btn-primary btn-block" />                
                        </td>
                    </tr>
                </table>
            </form> 

        </div>   <!-- end of guide div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div dashboard-div">
	        <h1 class="page-header">
	        	Admin Dashboard
	        </h1>

            <table class="table">
                <tr>
                    <td colspan="2" class="dashboard-organ">
                        <!-- Data will come from the AJAX here -->
                    </td>
                </tr>
            </table>

            <table class="table dashboard-director">
                <!-- data will come from ajax -->
            </table>

            <table class="table dashboard-mentor">
                <!-- data will come from ajax -->
            </table>

            <table class="table dashboard-mentee">
                <!-- data will come from ajax -->
            </table>
        </div>  <!-- end of dashboard div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div profile-div">
        	<h1 class="page-header" class="profile-header">
	        	Your Profile
	        </h1>

            <!-- Data will come from the LoadProfileData Method on page load. -->
            <form role="form" data-toggle="validator" id="formProfile">
                <table class="table">
                    <tr>
                        <td>
                            <label id="lblProfileName" for="txtProfileName">Name: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Your Name" id="txtProfileName" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="lblProfileEmail" for="txtProfileEmail">Email Address: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Your Email Address" id="txtProfileEmail" disabled="true" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="lblProfileContact" for="txtProfileContact">Contact No: </label>
                        </td>
                        <td>
                            <input type="tel" class="form-control" placeholder="Your Contact Number" id="txtProfileContact" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="lblProfileOrgan" for="txtProfileOrgan">Organization: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Your Organization" id="txtProfileOrgan" disabled="true" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="lblProfileProfile" for="txtProfileProfile">LinkedIn/Twitter/Fb: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="LinkedIn/Twitter/Fb Profile link" id="txtProfileProfile" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Update Profile" id="btnUpdateProfile" class="btn btn-lg btn-primary btn-block" />
                        </td>
                    </tr>
                </table>                
            </form>
        </div>

         <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div course-div">
	        <h1 class="page-header">
	        	Add a course
	        </h1>
	        <form role="form" data-toggle="validator" id="formAddCourse">
	        	<table class="table">
	        		<tr>
	        			<td>
                            <label id="lblCourseName" for="txtCourseName">Course Name: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Course Name" id="txtCourseName" required />
                        </td>
	        		</tr>
	        		<tr>
	        			<td>
                            <label id="lblCourseDur" for="txtCourseDuration">Course Duration: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Course Duration" id="txtCourseDuration" required />
                        </td>
	        		</tr>
	        		<tr>
	        			<td>
                            <label id="lblCourseEdition" for="txtCourseEdition">Course Edition: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Course Edition" id="txtCourseEdition" required />
                        </td>
	        		</tr>
	        		<tr>
	        			<td>
                            <label id="lblCourseDesc" for="txtCourseDesc">Course Description: </label>
                        </td>
                        <td>
                            <!-- <input type="text" class="form-control" placeholder="Course Description" id="txtCourseDesc" /> -->
                            <textarea class="form-control" placeholder="Course Description" id="txtCourseDesc" rows="8"></textarea>
                        </td>
	        		</tr>
	        		<tr>
                        <td colspan="2">
                            <input type="submit" value="Add Course" id="btnAddCourse" class="btn btn-lg btn-primary btn-block" />
                        </td>
                    </tr>
	        	</table>
	        </form>
        </div>   <!-- end of add course-div -->

         <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div organisation-div">
	        <h1 class="page-header">
	        	Add an Organisation
	        </h1>
	        <form role="form" data-toggle="validator" id="formAddOrganisation">
	        	<table class="table">
	        		<tr>
	        			<td>
                            <label id="lblOrganName" for="txtOrganName">Campus Name: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Campus Name" id="txtOrganName" required />
                        </td>
	        		</tr>
	        		<tr>
	        			<td>
                            <label id="lblOrganContact" for="txtOrganContact">Campus Contact: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Campus Name" id="txtOrganContact" required />
                        </td>
	        		</tr>
	        		<tr>
	        			<td>
                            <label id="lblOrganAddress" for="txtOrganAddress">Campus Address: </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" placeholder="Campus Name" id="txtOrganAddress" required />
                        </td>
	        		</tr>
	        		<tr>
                        <td colspan="2">
                            <input type="submit" value="Add Campus" id="btnAddOrgan" class="btn btn-lg btn-primary btn-block" />
                        </td>
                    </tr>
	        	</table>
	        </form>
        </div>   <!-- end of add organisation div -->

      	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div calender-div">
		    <h1 class="page-header">
		    	Upload Course Calendar
		    </h1>

		    <!-- Data will come from the AJAX here -->
            <form action="calendar-upload.php" method="post" enctype="multipart/form-data" id="form-calender">
    		    <table class="table">
    		    	<tr>
    		    		<td>
    		    			<label id="lblCourseDdl" for="ddlCourse">Select Course: </label>
    		    		</td>
    		    		<td class="courseList">
    		    			<!-- course list will come from ajax -->
    		    		</td>
    		    	</tr>
                    <tr>
                        <td>
                            <label id="lblCourseDdl" for="ddlCourse">Upload Calender: </label>
                        </td>
                        <td>
                            <input name="fileCalender" id="fileCalender" type="file" class="btn btn-lg btn-primary btn-block" />            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit"  id="submit-btn" value="Upload Calendar" class="btn btn-lg btn-primary btn-block" />                
                        </td>
                    </tr>
                </table>
            </form>
	    </div>

    </div>

     <!-- this is for sending the email to the mentor using the modal -->
    <div class="modal fade" id="sendMessageModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Send Message</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>
                                <input type="email" id="txtSendMessageEmail" placeholder="Email Address" required class="form-control" disabled="disabled" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea id="txtSendMessage" placeholder="Type in your message" required class="form-control" rows="10"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-primary" id="btnSendMessage">Send Message</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- this is for showing the custom video using the video.js plugin inside the modal -->
    <div class="modal fade" id="lectureVideoModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Lecture Videos</h4>
                </div>
                <div class="modal-body" id="lecture-video-modal-body">
                    <!-- for the video tag -->
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
