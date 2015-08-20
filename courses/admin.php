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
            	$('#ddl-organisation').remove();   // to remove the previous one
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
				    		$('.dashboard-div').append(response);
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
            				$('.courseList-assPDF').children('select').remove();
            				$('.courseList-assPDF').append(response);
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
            });    // end of AssignmentPDF link on LHS
			// for the delegate function of courseList-assPDF
			$('.assignmentPDF-div').delegate('#ddl-course', 'change', function() {
				if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected the course. Please do so before uploading the calender.</p>").fadeIn();
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
	            				$('.assignmentList-assPDF').children('select').remove();
	            				$('.assignmentList-assPDF').append(response);
	            				// set the cookie for selected courseAssPDF (used for file upload)
	            				$.cookie("courseAssPDF", courseAssPDF);
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
                	// set the cookie for assignmentAssPDF (used for file upload)
					$.cookie("assignmentAssPDF", $(this).val());

					//function to check file size before uploading.
		            function beforeSubmitAssignmentPDF() {
		            	alertMsg.children('p').remove();
		            	alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
		                //check whether browser fully supports all File API
		                if (window.File && window.FileReader && window.FileList && window.Blob) {
		                    if( !$('#fileAssignmentPDF').val()) {   //check empty input filed 
		                        alertMsg.children('p').remove();
		                        alertMsg.fadeOut();
		                        popup.children('p').remove();
		                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
		                        return false;
		                    }
		                    var fsize = $('#fileAssignmentPDF')[0].files[0].size; //get file size
		                    var ftype = $('#fileAssignmentPDF')[0].files[0].type; // get file type
		                    //allow file types 
		                    switch(ftype) {
								case 'application/pdf':
		                            break;
		                        default:
		                            alertMsg.children('p').remove();
		                        	alertMsg.fadeOut();
		                            popup.children('p').remove();
		                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in PDF format only.</p>").fadeIn();
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
		            }   // end of beforeSubmitAssignmentPDF function.

		            function afterSuccessAssignmentPDF() {
		                // to hide the loading overlay after the uploading is done.
		                hideLoading();
		                popup.children('p').remove();
		                popup.fadeOut();
		                $('.progress').fadeOut();
		                alertMsg.fadeIn();
		                // to fadeOut the alertMsg after 10 seconds.
		                setTimeout(function() {
		                    alertMsg.fadeOut();
		                }, 10000);
		            	//location.reload();
		            }     // end of afterSuccessAssignmentPDF function

                	// code for assignmentPDF File upload
                	var optionsAssignmentPDF = { 
                        target:   '#alertMsg',   // target element(s) to be updated with server response 
                        beforeSubmit:  beforeSubmitAssignmentPDF,  // pre-submit callback 
                        success:       afterSuccessAssignmentPDF,  // post-submit callback 
                        uploadProgress: OnProgress, //upload progress callback 
                        resetForm: true        // reset the form after successful submit 
                    }; 

                    // check for the courseAssPDF and assignmentAssPDF cookies first and then upload the form.
                	$('#formAssignmentPDF').submit(function() { 
                		if($.cookie("courseAssPDF") == "undefined" || $.cookie("assignmentAssPDF") == "undefined" || $.cookie("courseAssPDF") == undefined || $.cookie("assignmentAssPDF") == undefined) {
                			popup.children('p').remove();
                    		popup.append("<p>You havn't selected the Course and Assignment Properly. Please try again.</p>").fadeIn();
                		}
                		else {
                			$(this).ajaxSubmit(optionsAssignmentPDF);            
                		}
                        // always return false to prevent standard browser submit and page navigation 
                        return false; 
                    });      

                	//function to check file size before uploading.
		            function beforeSubmitAssignmentSampleReport() {
		            	alertMsg.children('p').remove();
		            	alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
		                //check whether browser fully supports all File API
		                if (window.File && window.FileReader && window.FileList && window.Blob) {
		                    if( !$('#fileAssignmentSampleReport').val()) {   //check empty input filed 
		                        alertMsg.children('p').remove();
		                        alertMsg.fadeOut();
		                        popup.children('p').remove();
		                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
		                        return false;
		                    }
		                    var fsize = $('#fileAssignmentSampleReport')[0].files[0].size; //get file size
		                    var ftype = $('#fileAssignmentSampleReport')[0].files[0].type; // get file type
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
								case 'application/vnd.ms-excel':
								case 'video/mp4':
		                            break;
		                        default:
		                            alertMsg.children('p').remove();
		                        	alertMsg.fadeOut();
		                            popup.children('p').remove();
		                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in PDF format only.</p>").fadeIn();
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
		            }   // end of beforeSubmitAssignmentSampleReport function.
                	// code for assignmentSampleReport File upload
                	var optionsAssignmentSampleReport = { 
                        target:   '#alertMsg',   // target element(s) to be updated with server response 
                        beforeSubmit:  beforeSubmitAssignmentSampleReport,  // pre-submit callback 
                        success:       afterSuccessAssignmentPDF,  // post-submit callback 
                        uploadProgress: OnProgress, //upload progress callback 
                        resetForm: true        // reset the form after successful submit 
                    }; 
                    // check for the courseAssPDF and assignmentAssPDF cookies first and then upload the form.
                	$('#formAssSampleReport').submit(function() { 
                		if($.cookie("courseAssPDF") == "undefined" || $.cookie("assignmentAssPDF") == "undefined" || $.cookie("courseAssPDF") == undefined || $.cookie("assignmentAssPDF") == undefined) {
                			popup.children('p').remove();
                    		popup.append("<p>You havn't selected the Course and Assignment Properly. Please try again.</p>").fadeIn();
                		}
                		else {
                			$(this).ajaxSubmit(optionsAssignmentSampleReport);            
                		}
                        // always return false to prevent standard browser submit and page navigation 
                        return false; 
                    });     // end of form submit for formAssSampleReport 

                	//function to check file size before uploading.
		            function beforeSubmitAssignmentOffTopic() {
		            	alertMsg.children('p').remove();
		            	alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
		                //check whether browser fully supports all File API
		                if (window.File && window.FileReader && window.FileList && window.Blob) {
		                    if( !$('#fileAssignmentOffTopic').val()) {   //check empty input filed 
		                        alertMsg.children('p').remove();
		                        alertMsg.fadeOut();
		                        popup.children('p').remove();
		                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
		                        return false;
		                    }
		                    var fsize = $('#fileAssignmentOffTopic')[0].files[0].size; //get file size
		                    var ftype = $('#fileAssignmentOffTopic')[0].files[0].type; // get file type
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
								case 'application/vnd.ms-excel':
								case 'video/mp4':
		                            break;
		                        default:
		                            alertMsg.children('p').remove();
		                        	alertMsg.fadeOut();
		                            popup.children('p').remove();
		                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in PDF format only.</p>").fadeIn();
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
		            }   // end of beforeSubmitAssignmentOffTopic function.
                    // code for assignmentOffTopic File upload
                	var optionsAssignmentOffTopic = { 
                        target:   '#alertMsg',   // target element(s) to be updated with server response 
                        beforeSubmit:  beforeSubmitAssignmentOffTopic,  // pre-submit callback 
                        success:       afterSuccessAssignmentPDF,  // post-submit callback 
                        uploadProgress: OnProgress, //upload progress callback 
                        resetForm: true        // reset the form after successful submit 
                    }; 

                    // check for the courseAssPDF and assignmentAssPDF cookies first and then upload the form.
                	$('#formAssOffTopic').submit(function() { 
                		if($.cookie("courseAssPDF") == "undefined" || $.cookie("assignmentAssPDF") == "undefined" || $.cookie("courseAssPDF") == undefined || $.cookie("assignmentAssPDF") == undefined) {
                			popup.children('p').remove();
                    		popup.append("<p>You havn't selected the Course and Assignment Properly. Please try again.</p>").fadeIn();
                		}
                		else {
                			$(this).ajaxSubmit(optionsAssignmentOffTopic);            
                		}
                        // always return false to prevent standard browser submit and page navigation 
                        return false; 
                    });     // end of form submit for formAssSampleReport 

                    //function to check file size before uploading.
		            function beforeSubmitAssignmentExtra() {
		            	alertMsg.children('p').remove();
		            	alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
		                //check whether browser fully supports all File API
		                if (window.File && window.FileReader && window.FileList && window.Blob) {
		                    if( !$('#fileAssignmentExtra').val()) {   //check empty input filed 
		                        alertMsg.children('p').remove();
		                        alertMsg.fadeOut();
		                        popup.children('p').remove();
		                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
		                        return false;
		                    }
		                    var fsize = $('#fileAssignmentExtra')[0].files[0].size; //get file size
		                    var ftype = $('#fileAssignmentExtra')[0].files[0].type; // get file type
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
								case 'application/vnd.ms-excel':
								case 'video/mp4':
		                            break;
		                        default:
		                            alertMsg.children('p').remove();
		                        	alertMsg.fadeOut();
		                            popup.children('p').remove();
		                            popup.append("<p>The file uploaded is not supported by the server. Please upload the file in correct format.</p>").fadeIn();
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
		            }   // end of beforeSubmitAssignmentExtra function.
                    // code for assignmentOffTopic File upload
                	var optionsAssignmentExtra = { 
                        target:   '#alertMsg',   // target element(s) to be updated with server response 
                        beforeSubmit:  beforeSubmitAssignmentExtra,  // pre-submit callback 
                        success:       afterSuccessAssignmentPDF,  // post-submit callback 
                        uploadProgress: OnProgress, //upload progress callback 
                        resetForm: true        // reset the form after successful submit 
                    }; 

                    // check for the courseAssPDF and assignmentAssPDF cookies first and then upload the form.
                	$('#formAssExtra').submit(function() { 
                		if($.cookie("courseAssPDF") == "undefined" || $.cookie("assignmentAssPDF") == "undefined" || $.cookie("courseAssPDF") == undefined || $.cookie("assignmentAssPDF") == undefined) {
                			popup.children('p').remove();
                    		popup.append("<p>You havn't selected the Course and Assignment Properly. Please try again.</p>").fadeIn();
                		}
                		else {
                			$(this).ajaxSubmit(optionsAssignmentExtra);            
                		}
                        // always return false to prevent standard browser submit and page navigation 
                        return false; 
                    });     // end of form submit for formAssSampleReport 


                }   // end of else (for ddl-assignment value to be -1 or not)
				return false;
			});
			// for adding the video link to the database.
			$('#formAssVideo').validator().on('submit', function (e) { 
				if (e.isDefaultPrevented()) {
					alertMsg.children('p').remove();
                    alertMsg.fadeOut();
                    popup.children('p').remove();
                    popup.append("<p>Oops! Looks like you have not provided the Video Link. Please Recheck and try again.</p>").fadeIn();
				}
				else {
					// put the ajax Request for the Video link to the database.
					if($.cookie("assignmentAssPDF") == "undefined" ||  $.cookie("assignmentAssPDF") == undefined) {
						popup.children('p').remove();
				        popup.append("<p>Looks like you have not selected the Assignment Properly. Please do so first.</p>").fadeIn();	
					}
					else {
						var assVideo = $('#txtAssVideo').val().trim();
						var assID = $.cookie("assignmentAssPDF");
						showLoading();
						$.ajax({
							type: "GET",
							url: "AJAXFunctions.php",
							data: {
								no: "11", assID: assID, assVideo: assVideo
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
					}  // end of inner else.
				}   // end of outer else.
				return false;
			});  // end of add video link form

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
            });
			// for the delegate event of the change of the course drop down on calender upload.
            $('.calender-div').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {
                    $.cookie("courseID", $(this).val());
                    // for uploading the calender to the server.
                    var options = { 
                        target:   '#alertMsg',   // target element(s) to be updated with server response 
                        beforeSubmit:  beforeSubmit,  // pre-submit callback 
                        success:       afterSuccess,  // post-submit callback 
                        uploadProgress: OnProgress, //upload progress callback 
                        resetForm: true        // reset the form after successful submit 
                    }; 

                    $('#formCalender').submit(function() { 
                        $(this).ajaxSubmit(options);            
                        // always return false to prevent standard browser submit and page navigation 
                        return false; 
                    });      
                }   // end of else
            });  // end of change (delegate) function in calender-div courses list

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
            });
			// for the onfocusout event of the guide name
			$('#txtGuideName').on('focusout', function() {
				$.cookie("guideName", $(this).val());
				return false;
			});
			// for the delegate event of the change of the course drop down on calender upload.
            $('.guide-div').delegate('#ddl-course', 'change', function() {
                if($(this).val() == "-1") {
                    popup.children('p').remove();
                    popup.append("<p>Looks like you have not selected a course. Please do so before uploading the calender.</p>").fadeIn();
                }
                else {
                    $.cookie("courseID", $(this).val());

                    //function to check file size before uploading.
		            function beforeSubmitCourseGuide() {
		            	alertMsg.children('p').remove();
		            	alertMsg.append("<p>Please wait while we prepare the files for upload...</p>").fadeIn();
		                //check whether browser fully supports all File API
		                if (window.File && window.FileReader && window.FileList && window.Blob) {
		                    if( !$('#fileGuide').val()) {   //check empty input filed 
		                        alertMsg.children('p').remove();
		                        alertMsg.fadeOut();
		                        popup.children('p').remove();
		                        popup.append("<p>Apparently, you have not uploaded the file yet. Please do so.</p>").fadeIn();
		                        return false;
		                    }
		                    var fsize = $('#fileGuide')[0].files[0].size; //get file size
		                    var ftype = $('#fileGuide')[0].files[0].type; // get file type
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
		            }   // end of beforeSubmit function.

		            //function after succesful file upload (when server response)
		            function afterSuccessCourseGuide() {
		                // to hide the loading overlay after the uploading is done.
		                hideLoading();
		                popup.children('p').remove();
		                popup.fadeOut();
		                $('.progress').fadeOut();
		                alertMsg.fadeIn();
		                // finally, remove the courseID cookie here.
		                $.removeCookie("courseID");
		            	$.removeCookie("guideName");
		            	// to fadeOut the alertMsg and Reload after 3 seconds.
		                setTimeout(function() {
		                    alertMsg.fadeOut();
		                    //location.reload();
		                }, 10000);
		            }     // end of afterSuccess function

                    // for uploading the calender to the server.
                    var optionsCourseGuide = { 
                        target:   '#alertMsg',   // target element(s) to be updated with server response 
                        beforeSubmit:  beforeSubmitCourseGuide,  // pre-submit callback 
                        success:       afterSuccessCourseGuide,  // post-submit callback 
                        uploadProgress: OnProgress, //upload progress callback 
                        resetForm: true        // reset the form after successful submit 
                    }; 

                    $('#formGuide').submit(function() { 
                    	if($.cookie("courseID") == "undefined" || $.cookie("courseID") == undefined || $.cookie("guideName") == "undefined" || $.cookie("guideName") == undefined) {
                    		popup.children('p').remove();
                    		popup.append("<p>Please select the course or add the Guide Name. Something's not right.</p>").fadeIn();
                    	}
                    	else if($.cookie("guideName") == "" || $('#txtGuideName').val() == "") {
                    		popup.children('p').remove();
                    		popup.append("<p>Oops! Looks like you have not added the Guide Name. Please do so first.</p>").fadeIn();	
                    	}
                    	else {
                    		$(this).ajaxSubmit(optionsCourseGuide);            
                    	}
                        // always return false to prevent standard browser submit and page navigation 
                        return false; 
                    });      
                }   // end of else
            });  // end of change (delegate) function in guide-div courses list

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
				});

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
                            case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
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
                        //location.reload();
                    }, 10000);
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
                            case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
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

                return false;
            });   // end of user link on LHS.

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
                return false;
            });   // end of .password on LHS.

			// for the change password link on the LHS
            $('.invite').on('click', function() {
                showDiv($('.invite-div'));
                changeActiveState($(this).parent('li'));

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
                });
                return false;
            });   // end of .invite on LHS.

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
                                    popup.append("<p>" + response + "</p>").fadeIn();

                                    // click the assign mentee button here.
                                    $('.assign-mentee').trigger('click');
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

                return false;
            });   // end of the assign-mentees div on LHS.

            // hide all the divs on page load. Except for first div.
            $('.main-div').hide();
            $('.dashboard').trigger('click');

            // for the delegate event of the change of the organisation drop down on dashboard.
            $('.dashboard-div').delegate('#ddl-organisation', 'change', function() {
            	alert($(this).val());
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
                	<li><a href="#" class="dashboard">Admin Dashboard</a></li>
                    <li><a href="#" class="profile">Profile</a></li>
                    <li><a href="#" class="password">Change Password</a></li>
					<li><a href="#" class="invite">Send Invites</a></li>                    
                </ul>
                <ul class="nav nav-sidebar">
            		<li><a href="#" class="course">Add a Course</a></li>
            		<li><a href="#" class="organisation">Add an organisation</a></li>
            		<li><a href="#" class="calender">Add Course Calender</a></li>
            		<li><a href="#" class="guide">Add Course Guide</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="assignment">Add Assignment Details</a></li>
                	<li><a href="#" class="assignmentPDF">Add Assignment Material</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                	<li><a href="#" class="user">Add User</a></li>
                    <li><a href="#" class="assign-mentee">Assign Mentees</a></li>
                </ul>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block menu-show" id="btnShowMenu">
        	Menu
        </button>

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
									<input type="submit" value="Add Mentor" class="btn btn-lg btn-primary btn-block" />
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
	        				<input type="date" id="txtAssPostedOn" class="form-control" placeholder="mm/dd/yyyy" required />
	        			</td>
	        		</tr>
	        		<tr>
	        			<td>
	        				<label>Assignment Deadline: </label>
	        			</td>
	        			<td>
	        				<input type="date" id="txtAssDeadline" class="form-control" placeholder="mm/dd/yyyy" required />
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
    				<td class="courseList-assPDF">
    					<!-- data will come from ajax here -->
    				</td>
    			</tr>
    			<tr>
    				<td>
						<label>Select Assignment: </label>
    				</td>
    				<td class="assignmentList-assPDF">
    					<!-- data will come from ajax here -->
    				</td>
    			</tr>
        	</table>

        	<br />

        	<form action="assignment-upload.php" method="post" enctype="multipart/form-data" id="formAssignmentPDF">
        		<h3 class="page-header">
    				Upload Assignment PDF
        		</h3>
        		<table class="table">
	    			<tr>
	    				<td>
	    					<label>Upload Assignment PDF (less than 5 MB): </label>
	    				</td>
	    				<td>
	    					<input type="file" name="fileAssignmentPDF" id="fileAssignmentPDF" class="btn btn-lg btn-primary btn-block" required />
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
        	<form role="form" data-toggle="validator" id="formAssVideo">
		    	<h3 class="page-header">
					Add Video Lectures
	    		</h3>
        		<table class="table">
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
        	<form action="sampleReport-upload.php" method="post" enctype="multipart/form-data" id="formAssSampleReport">
        		<h3 class="page-header">
    				Upload Sample Reports
        		</h3>
        		<table class="table">
					<tr>
						<td>
							<label>Upload Sample Report(less than 5MB): </label>
						</td>
						<td>
							<input type="file" name="fileAssignmentSampleReport" id="fileAssignmentSampleReport" class="btn btn-lg btn-primary btn-block" required />
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
        	<form action="offTopic-upload.php" method="post" enctype="multipart/form-data" id="formAssOffTopic">
        		<h3 class="page-header">
    				Upload Off Topic Reads
        		</h3>
        		<table class="table">
					<tr>
						<td>
							<label>Upload Off Topic Reads(less than 5MB): </label>
						</td>
						<td>
							<input type="file" name="fileAssignmentOffTopic" id="fileAssignmentOffTopic" class="btn btn-lg btn-primary btn-block" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Sample Report" id="btnAddAssOffTopic" />
						</td>
					</tr>
		    	</table>	
        	</form>

        	<br />

        	<!-- table for Assignment Off Topic Upload -->
        	<form action="extra-upload.php" method="post" enctype="multipart/form-data" id="formAssExtra">
				<h3 class="page-header">
    				Upload Assignment Extras
        		</h3>        	
        		<table class="table">
					<tr>
						<td>
							<label>Upload Extra Reads(less than 5MB): </label>
						</td>
						<td>
							<input type="file" name="fileAssignmentExtra" id="fileAssignmentExtra" class="btn btn-lg btn-primary btn-block" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Sample Report" id="btnAddAssExtra" />
						</td>
					</tr>
		    	</table>	
        	</form>

        </div>   <!-- end of assignmentPDF-div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div guide-div">
	        <h1 class="page-header">
	        	Upload Course Guide
	        </h1>

	        <!-- Data will come from the AJAX here -->
            <form action="guide-upload.php" method="post" enctype="multipart/form-data" id="formGuide">
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
    		    			<label>Guide Name: </label>
    		    		</td>
    		    		<td>
    		    			<input type="text" placeholder="Course Guide Name" id="txtGuideName" class="form-control" required />
    		    		</td>
    		    	</tr>
                    <tr>
                        <td>
                            <label>Upload Course Guide: </label>
                        </td>
                        <td>
                            <input name="fileGuide" id="fileGuide" type="file" class="btn btn-lg btn-primary btn-block" />            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit"  id="submit-btn" value="Upload Course Guide" class="btn btn-lg btn-primary btn-block" />                
                        </td>
                    </tr>
                </table>
            </form>
        </div>   <!-- end of guide div -->

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div dashboard-div">
	        <h1 class="page-header">
	        	Admin Dashboard
	        </h1>

	        <!-- Data will come from the AJAX here -->
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
		    	Upload Course Calender
		    </h1>

		    <!-- Data will come from the AJAX here -->
            <form action="calender-upload.php" method="post" enctype="multipart/form-data" id="formCalender">
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
                            <input type="submit"  id="submit-btn" value="Upload Calender" class="btn btn-lg btn-primary btn-block" />                
                        </td>
                    </tr>
                </table>
            </form>
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
