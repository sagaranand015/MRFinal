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

    <title>Mentored-Research | Mentor</title>

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

		.assignment-video, .assignment-report, .assignment-offtopic, .assignment-extra {
			cursor: pointer;
		}
		 
    </style>

	<script type="text/javascript">
        
		$(window).load(function() {

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
            else {
            	showLoading();
	    		$.ajax({
	    			type: "GET",
	    			url: "AJAXFunctions.php",
	    			data: {
	    				no: "2", email: email, table: "Mentor"
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
	    					$('#profile-header').html(res[1] + " Profile");

	    					// set the cookie for the mentorID.
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

            // to hide all the divs on the ready() function.
            // this is supposed to be done here and not in ready() function. Or else, it gives an error while loading the divs.
            $('.main-div').hide();
            $('.CRP').trigger('click');

		});   // end of load function.

        $(document).ready(function() {

        	document.title = "Mentor | " + $.cookie("email");

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
                            no: "1", email: email, name: name, contact: contact, profile: profile, table: "Mentor"
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

            // for all the links on the left hand side.

            // for the Central Resources page on LHS
            $('.CRP').on('click', function() {
            	showDiv($('.CRP-div'));
            	changeActiveState($(this).parent('li'));

            	// get the assignments drop down list from here.
            	var email = $.cookie("email");
            	var id = $.cookie("id");
            	if($.cookie("email") == "undefined" || $.cookie("email") == undefined) {
            		popup.children('p').remove();
            		popup.append("<p>You have not logged in properly. Please logout and login again.</p>").fadeIn();
            	}
            	else {
            		showLoading();
	            	$.ajax({
	            		type: "GET",
	            		url: "AJAXFunctions.php",
	            		data: {
	            			no: "18", email: email, id: id
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
					window.open(url, "_blank");
				}
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
            	var mentorEmail = $.cookie("email");
            	if(mentorEmail == "" || mentorEmail == undefined) {
            		popup.children('p').remove();
            		popup.append("<p>Looks like you have not logged in properly. Please try logging in again.</p>").fadeIn();
            	}
            	else {
            		showLoading();
	            	$.ajax({
	            		type: "GET",
	            		url: "AJAXFunctions.php",
	            		data: {
	            			no: "19", mentorEmail: mentorEmail
	            		},
	            		success: function(response) {
                            if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();                     
                            }
                            else if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Calender Exists in the database. Please contact your director for the Calender. Thank You.</p>").fadeIn();                     
                            }
                            else {
                                // show the course calender in the calender-div.
                                $('.calender-div').children('img').remove();
                                $('.calender-div').append("<img src='" + response + "' />");
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
            $('.director').on('click', function() {
            	showDiv($('.director-div'));
            	changeActiveState($(this).parent('li'));

            	var email = $.cookie("email");
            	var id = $.cookie("id");
            	if($.cookie("email") == "undefined" || $.cookie("email") == undefined || $.cookie("email") == "") {
            		popup.children('p').remove();
            		popup.append("<p>You have not logged in properly. Please <a href='http://mentored-research.com/login' style='color: black;'>LOGIN AGAIN</a> to continue.</p>").fadeIn();
            	}
            	else {
            		showLoading();
	            	$.ajax({
	            		type: "GET",
	            		url: "AJAXFunctions.php",
	            		data: {
	            			no: "20", email: email, id: id
	            		},
	            		success: function(response) {
	            			if(response.DirectorName == "undefined" || response.DirectorName == undefined || response.DirectorName == "") {
	            				$('.director-name').html("No Data Available");
            				}
            				else {
            					$('.director-name').html(response.DirectorName);
            				}	
            				if(response.DirectorContact == "undefined" || response.DirectorContact == undefined || response.DirectorContact == "") {
	            				$('.director-contact').html("No Data Available");
            				}
            				else {
            					$('.director-contact').html(response.DirectorContact);
            				}	
            				if(response.DirectorEmail == "undefined" || response.DirectorEmail == undefined || response.DirectorEmail == "") {
	            				$('.director-email').html("No Data Available");
            				}
            				else {
            					$('.director-email').html(response.DirectorEmail);
            				}	
            				if(response.DirectorProfile == "undefined" || response.DirectorProfile == undefined || response.DirectorProfile == "") {
	            				$('.director-profile').html("No Data Available");
            				}
            				else {
            					$('.director-profile').html(response.DirectorProfile);
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
			$('#btnSendMessageToDirectorModal').on('click', function() {
				var email = $('.director-email').html();   // to get the email for the mail to be send.

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
                else {
                    showLoading();
                    $('#sendMessageModal').modal('hide');
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "21", toEmail: toEmail, msg: msg, email: email
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
                                no: "17", email: email, oldPassword: oldPassword, newPassword: newPassword, newPasswordConfirm: newPasswordConfirm, table: "Mentor"
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
                return false;
            });   // end of .password on LHS.

            // for download the assignment and uploading the feedback for an assignment.
            $('.feedback').on('click', function() {
                showDiv($('.feedback-div'));
                changeActiveState($(this).parent('li'));

                var id = $.cookie("id");
                var email = $.cookie("email");

                if(id == "" || id == undefined || id == "undefined" || email == "" || email == undefined || email == "undefined") {
                    popup.children('p').remove();
                    popup.append("Looks like you have not logged in properly. Please login back and try again."). fadeIn();
                }
                else {   // get all the submissions and upload feedbacks.
                    // firstly, get the list of mentees
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "26", email: email, id: id
                        },
                        success: function(response) {
                            if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No suitable mentees found.</p>").fadeIn();
                            }
                            else if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();  
                            }
                            else {
                                $('.feedback-mentee').html(response);
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
                }   // end of the else if logging in.

                // now, for the showing of the assignment ddl when a mentee is selected.
                $('.feedback-div').delegate('#ddl-mentee', 'change', function() {
                    var menteeId = $(this).val();
                    $.cookie("menteeId", menteeId);
                    if(menteeId == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>Please select a mentee to get the submitted assignments</p>").fadeIn();
                    }
                    else {
                        showLoading();
                        $.ajax({
                            type: "GET",
                            url: "AJAXFunctions.php",
                            data: {
                                no: "27", email: email, id: id, menteeId: menteeId
                            },
                            success: function(response) {
                                if(response == "0") {
                                    popup.children('p').remove();
                                    popup.append("<p>No Matching Assignments found.</p>").fadeIn();
                                }
                                else if(response == "-1") {
                                    popup.children('p').remove();
                                    popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();  
                                }
                                else {
                                    $('.feedback-assignment').html(response);
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
                });    // end of feedback-div delegate change event.

                $('.feedback-div').delegate('#ddl-assignment', 'change', function() {
                    var assId = $(this).val();
                    $.cookie("assId", assId);
                    var submission = $(this).find('option:selected').attr('data-submission');
                    var feedback = $(this).find('option:selected').attr('data-feedback');
                    if(assId == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>Please select the Assignment to show the Submission and Feedback Details.</p>").fadeIn();
                    }
                    else {
                        $('.feedback-submission').html("<a href='" + submission + "' target='_blank'>Download Submission here</a>");

                        if(feedback == "") {
                            $('.feedback-feedback').html("<a href='#'>No Feedback uploaded yet.</a>");                            
                        }
                        else {
                            $('.feedback-feedback').html("<a href='" + feedback + "' target='_blank'>Download Feedback here</a>");                            
                        }
                    }
                    return false;
                });

                // for the helper functions for the file upload things.
                //function to check file size before uploading.
                function beforeSubmitAssignmentFeedback() {
                    alertMsg.children('p').remove();
                    alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
                    //check whether browser fully supports all File API
                    if (window.File && window.FileReader && window.FileList && window.Blob) {
                        if( !$('#fileUploadFeedback').val()) {   //check empty input filed 
                            alertMsg.children('p').remove();
                            alertMsg.fadeOut();
                            popup.children('p').remove();
                            popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
                            return false;
                        }
                        var fsize = $('#fileUploadFeedback')[0].files[0].size; //get file size
                        var ftype = $('#fileUploadFeedback')[0].files[0].type; // get file type
                        //allow file types 
                        switch(ftype) {
                            case 'image/png': 
                            case 'image/gif': 
                            case 'image/jpeg': 
                            case 'image/pjpeg':
                            case 'text/plain':
                            case 'text/html':
                            case 'application/x-zip-compressed':
                            case 'application/pdf':
                            case 'application/msword':
                            case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                            case 'application/vnd.ms-excel':
                            case 'video/mp4':
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
                }   // end of beforeSubmitAssignmentSolution function.

                function afterSuccessAssignmentFeedback() {
                    // to hide the loading overlay after the uploading is done.
                    hideLoading();
                    popup.children('p').remove();
                    popup.fadeOut();
                    $('.progress').fadeOut();
                    alertMsg.fadeIn();
                    // finally, trigger the solution button for reloading.
                    $('.feedback').trigger('click');
                    // to fadeOut the alertMsg after 10 seconds.
                    setTimeout(function() {
                        alertMsg.fadeOut();
                    }, 10000);
                }     // end of afterSuccessAssignmentSolution function

                // code for assignmentSolution File upload
                var optionsAssignmentFeedback = { 
                    target:   '#alertMsg',   // target element(s) to be updated with server response 
                    beforeSubmit:  beforeSubmitAssignmentFeedback,  // pre-submit callback 
                    success:       afterSuccessAssignmentFeedback,  // post-submit callback 
                    uploadProgress: OnProgress, //upload progress callback 
                    resetForm: true        // reset the form after successful submit 
                };

                // for uploading the feedback as file from the mentor.
                $('#formUploadFeedback').submit(function() {
                    if($.cookie("assId") == "undefined" || $.cookie("assId") == undefined || $.cookie("assId") == "" || $.cookie("assId") == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>The Assignment has not been selected. Please do so first.</p>").fadeIn();
                    }
                    else if($.cookie("menteeId") == "undefined" || $.cookie("menteeId") == undefined || $.cookie("menteeId") == "" || $.cookie("menteeId") == "-1") {
                        popup.children('p').remove();
                        popup.append("<p>The Mentee has not been selected. Please do so first.</p>").fadeIn();
                    }
                    else {
                        $(this).ajaxSubmit(optionsAssignmentFeedback);     
                    }
                    return false;
                });   // end of formUploadFeedback
                return false;
            });    // end of the feedback div

            // for the mentee status div
            $('.status').on('click', function() {
                showDiv($('.status-div'));
                changeActiveState($(this).parent('li'));

                var email = $.cookie("email");
                var id = $.cookie("id");

                // remove the previous tables and headings.
                $('.status-div').children('table, h3').remove();

                if(id == "undefined" || id == "" || id == undefined || email == "" || email == "undefined" || email == undefined) {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not logged in properly. Please login again.</p>").fadeIn();
                }
                else {
                    // firstly, get the mentee names and the submissions and feedbacks and the send msg options.
                    showLoading();
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "38", mentorId: id, mentorEmail: email
                        },
                        success: function(response) {
                            if(response == "0") {
                                popup.children('p').remove();
                                popup.append("<p>No Submission/Feedback Records found.</p>").fadeIn();
                            }
                            else if(response == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();      
                            }
                            else {
                                $('.status-div').append(response);
                            }
                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your Request. Please try again.</p>").fadeIn();  
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });  // end of ajax request
                }  // end of else.

                // for the click event of the send message.
                $('.status-div').delegate('.mentee-status-message', 'click', function() {
                    var sendEmail = $(this).attr('data-email');
                    var sendId = $(this).attr('data-id');

                    if(sendEmail == "" || sendEmail == "No Data Available") {
                        $('#txtSendStatusMessageEmail').val("Email Address not Available");
                    }
                    else {
                        $('#txtSendStatusMessageEmail').val(sendEmail);  // show it to the user, but disabled.
                    }
                    // show the modal now.
                    $('#sendStatusMessageModal').modal('show');

                    return false;
                });

                // for sending the message from the mentee status page.
                $('#btnSendStatusMessage').on('click', function() {
                    var toEmail = $('#txtSendStatusMessageEmail').val().trim();
                    var msg = $('#txtSendStatusMessage').val();
                    var email = $.cookie("email");

                    if(email == "" || email == "undefined" || email == undefined) {
                        popup.children('p').remove();
                        popup.append("<p>You have not logged in properly. Please <a href='http://mentored-research.com/login' style='color: black;'>LOGIN AGAIN</a> to continue.</p>").fadeIn();
                    }
                    else {
                        showLoading();
                        $('#sendStatusMessageModal').modal('hide');
                        $.ajax({
                            type: "GET",
                            url: "AJAXFunctions.php",
                            data: {
                                no: "39", toEmail: toEmail, msg: msg, fromEmail: email
                            },
                            success: function(response) {
                                console.log(response);
                                if(response[0]["status"] == "sent") {
                                    popup.children('p').remove();
                                    popup.append("<p>Your Message has been sent. Thank You.</p>").fadeIn();

                                    // remove the contents of the message box here.
                                    $('#txtSendStatusMessage').val("");
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
                        });    
                    }   // end of else.
                    return false;
                });


                return false;
            });   // end of status link on LHS.

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
                    <li><a href="#" class="calender">Program Calender</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="profile">Profile</a></li>
                    <li><a href="#" class="password">Change Password</a></li>
                	<li><a href="#" class="director">Director Profile</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="#" class="feedback">Give Feedback</a></li>
                    <li><a href="#" class="status">Mentee Status</a></li>
                </ul>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block menu-show" id="btnShowMenu">
        	Menu
        </button>

        <!-- for showing the statuses of the mentees under the mentor -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div status-div">
            <h1 class="page-header">
                Mentee Status
            </h1>

            <!-- data will come from ajax here -->
        </div>

        <!-- for giving the feedback to the mentee assignments -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div feedback-div">
            <h1 class="page-header">
                Upload Feedback
            </h1>

            <table class="table">
                <tr>
                    <td>
                        <label>Select Mentee: </label>
                    </td>
                    <td class="feedback-mentee">
                        <!-- mentee data will come from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Select Assignment: </label>
                    </td>
                    <td class="feedback-assignment">
                        <!-- Assignment data will come from ajax -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Download Mentee Submission: </label>
                    </td>
                    <td class="feedback-submission">
                        <!-- link to download the submission of the mentee -->
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Download Previous Feedback: </label>
                    </td>
                    <td class="feedback-feedback">
                        <!-- link to download the submission of the mentee -->
                    </td>
                </tr>
            </table>

            <form id="formUploadFeedback" action="feedback-upload.php" method="post" enctype="multipart/form-data">
                <h2 class="page-header text-center">
                    Upload Assignment Feedback
                </h2>
                <table class="table">
                    <tr>
                        <td>
                            <input type="file" name="fileUploadFeedback" id="fileUploadFeedback" class="btn btn-lg btn-primary btn-block" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" id="btnSubmitFeedback" class="btn btn-lg btn-primary btn-block"  />
                        </td>
                    </tr>   
                </table>    
            </form>
        </div>  <!-- end of change-password div -->

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
        </div>  <!-- end of CRP-div -->

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
	        	Programme Calender
	        </h1>
	        <!-- image of the calender will come from ajax -->
        </div>   <!-- end of Programme calender div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div director-div">
        	<h1 class="page-header">
	        	Your Director Details
	        </h1>
	        <table class="table">
	        	<tr>
	        		<td>
	        			<label>Director Name: </label>
	        		</td>
	        		<td class="director-name">
	        			<!-- from ajax -->
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<label>Director Contact: </label>
	        		</td>
	        		<td class="director-contact">
	        			<!-- from ajax -->
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<label>Director Email Address: </label>
	        		</td>
	        		<td class="director-email">
	        			<!-- from ajax -->
	        		</td>
	        	</tr>
	        	<tr>
	        		<td>
	        			<label>Director Profile: </label>
	        		</td>
	        		<td class="director-profile">
	        			<!-- from ajax -->
	        		</td>
	        	</tr>
	        	<tr>
	        		<td colspan="2">
	        			<button class="btn btn-lg btn-primary btn-block" id="btnSendMessageToDirectorModal">Send Message</button>
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
					<h4 class="modal-title">Send Message to Director</h4>
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

    <!-- this is for sending the email to the mentor using the modal -->
    <div class="modal fade" id="sendStatusMessageModal">
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
                                <input type="email" id="txtSendStatusMessageEmail" placeholder="Email Address" required class="form-control" disabled="disabled" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea id="txtSendStatusMessage" placeholder="Type in your message" required class="form-control" rows="10"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSendStatusMessage">Send Message</button>
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
