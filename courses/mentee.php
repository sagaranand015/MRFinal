<?php
    
    session_start();

?>

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

             iframe {
                width: 100%;
                height: 200px;
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

            iframe {
                width: 100%;
                height: 300px;
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

            iframe {
                width: 100%;
                height: 400px;
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

            iframe {
                width: 100%;
                height: 500px;
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

		.assignment-video, .assignment-report, .assignment-offtopic, .assignment-extra, .latest-assignment-name, .course-guide, .course-ann-report, .course-finance {
			cursor: pointer;
		}

        input.query-type {
            margin-left: 2%;
        }

        #btnAddTeamMember {
            cursor: pointer;
        }

        .calender-img {
            width: 90%;
            height: 90%;
            overflow: scroll;
        }
		 
    </style>

	<script type="text/javascript">

		$(window).load(function() {

            var globalEmail = "<?php echo $_SESSION['globalEmail'] ?>";
            //console.log(globalEmail);
            var globalId = "<?php echo $_SESSION['globalId'] ?>";
            //console.log(globalId);

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

            var email = $.cookie("email");
            if($.cookie("email") == "undefined" || $.cookie("email") == undefined) {
                popup.children('p').remove();
                popup.append("<p>You have not logged in. Please do so before continuing.</p>").fadeIn();
            }
            // else if(email != globalEmail) {
            //     popup.children('p').remove();
            //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
            //     $('#overlay-error').removeClass('overlay-remove');
            //     $('#overlay-error').addClass('overlay-show');
            // }
            else {
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "2", email: email, table: "Mentee"
                    },
                    success: function(response) {
                        indian = response;
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
                            $('#profile-header').html(res[1] + " Profile");

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
                    }
                });   // end of ajax request.

            }   // end of else.

            // for getting the drop down of courses from the MentorCourses table.
            $.ajax({
                type: "GET",
                url: "AJAXFunctions.php",
                data: {
                    no: "54", email: email
                },
                success: function(response) {
                    if(response[0] == "1") {   // success case
                        for(var i = 1;i<response.length;i++) {
                            var courseInfo = response[i].split(" ~~ ");
                            $('.dropdown-menu-course').append("<li><a style='color: black;' class='courses-link' href='#' data-courseid='" + courseInfo[0] + "' data-coursename='" + courseInfo[1] + "'>" + courseInfo[1] + "</a></li>");

                            // ----------- for setting the course ------------
                            $.cookie('course', response[1].split(" ~~ ")[0]);
                            $.cookie('coursename', response[1].split(" ~~ ")[1]);

                            // show it in the navbar.
                            $('.dropdown-course').html($.cookie('coursename') + "<span class='caret'></span>");

                            if($.cookie('course') == "" || $.cookie('course') == "undefined" || $.cookie('course') == undefined) {   // for the first time
                                popup.children('p').remove();
                                popup.append("<p>We could not load the required courses. Please refresh the page or try logging in again. If the problem persists, please drop in a mail to us at: <code>tech@mentored-research.com</code></p>").fadeIn();
                            } 

                            // hide all the divs on page load. Except for first div.
                            // this is supposed to be done here and not in ready() function. Or else, it gives an error while loading the divs.
                            $('.main-div').hide();
                            $('.CRP').trigger('click');

                        }
                    } 
                    else if(response[0] == "0") {
                        popup.children('p').remove();
                        popup.append("<p>No courses exist for this account in our databases. Please try again or contact us at: <code>tech@mentored-research.com</code></p>").fadeIn();    
                    }
                    else {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We could not load your courses. Please try logging in again.</p>").fadeIn();    
                    }
                },
                error: function(err) {
                    popup.children('p').remove();
                    popup.append("<p>Oops! We could not load your courses. Please try logging in again.</p>").fadeIn();
                },
                complete: function() {
                    hideLoading();
                }
            });            

            // for the notification-modal for the new edition
            // if the cookie is undefined or not already set to 1, then show the modal.
            if($.cookie('notify') == "undefined" || $.cookie('notify') == undefined || $.cookie('notify') == "" || $.cookie('notify') != "1") {
                $('#notification-modal').modal('show');
            }

		});   // end of window.load function.

        $(document).ready(function() {

            var globalEmail = "<?php echo $_SESSION['globalEmail'] ?>";
            var globalId = "<?php echo $_SESSION['globalId'] ?>";

        	document.title = "Mentee | " + $.cookie("email");

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

            // ---------------------- for setting the global cookie for the selected course ----------------------------------
            $('.dropdown-menu-course').delegate('.courses-link', 'click', function() {
                var courseId = $(this).attr('data-courseid');
                var courseName = $(this).attr('data-coursename');

                if(courseId == $.cookie('course')) {
                }
                else {
                    showLoading();
                    $.cookie('course', courseId);
                    $.cookie('coursename', courseName);

                    if($.cookie('course') == "" || $.cookie('course') == "undefined" || $.cookie('course') == undefined) {
                        popup.children('p').remove();
                        popup.append("<p>Course could not be changed. Please logout and try again. If problem persists, drop in a mail to <code>tech@mentored-research.com</code></p>").fadeIn();
                    } 
                    else {
                        popup.children('p').remove();
                        popup.append("<p>Course changed successfully. Refreshing your dashboard.</p>").fadeIn();
                        location.reload();         // reload the page after change of course
                    }
                }   // end of else.
                return false;
            });

            // show the selected course in the navbar.
            $('.dropdown-course').html($.cookie('coursename') + "<span class='caret'></span>");


            // ------------------------ for all the client logic ------------------------------
            // for updating the profile fields
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
                            no: "1", email: email, name: name, contact: contact, profile: profile, table: "Mentee"
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

            // ------------------------------------ for all the links on the left hand side. ------------------------------------ 
            // for the Central Resources page on LHS
            $('.CRP').on('click', function() {
            	showDiv($('.CRP-div'));
            	changeActiveState($(this).parent('li'));

            	// get the assignments drop down list from here.
            	var email = $.cookie("email");
            	var id = $.cookie("id");
                if(id == undefined || id == "undefined" || id == "") {
                    id = globalId;
                }
            	if($.cookie("email") == "undefined" || $.cookie("email") == undefined) {
            		popup.children('p').remove();
            		popup.append("<p>You have not logged in properly. Please logout and login again.</p>").fadeIn();
            	}
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                if($.cookie('course') == "undefined" || $.cookie('course') == undefined || $.cookie('course') == "") {
                    // this is to reload the page if course is null or undefined.
                    location.reload();
                }
            	else {
            		showLoading();
	            	$.ajax({
	            		type: "GET",
	            		url: "AJAXFunctions.php",
	            		data: {
	            			no: "12", email: email, id: id, course: $.cookie('course')
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
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>We could not find any assignments for you. Please contact the administrator or mail us at: <code>tech@mentored-research.com</code></p>").fadeIn();                                  
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
	            	});	  // end of ajax.
            	}   // end of else.
            	return false;
            });
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
                            var videoNames = response.AssVideoName;
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

                                if(videoNames[i] == "" || videoNames[i] == "undefined" || videoNames[i] == undefined) {
                                    videoDiv += "<p class='text-muted'>" + "Video Lecture " + (i+1) + "</p>";
                                }
                                else {
                                    videoDiv += "<p class='text-muted'>" + videoNames[i] + "</p>";
                                }
								videoDiv += "</div>";
							}
							$('.videos').append(videoDiv);

							// now, for the assignment Sample Reports
							$('.reports').children('.assignment-report').remove();
							var reports = response.AssSampleReport;
							var reportDiv = "";
							for(var i=0;i<reports.length;i++) {
								reportDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 assignment-report'";
								if(reports[i].split(" ~~ ")[0] == undefined || reports[i].split(" ~~ ")[0] == "undefined" || reports[i].split(" ~~ ")[0] == "") {
									reportDiv += "data-url='" + "" +  "'>";
								}
								else {
									reportDiv += "data-url='" + reports[i].split(" ~~ ")[0] +  "'>";
								}

								reportDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-pdf-o fa-stack-1x fa-inverse'></i></span>";
								// reportDiv += "<p class='text-muted'>" + "Sample Report " + (i+1) + "</p>";
                                if(reports[i].split(" ~~ ")[1] == "" || reports[i].split(" ~~ ")[1] == "undefined" || reports[i].split(" ~~ ")[1] == undefined) {
                                    reportDiv += "<p class='text-muted'>" + "Sample Report " + (i+1) + "</p>";
                                }
                                else {
                                    reportDiv += "<p class='text-muted'>" + reports[i].split(" ~~ ")[1] + "</p>";
                                }
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
                    $('#lecture-video-modal-body').html("<iframe src='" + url + "' width='320' height='180' frameborder='0' scrolling='no' allowfullscreen></iframe>");
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

            // for the Programme calender page on LHS
            $('.calender').on('click', function() {
            	showDiv($('.calender-div'));
            	changeActiveState($(this).parent('li'));

            	// get the image of the calender and show it in the html div created.
            	var menteeEmail = $.cookie("email");
            	if(menteeEmail == "" || menteeEmail == undefined) {
            		popup.children('p').remove();
            		popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
            	}
                // else if(menteeEmail != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else if($.cookie('course') == "" || $.cookie('course') == "undefined" || $.cookie('course') == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>you have not selected any courses. Please try logging again.</p>").fadeIn();
                }
            	else {
            		showLoading();
	            	$.ajax({
	            		type: "GET",
	            		url: "AJAXFunctions.php",
	            		data: {
	            			no: "7", menteeEmail: menteeEmail, course: $.cookie('course')
	            		},
	            		success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();                     
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Calender Exists in the database. Please contact your mentor for the Calender. Thank You.</p>").fadeIn();                     
                            }
                            else {
                                // show the course calender in the calender-div.
                                $('.calender-div').children('img').remove();
                                $('.calender-div').append("<img class='calender-img' src='" + response + "' />");
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
            	}  // end of else.
            	return false;
            });

            // for the Profile page on LHS
            $('.profile').on('click', function() {
            	showDiv($('.profile-div'));
            	changeActiveState($(this).parent('li'));
            	return false;
            });

            // for the Mentor Profile page on LHS
            $('.mentor').on('click', function() {
            	showDiv($('.mentor-div'));
            	changeActiveState($(this).parent('li'));

            	var email = $.cookie("email");
            	var id = $.cookie("id");
            	if($.cookie("email") == "undefined" || $.cookie("email") == undefined || $.cookie("email") == "") {
            		popup.children('p').remove();
            		popup.append("<p>You have not logged in properly. Please <a href='http://mentored-research.com/login' style='color: black;'>LOGIN AGAIN</a> to continue.</p>").fadeIn();
            	}
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
            	else {
            		showLoading();
	            	$.ajax({
	            		type: "GET",
	            		url: "AJAXFunctions.php",
	            		data: {
	            			no: "14", email: email, id: id, course: $.cookie('course')
	            		},
	            		success: function(response) {

                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();                     
                            }
                            else if(response == "-2") {
                                popup.children('p').remove();
                                popup.append("<p>No Mentor found in the database for your course. Please try again or put in a mail to us at: <code>tach@mentored-research.com</code></p>").fadeIn();                     
                            }

	            			if(response.MentorName == "undefined" || response.MentorName == undefined || response.MentorName == "") {
	            				$('.mentor-name').html("No Data Available");
            				}
            				else {
            					$('.mentor-name').html(response.MentorName);
            				}	
            				if(response.MentorContact == "undefined" || response.MentorContact == undefined || response.MentorContact == "") {
	            				$('.mentor-contact').html("No Data Available");
            				}
            				else {
            					$('.mentor-contact').html(response.MentorContact);
            				}	
            				if(response.MentorEmail == "undefined" || response.MentorEmail == undefined || response.MentorEmail == "") {
	            				$('.mentor-email').html("No Data Available");
            				}
            				else {
            					$('.mentor-email').html(response.MentorEmail);
            				}	
            				if(response.MentorProfile == "undefined" || response.MentorProfile == undefined || response.MentorProfile == "") {
	            				$('.mentor-profile').html("No Data Available");
            				}
            				else {
            					$('.mentor-profile').html(response.MentorProfile);
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
            	}  // end of else.
            	return false;
            });   // end of mentor link on LHS.
			// for sending message button 
			$('#btnSendMessageToMentorModal').on('click', function() {
				var email = $('.mentor-email').html();   // to get the email for the mail to be send.

				if(email == "" || email == "No Data Available") {
					$('#txtSendMessageEmail').val("Email Address not Available");
				}
				else {
					$('#txtSendMessageEmail').val(email);  // show it to the user, but disabled.
				}
				// show the modal now.
				$('#sendMessageModal').modal('show');
				return false;
			});
			// for sending the mail from the Send Message button in the modal box.
			$('#btnSendMessage').on('click', function() {
				var toEmail = $('#txtSendMessageEmail').val().trim();
				var msg = $('#txtSendMessage').val();
				var email = $.cookie("email");

                if(email == "" || email == "undefined" || email == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>You have not logged in properly. Please <a href='http://mentored-research.com/login' style='color: black;'>LOGIN AGAIN</a> to continue.</p>").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {
                    showLoading();
                    $('#sendMessageModal').modal('hide');
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "15", toEmail: toEmail, msg: msg, email: email
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
			});

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
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {   // ajax request for password change
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "17", email: email, oldPassword: oldPassword, newPassword: newPassword, newPasswordConfirm: newPasswordConfirm, table: "Mentee"
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

            $('.submitSolution').on('click', function() {
                showDiv($('.submitSolution-div'));
                changeActiveState($(this).parent('li'));

                // firstly, to get the latest assignment name and number to be submitted.
                var email = $.cookie("email");
                var id = $.cookie("id");

                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("Oops! Looks like you have not logged in properly. Please logout and try again.").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "24", email: email, id: id, course: $.cookie('course')
                        },
                        success: function(response) {
                            if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No more Assignments exists.</p>").fadeIn();    

                                // for the no more assignments.
                                $('.latest-assignment-name').html("Nothing Pending");
                                $('#btnSubmitSolution').attr('value', "You're done!");
                                $('#btnSubmitSolution').attr('disabled', 'disabled');
                            }
                            else if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();    
                            }
                            else {
                                var assName = response.AssName;
                                var assId = response.AssID;
                                var assCourse = response.AssCourse;
                                var assPdf = response.AssPdf;
                                var assNo = response.AssNo;
                                if(assName == "" || assName == undefined || assName == "undefined") {
                                    $('.latest-assignment-name').html("No Assignment Name");
                                }
                                else {
                                    $('.latest-assignment-name').html(assName);
                                    $('#btnSubmitSolution').attr('value', "Submit " + assName);

                                    // for setting the parameters for uploading the files.
                                    popup.children('p').remove();
                                    if(assId == "" || assId == "undefined" || assId == undefined) {
                                        assId = "-1";
                                        popup.append("<p>Oops! We could not gather the required data. Please try logging in again.</p>").fadeIn();
                                    }
                                    if(assCourse == "" || assCourse == "undefined" || assCourse == undefined) {
                                        assCourse = "-1";
                                        popup.append("<p>Oops! We could not gather the required data. Please try logging in again.</p>").fadeIn();
                                    }
                                    if(assPdf == "" || assPdf == "undefined" || assPdf == undefined) {
                                        assPdf = "-1";
                                        popup.append("<p>Oops! We could not gather the required data. Please try logging in again.</p>").fadeIn();
                                    }
                                    if(assNo == "" || assNo == "undefined" || assNo == undefined) {
                                        assNo = "-1";
                                        popup.append("<p>Oops! We could not gather the required data. Please try logging in again.</p>").fadeIn();
                                    }

                                    $('.latest-assignment-name').attr('data-id', assId);
                                    $('.latest-assignment-name').append("<input type='hidden' name='assIdSolution' value='" + assId + "' />");

                                    $('.latest-assignment-name').attr('data-assCourse', assCourse);
                                    $('.latest-assignment-name').append("<input type='hidden' name='assCourseSolution' value='" + assCourse + "' />");

                                    $('.latest-assignment-name').attr('data-assPdf', assPdf);
                                    $('.latest-assignment-name').append("<input type='hidden' name='assPdfSolution' value='" + assPdf + "' />");

                                    $('.latest-assignment-name').attr('data-assNo', assNo);
                                    $('.latest-assignment-name').append("<input type='hidden' name='assNoSolution' value='" + assNo + "' />");

                                    // for the click event on the Assignment name that shows as the heading.
                                    $('.latest-assignment-name').on('click', function() {
                                        var pdf = $(this).attr('data-assPdf');
                                        if(pdf == "" || pdf == "undefined" || pdf == undefined) {
                                            popup.children('p').remove();
                                            popup.append("<p>Please refresh the page and try again to donwload the Assignment.</p>");
                                        }
                                        else {
                                            window.open(pdf, "_blank");
                                        }
                                        return false;
                                    });
                                }   // end of inner else.
                            }   // end of else.
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                        }
                    });

                    // now, write the AJAX Request to get the list of assignments submitted by the mentee already.
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "25", email: email, id: id, course: $.cookie('course')
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();        
                            }
                            else if(response == "0") {
                                $('.update-solution-assignment').html("No Assignments Submitted yet!");    
                            }
                            else {
                                $('.update-solution-assignment').html(response);
                            }
                            // for the value to be shown on the button.
                            $('#btnUpdateSolution').attr("value", "Update Submission");
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });
                }  // end of else that validates the logged in credentials

                // -------------------- for uploading the assignment solution --------------------
                $('#form-submit-solution').submit(function() {
                    if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                        popup.children('p').remove();
                        popup.append("Oops! Looks like you have not logged in properly. Please logout and try again.").fadeIn();
                    }
                    else {
                        // $(this).ajaxSubmit(optionsAssignmentSolution);    
                        showLoading();
                        $(this).submit();    
                    }
                    return false;
                });

                // -------------------- for the assignment update solution --------------------
                // now, for the uploading of the file that contains the updated assignment solution
                $('#form-update-solution').submit(function() {
                    var assID = $('.update-solution-assignment').children('select').val();
                    if(assID == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>Please select the assignment before updating the submitted solution. Thank You.</p>").fadeIn();
                    }
                    else {   // upload the updated solution here
                        // $(this).ajaxSubmit(optionsUpdateSolution);
                        $('.update-solution-assignment').append("<input type='hidden' name='assIdUpdate' value=" + assID + " />");
                        showLoading();
                        $(this).submit();
                    }
                    return false;
                });
                return false;
            });   // end of Submitsolution-div

            // for the showing feedback button on the LHS
            $('.feedback').on('click', function() {
                showDiv($('.feedback-div'));
                changeActiveState($(this).parent('li'));

                // firstly, get all the assignments submitted by the mentee.
                var email = $.cookie("email");
                var id = $.cookie("id");
                if(email == "undefined" || email == "" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please do so before continuing.</p>").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "28", email: email, id: id, course: $.cookie('course')
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();    
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Assignments found.</p>").fadeIn();
                            }
                            else {
                                $('.feedback-assignment').html(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });  // end of ajax request.
                }   // end of else.
                return false;
            });   // end of feedback-div on LHS
             // for showing the submission and feedback on the change of drop down list.
            $('.feedback-div').delegate('#ddl-assignment', 'change', function() {
                var assId = $(this).val();
                var submission = $(this).find('option:selected').attr('data-submission');
                var feedback = $(this).find('option:selected').attr('data-feedback');

                // for showing the feedbacks of the assignment.
                if(feedback == "") {
                    $('.feedback-feedback').html("<a href='#' class='btn btn-lg btn-primary btn-block' >No Feedback Yet.</a>");    
                } else {
                    $('.feedback-feedback').html("<a href='" + feedback + "' class='btn btn-lg btn-primary btn-block' target='_blank' >Download Feedback</a>");
                }

                // for showing the submissions of the assignments.
                if(submission == "") {
                    $('.feedback-submission').html("<a href='#' class='btn btn-lg btn-primary btn-block' >No Submission Yet.</a>");    
                } else {
                    $('.feedback-submission').html("<a href='" + submission + "' class='btn btn-lg btn-primary btn-block' target='_blank' >Download Latest Submission</a>");
                }
                return false;
            });

            // for the quiz link on LHS
            $('.quiz').on('click', function() {
                showDiv($('.quiz-div'));
                changeActiveState($(this).parent('li'));

                // to remove the previous table.
                $('.quiz-table').html("");

                var email = $.cookie("email");
                var id = $.cookie("id");

                // firstly, get the assignments for the mentee.
                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "12", email: email, id: id, course: $.cookie('course')
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
                             else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>We could not find any assignments for you. Please contact the administrator or mail us at: <code>tech@mentored-research.com</code></p>").fadeIn();                                  
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
                }    // end of else.
                return false;
            });   // end of LHS link of Quiz
            // for the delegate event of the change of assignment.
            $('.quiz-div').delegate('#ddl-assignment', 'change', function() {
                var assId = $(this).val();
                var id = $.cookie("id");
                var email = $.cookie("email");
                // now, get the quizzes in the table form.
                if(assId == "" || assId == "undefined" || assId == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Please select the Assignment first and then try again.</p>").fadeIn();
                }
                else if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "35", assId: assId, menteeId: id, menteeEmail: email
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Quizzes has yet been uploaded for this assignment.</p>").fadeIn();
                            }
                            else {
                                $('.quiz-table').html(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });  // end of ajax
                }     // end of else
                return false;
            });   // end of delegate event of the change of assignment ddl.

            // for the click event of the attempt button.(for the basic quiz)
            $('.quiz-table').delegate('.btnAttemptQuiz', 'click', function() {
                var quizId = $(this).attr('data-id');
                var quizName = $(this).attr('data-name');

                if(quizId == "-1" || quizId == "undefined" || quizId == undefined || quizId == "") {
                    popup.children('p').remove();
                    popup.append("<p>Oops! We encountered an error. Please refresh and select the assignment again.</p>").fadeIn();
                }
                else {
                    $('.basic-quiz-modal-title').html("<h3>Attempt " + quizName + "</h3>");
                    // to get all the questions and options from the database.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "36", quizId: quizId
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();     
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No quiz questions found in this course. Please try again.</p>").fadeIn();
                            }
                            else {
                                var res = response.split(" ~ ");
                                var ques = $.parseJSON(res[0]);
                                var op = $.parseJSON(res[1]);

                                // for all the questions to be shown
                                $('.q1').html("Q1: " + ques[0]);
                                $('.q2').html("Q2: " + ques[1]);
                                $('.q3').html("Q3: " + ques[2]);
                                $('.q4').html("Q4: " + ques[3]);
                                $('.q5').html("Q5: " + ques[4]);

                                // for showing all the options.
                                var item = "";
                                var p = 0;
                                for(var i=1;i<=5;i++) {
                                    for(var j=1;j<=4;j++) {
                                        item = "#ans" + i.toString() + j.toString();
                                        $(item).html(op[p]);   // showing the options to the radio buttons.
                                        p++;
                                    }
                                }

                                // show the modal with the response embedded here.
                                $('#basicQuizModal').modal('show');
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of ajax request
                }
                return false;
            });   // end of click delegate event of the attempt quiz button.

            // for the click event of the attempt button.(for the advanced quiz)
            $('.quiz-table').delegate('.btnAttemptAdvQuiz', 'click', function() {
                var quizId = $(this).attr('data-id');
                var quizName = $(this).attr('data-name');

                if(quizId == "-1" || quizId == "undefined" || quizId == undefined || quizId == "") {
                    popup.children('p').remove();
                    popup.append("<p>Oops! We encountered an error. Please refresh and select the assignment again.</p>").fadeIn();
                }
                else {
                    $('.advanced-quiz-modal-title').html("<h3>Attempt " + quizName + "</h3>");
                    // to get all the questions and options from the database.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "46", quizId: quizId
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();     
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No quiz questions found in this course. Please try again.</p>").fadeIn();
                            }
                            else {
                                var ques = $.parseJSON(response);
                                // for all the questions to be shown
                                $('.advQ1').html("Q1: " + ques[0]);
                                $('.advQ2').html("Q2: " + ques[1]);
                                $('.advQ3').html("Q3: " + ques[2]);
                                $('.advQ4').html("Q4: " + ques[3]);
                                $('.advQ5').html("Q5: " + ques[4]);

                                // show the modal with the response embedded here.
                                $('#advancedQuizModal').modal('show');
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn(); 
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });   // end of ajax request
                }
                return false;
            });   // end of click delegate event of the attempt quiz button.

            // for submitting the advanced quiz from the advanced Quiz modal.
            $('#formSubmitAdvancedQuiz').submit(function() {

                var quizId = $('.btnAttemptAdvQuiz').attr('data-id');
                var assId = $('.quiz-assignment').children('select').val();
                var id = $.cookie("id");
                var email = $.cookie("email");
                // to get all the answers selected.

                var answers = [$('#advA1').val(), $('#advA2').val(), $('#advA3').val(), $('#advA4').val(), $('#advA5').val() ];
                jsonAns = JSON.stringify(answers);

                // now, check for the left over answers.
                var left = 0;
                for(var i = 0;i<answers.length;i++) {
                    if(answers[i] == "") {
                        left++;
                    }
                }

                // now, send the selected answers to the server for evaluation.
                var desc = false;
                if(left > 0) {
                    desc = confirm("You have not asnwered all the questions. Are you sure you want to submit?");
                }
                else {
                    desc = true;
                }

                if(desc == true) {
                    // make the ajax request for evaluation.
                    if(quizId == "-1" || quizId == "undefined" || quizId == undefined || quizId == "") {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error. Please reload the page and try again.</p>").fadeIn();
                    }
                    else {
                        if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                            popup.children('p').remove();
                            popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
                        }
                        // else if(email != globalEmail) {
                        //     popup.children('p').remove();
                        //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                        //     $('#overlay-error').removeClass('overlay-remove');
                        //     $('#overlay-error').addClass('overlay-show');
                        // }
                        else {
                            $('#advancedQuizModal').modal('hide');
                            showLoading();
                            $.ajax({
                                type: "GET",
                                url: "AJAXFunctions.php",
                                data: {
                                    no: "47", ans: jsonAns, quizId: quizId, assId: assId, menteeId: id, menteeId: id, menteeEmail: email
                                },
                                success: function(response) {
                                    if(response == "1") {
                                        popup.children('p').remove();
                                        popup.append("<p>Your quiz has been submitted. <b>You will be notified through mail for the evaluted quiz and your score. Thank You.</b></p>").fadeIn();

                                        // now, remove all the html content in the attempt quiz page. and make the link trigger click.
                                        $('.quiz-table').html("");
                                        $('.quiz').trigger('click');
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
                            });   // end of ajax.
                        }   // end of else.
                    }   // end of else.
                }   // end of if.

                return false;
            });

            // for the submit event of the form for basic quiz.
            $('#formSubmitBasicQuiz').submit(function() {
                var quizId = $('.btnAttemptQuiz').attr('data-id');
                var assId = $('.quiz-assignment').children('select').val();
                var id = $.cookie("id");
                var email = $.cookie("email");
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
                    answers.push($(j).html());
                }
                jsonAns = JSON.stringify(answers);

                // now, send the selected answers to the server for evaluation.
                var desc = false;
                if(ans.length < 5) {
                    desc = confirm("You have not asnwered all the questions. Are you sure you want to submit?");
                }
                else {
                    desc = true;
                }

                if(desc == true) {
                    // make the ajax request for evaluation.
                    if(quizId == "-1" || quizId == "undefined" || quizId == undefined || quizId == "") {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error. Please reload the page and try again.</p>").fadeIn();
                    }
                    else {
                        if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                            popup.children('p').remove();
                            popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
                        }
                        // else if(email != globalEmail) {
                        //     popup.children('p').remove();
                        //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                        //     $('#overlay-error').removeClass('overlay-remove');
                        //     $('#overlay-error').addClass('overlay-show');
                        // }
                        else {
                            $('#basicQuizModal').modal('hide');
                            showLoading();
                            $.ajax({
                                type: "GET",
                                url: "AJAXFunctions.php",
                                data: {
                                    no: "37", ans: jsonAns, quizId: quizId, assId: assId, menteeId: id, menteeId: id, menteeEmail: email
                                },
                                success: function(response) {
                                    var res = response.split(" ~ ");
                                    if(res[0] == "1") {
                                        popup.children('p').remove();
                                        popup.append("<p>Your quiz has been submitted and evaluated successfully. <b>Your Score is: " + res[1] + "/5. </b> Please check your mail for more details</p>").fadeIn();

                                        // now, remove all the html content in the attempt quiz page. and make the link trigger click.
                                        $('.quiz-table').html("");
                                        $('.quiz').trigger('click');
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
                            });   // end of ajax.
                        }   // end of else.
                    }   // end of else.
                }   // end of if.
                return false;
            });   // end of the form submit function.

            // for the email support button on LHS.
            $('.support').on('click', function() { 
                showDiv($('.support-div'));
                changeActiveState($(this).parent('li'));
                return false;
            });
            // for submitting the Query form
            $('#form-query').submit(function() {

                var val = "";
                $.each($('.query-type'), function() {
                    var item = $(this);
                    if(item.is(':checked')) {
                        val = item.attr('data-val');
                    }
                });

                var no = "";
                if(val == "assignment") {
                    no = "41";
                }
                else if(val == "tech") {
                    no = "42";
                }
                else if(val == "deadline") {
                    no = "43";
                }
                else if(val == "other") {
                    no = "43";
                }
                else {
                    popup.children('p').remove();
                    popup.append("<p>Please select the query type before submitting your query</p>").fadeIn();
                }

                var name = $('#txtQueryName').val();
                var contact = $('#txtQueryContact').val();
                var msg = $('#txtQueryMessage').val();
                var email = $.cookie("email");
                var id = $.cookie("id");

                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login and try again.</p>").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {   // make the ajax request here.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: no, email: email, id: id, name: name, contact: contact, msg: msg, course: $.cookie('course')
                        },
                        success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Your message has been sent. Mentored-Research's team will get back to your inbox soon.</p>").fadeIn();   
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

                }  // end of else.
                return false;
            });

            // for getting guides/annual reports/finance documents
            $('.document').on('click', function() {
                showDiv($('.document-div'));
                changeActiveState($(this).parent('li'));

                // to get the documents thru ajax request.
                var email = $.cookie("email");
                var id = $.cookie("id");

                if(email == "" || email == "undefined" || email == undefined || id == "" || id == "undefined" || id == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
                }
                // else if(email != globalEmail) {
                //     popup.children('p').remove();
                //     popup.append("<p>Looks like you have another session going on in the same browser. Please logout from either sessions and try <a href='http://mentored-research.com/login' style='color: black;'>Logging in</a> again. Thank you.</p>").fadeIn();
                //     $('#overlay-error').removeClass('overlay-remove');
                //     $('#overlay-error').addClass('overlay-show');
                // }
                else {
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "44", email: email, id: id, course: $.cookie('course')
                        },
                        success: function(response) {
                            //console.log(response);

                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();    
                            }
                            else {
                                //console.log(response.guide.length + " --> " + response.annualReport.length + " --> " + response.financeDoc.length);

                                // get the guides here.
                                $('.guides').children('.course-guide').remove();
                                var guides = response.guide;
                                var guideDiv = "";
                                if(guides[0] == "0") {   // nothing exists in the db
                                    guideDiv += "None Available.";
                                }
                                else {
                                    for(var i=0;i<guides.length;i++) {
                                        guideDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 course-guide'";
                                        if(guides[i] == undefined || guides[i] == "undefined" || guides[i] == "") {
                                            guideDiv += "data-url='" + "" +  "'>";
                                        }
                                        else {
                                            guideDiv += "data-url='" + guides[i] +  "'>";
                                        }
                                        guideDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-video-o fa-stack-1x fa-inverse'></i></span>";
                                        guideDiv += "<p class='text-muted'>" + "Guide " + (i+1) + "</p>";
                                        guideDiv += "</div>";
                                    }
                                }   // end of else.
                                $('.guides').append(guideDiv);

                                // for the annual reports here.
                                $('.ann-reports').children('.course-ann-report').remove();
                                var annReports = response.annualReport;
                                var annReportDiv = "";
                                if(annReports[0] == "0") {
                                    annReportDiv += "None Available.";
                                } 
                                else {
                                    for(var i=0;i<annReports.length;i++) {
                                        annReportDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 course-ann-report'";
                                        if(annReports[i] == undefined || annReports[i] == "undefined" || annReports[i] == "") {
                                            annReportDiv += "data-url='" + "" +  "'>";
                                        }
                                        else {
                                            annReportDiv += "data-url='" + annReports[i] +  "'>";
                                        }
                                        annReportDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-video-o fa-stack-1x fa-inverse'></i></span>";
                                        annReportDiv += "<p class='text-muted'>" + "Annual Report " + (i+1) + "</p>";
                                        annReportDiv += "</div>";
                                    }
                                }
                                $('.ann-reports').append(annReportDiv);  

                                // for the financial documents here.
                                $('.finances').children('.course-finance').remove();
                                var finances = response.financeDoc;
                                var financeDiv = "";
                                if(finances[0] == "0") {
                                    financeDiv += "None Available.";
                                }
                                else {
                                    for(var i=0;i<finances.length;i++) {
                                        financeDiv += "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6 course-finance'";
                                        if(finances[i] == undefined || finances[i] == "undefined" || finances[i] == "") {
                                            financeDiv += "data-url='" + "" +  "'>";
                                        }
                                        else {
                                            financeDiv += "data-url='" + finances[i] +  "'>";
                                        }
                                        financeDiv += "<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-file-video-o fa-stack-1x fa-inverse'></i></span>";
                                        financeDiv += "<p class='text-muted'>" + "Financial Document " + (i+1) + "</p>";
                                        financeDiv += "</div>";
                                    }
                                }
                                $('.finances').append(financeDiv);                                

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

                // for the delegate function of the guide 
                $('.guides').delegate('.course-guide', 'click', function() {
                    var url = $(this).attr('data-url');
                    if(url == "" || url == undefined) {
                        alert("No defined.");
                    }
                    else {
                        window.open(url, "_blank");
                    }
                    return false;
                });

                // for the delegate function of the annual-report 
                $('.ann-reports').delegate('.course-ann-report', 'click', function() {
                    var url = $(this).attr('data-url');
                    if(url == "" || url == undefined) {
                        alert("No defined.");
                    }
                    else {
                        window.open(url, "_blank");
                    }
                    return false;
                });

                // for the delegate function of the annual-report 
                $('.finances').delegate('.course-finance', 'click', function() {
                    var url = $(this).attr('data-url');
                    if(url == "" || url == undefined) {
                        alert("No defined.");
                    }
                    else {
                        window.open(url, "_blank");
                    }
                    return false;
                });

                return false;
            });   // end of document link on LHS.

            // for the hide event of the notification modal.
            $('#notification-modal').on('hide.bs.modal', function() {
                var checkNotify = $('#check-notification').is(':checked');
                if(checkNotify == true) {
                    $.cookie('notify', '1');
                } else {
                    $.cookie('notify', "");
                }
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
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle dropdown-course" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Courses<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-course">
                            <!-- data will come from ajax here -->
                        </ul>
                    </li>
                    <li>
                    	<a href="#" class="btnLogout">Logout</a>
                    </li>
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
                    <li><a href="#" class="document">Guides &amp; Documents</a></li>
                    <li><a href="#" class="calender">Program Calendar</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="profile">Profile</a></li>
                    <li><a href="#" class="password">Change Password</a></li>
                	<li><a href="#" class="mentor">Feedback &amp; Communications Team</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="#" class="submitSolution">Submit Assignment Solution</a></li>
                    <li><a href="#" class="feedback">Show Feedbacks</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="#" class="quiz">Attempt Quiz</a></li>
                    <li><a href="#" class="support">Email Support</a></li>
                </ul>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block menu-show" id="btnShowMenu">
        	Menu
        </button>

        <!-- for showing the guides and documents -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div document-div">

            <!-- for course Guides -->
            <div class="row text-center guides">
                <h3 class="page-header">
                    Course Guide(s)
                </h3>
                <!-- data will come from ajax here -->
            </div>

             <!-- for annual reports -->
            <div class="row text-center ann-reports">
                <h3 class="page-header">
                    Annual Report(s)
                </h3>
                <!-- data will come from ajax here -->
            </div>

            <!-- for Financial documents -->
            <div class="row text-center finances">
                <h3 class="page-header">
                    Finance Document(s)
                </h3>
                <!-- data will come from ajax here -->
            </div>

        </div>

        <!-- for attempting the quizzes -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div support-div">
            <h1 class="page-header">
                Email Support
            </h1>
            <h6>Please select the correct course before submitting your queries. Queries intended for one course, but submitted in another course might not be answered. Thank you.</h6>

            <div>
                <h4 class="page-header">Select Query Type:</h4>
                <input type="radio" name="query" class="query-type" id="ass-query" data-val="assignment" />
                <label for="ass-query">Assignment Query</label>

                <input type="radio" name="query" class="query-type" id="tech-query" data-val="tech" />
                <label for="tech-query">Technical Query</label>

                <input type="radio" name="query" class="query-type" id="deadline-query" data-val="deadline" />
                <label for="deadline-query">Assignment deadline Query</label>

                <input type="radio" name="query" class="query-type" id="other-query" data-val="other" />
                <label for="other-query">Other(s) Query</label>
            </div>

            <form id="form-query">
                <h4 class="page-header">Your Query: </h4>
                <table class="table query-table">
                    <tr>
                        <td>
                            <label>Your name: </label>
                        </td>
                        <td>
                            <input type="text" placeholder="Your name" id="txtQueryName" class="form-control" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Your Contact Number: </label>
                        </td>
                        <td>
                            <input type="text" placeholder="Your Contact Number" id="txtQueryContact" class="form-control" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Your Query/Message: </label>
                        </td>
                        <td>
                            <textarea placeholder="Your Query/Message" id="txtQueryMessage" class="form-control" required rows="8"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" id="btnSendQuery" Value="Submit Query" />
                        </td>
                    </tr>
                </table>
            </form>

        </div>  <!-- end of support div -->

        <!-- for attempting the quizzes -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div quiz-div">
            <h1 class="page-header">
                Attempt your Quiz
            </h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>   
                    <td class="quiz-assignment">
                        <!-- data will come from ajax here -->
                    </td>
                </tr>
            </table>
            <!-- table for showing the quizzes info -->
            <table class="table quiz-table">
            </table>
        </div>  <!-- end of quiz div -->

        <!-- for showing the assignment feedbacks -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div feedback-div">
            <h1 class="page-header">
                Assignment Feedbacks
            </h1>
            <table class="table">
                <tr>
                    <td>
                        <label>Select Assignment</label>
                    </td>
                    <td class="feedback-assignment">
                        <!-- assignment data will come from ajax -->
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="feedback-feedback">

                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="feedback-submission">

                    </td>
                </tr>
            </table>
        </div>  <!-- end of feedback div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div submitSolution-div">
            <h3 class="page-header">
                Latest Pending Assignment:
            </h3>
            <!-- <form id="formSubmitSolution" action="assignmentSolution-upload.php" method="post" enctype="multipart/form-data"> -->
            <form id="form-submit-solution" action="assignment-solution-upload.php" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>
                            <h1 class="latest-assignment-name text-center">
                                <!-- data from ajax -->
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="file" name="fileAssignmentSolution" id="fileAssignmentSolution" class="btn btn-lg btn-primary btn-block" required /> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" Value="" id="btnSubmitSolution" class="btn btn-primary btn-block btn-lg" />
                        </td>
                    </tr>
                </table>
            </form>

            <form id="form-update-solution" action="assignment-solution-update-upload.php" method="post" enctype="multipart/form-data">
                <h3 class="page-header">
                    Update Assignment Solution
                </h3>
                <table class="table">
                    <tr>
                        <td class="update-solution-assignment">
                            <!-- list of assignments submitted by mentee will come from ajax -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="file" name="fileUpdateSolution" id="fileUpdateSolution" class="btn btn-lg btn-primary btn-block" required /> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" Value="" id="btnUpdateSolution" class="btn btn-primary btn-block btn-lg" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>  <!-- end of SubmitSolution div -->

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

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div profile-div">
	        <h1 class="page-header" id="profile-header">
	        	
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
        </div>  <!-- end of profile-div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div CRP-div">
	        <h1 class="page-header">
	        	Central Resource Page
	        </h1>

	        <table class="table">
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

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div calender-div">
        	<h1 class="page-header">
	        	Programme Calendar
	        </h1>
	        <!-- image of the calender will come from ajax -->
        </div>   <!-- end of Programme calender div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div mentor-div">
        	<h1 class="page-header">
	        	Your Mentor Details
	        </h1>
	        <table class="table">
	        	<tr>
	        		<td>
	        			<label>Mentor Name: </label>
	        		</td>
	        		<td class="mentor-name">
	        			
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<label>Mentor Contact: </label>
	        		</td>
	        		<td class="mentor-contact">
	        			
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<label>Mentor Email Address: </label>
	        		</td>
	        		<td class="mentor-email">
	        			
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<label>Mentor Profile: </label>
	        		</td>
	        		<td class="mentor-profile">
	        			
	        		</td>
	        	</tr>
	        	<tr>
	        		<td colspan="2">
	        			<button class="btn btn-lg btn-primary btn-block" id="btnSendMessageToMentorModal">Send Message</button>
	        		</td>
	        	</tr>
	        </table>
        </div>   <!-- end of Programme calender div -->
    </div>   <!-- end of main container-fluid div -->

    <!-- this is for sending the email to the mentor using the modal -->
    <div class="modal fade" id="sendMessageModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Send Message to Mentor</h4>
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
					<button type="button" class="btn btn-primary" id="btnSendMessage">Send Message</button>
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

    <!-- for attempting the basic quiz on the mentee page -->
    <div class="modal fade" id="basicQuizModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="basic-quiz-modal-title">Attempt Basic Quiz</h4>
                </div>
                <div class="modal-body" id="basic-quiz-modal-body">
                    <!-- for the table containing all the questions -->
                    <form id="formSubmitBasicQuiz">
                        <table class="table">
                            <tr>
                                <td class="q1">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="answer1" for="ans11" class="ans-radio" />
                                    <label class="ans" id="ans11"></label>  <br />
                                    <input type="radio" name="answer1" for="ans12" class="ans-radio" />
                                    <label class="ans" id="ans12"></label>  <br />
                                    <input type="radio" name="answer1" for="ans13" class="ans-radio" />
                                    <label class="ans" id="ans13"></label>  <br />
                                    <input type="radio" name="answer1" for="ans14" class="ans-radio" />
                                    <label class="ans" id="ans14"></label>  <br />
                                </td>
                            </tr>

                            <tr>
                                <td class="q2">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="answer2" for="ans21" class="ans-radio" />
                                    <label class="ans" id="ans21"></label>  <br />
                                    <input type="radio" name="answer2" for="ans22" class="ans-radio" />
                                    <label class="ans" id="ans22"></label>  <br />
                                    <input type="radio" name="answer2" for="ans23" class="ans-radio" />
                                    <label class="ans" id="ans23"></label>  <br />
                                    <input type="radio" name="answer2" for="ans24" class="ans-radio" />
                                    <label class="ans" id="ans24"></label>  <br />
                                </td>
                            </tr>

                            <tr>
                                <td class="q3">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="answer3" for="ans31" class="ans-radio" />
                                    <label class="ans" id="ans31"></label>  <br />
                                    <input type="radio" name="answer3" for="ans32" class="ans-radio" />
                                    <label class="ans" id="ans32"></label>  <br />
                                    <input type="radio" name="answer3" for="ans33" class="ans-radio" />
                                    <label class="ans" id="ans33"></label>  <br />
                                    <input type="radio" name="answer3" for="ans34" class="ans-radio" />
                                    <label class="ans" id="ans34"></label>  <br />
                                </td>
                            </tr>

                            <tr>
                                <td class="q4">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="answer4" for="ans41" class="ans-radio" />
                                    <label class="ans" id="ans41"></label>  <br />
                                    <input type="radio" name="answer4" for="ans42" class="ans-radio" />
                                    <label class="ans" id="ans42"></label>  <br />
                                    <input type="radio" name="answer4" for="ans43" class="ans-radio" />
                                    <label class="ans" id="ans43"></label>  <br />
                                    <input type="radio" name="answer4" for="ans44" class="ans-radio" />
                                    <label class="ans" id="ans44"></label>  <br />
                                </td>
                            </tr>

                            <tr>
                                <td class="q5">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="answer5" for="ans51" class="ans-radio" />
                                    <label class="ans" id="ans51"></label>  <br />
                                    <input type="radio" name="answer5" for="ans52" class="ans-radio" />
                                    <label class="ans" id="ans52"></label>  <br />
                                    <input type="radio" name="answer5" for="ans53" class="ans-radio" />
                                    <label class="ans" id="ans53"></label>  <br />
                                    <input type="radio" name="answer5" for="ans54" class="ans-radio" />
                                    <label class="ans" id="ans54"></label>  <br />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Submit Quiz" id="btnSubmitBasicQuiz" class="btn btn-lg btn-primary btn-block" />
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

    <!-- for attempting the advanced quiz on the mentee page -->
    <div class="modal fade" id="advancedQuizModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="advanced-quiz-modal-title">Attempt Basic Quiz</h4>
                </div>
                <div class="modal-body" id="advanced-quiz-modal-body">
                    <!-- for the table containing all the questions -->
                    <form id="formSubmitAdvancedQuiz">
                        <table class="table">
                            <tr>
                                <td class="advQ1">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="advA1" placeholder="Enter Answer 1" />
                                </td>
                            </tr>

                           <tr>
                                <td class="advQ2">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="advA2" placeholder="Enter Answer 2" />
                                </td>
                            </tr>

                           <tr>
                                <td class="advQ3">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="advA3" placeholder="Enter Answer 3" />
                                </td>
                            </tr>

                           <tr>
                                <td class="advQ4">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="advA4" placeholder="Enter Answer 4" />
                                </td>
                            </tr>

                           <tr>
                                <td class="advQ5">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="advA5" placeholder="Enter Answer 5" />
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Submit Quiz" id="btnSubmitAdvancedQuiz" class="btn btn-lg btn-primary btn-block" />
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

    <!-- for attempting the advanced quiz on the mentee page -->
    <div class="modal fade" id="notify-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="notify-modal-title"></h4>
                </div>
                <div class="modal-body" id="advanced-quiz-modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- for notifications on the mentee page -->
    <div class="modal fade" id="notification-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="notification-modal-title">New Version!</h4>
                </div>
                <div class="modal-body">
                    <h1 class="page-header">
                        We just revamped!
                    </h1>

                    <p>
                        Welcome to the new verion of M-R portal! <br />
                    </p>

                    <p>We have revamped the M-R portal to give you more flexibility. Remember to select your course from the top right corner of your dashboard. Please note that only the courses enrolled by you under the hood of Mentored-Research will be visible in the list.</p>

                    <p>Also, please select the appropriate course before submitting any requests for assistance. That'll help us keep things sorted.</p>

                    <p>For any more related queries or issues, please drop in a mail to us at: <code>tech@mentored-research.com</code></p>

                    <br />

                    <input type="checkbox" name="check-notification" id="check-notification" class="checkbox" style="float:left;" />
                    <label for="check-notification">&nbsp;&nbsp;Got it! Don't show this message again</label>

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
