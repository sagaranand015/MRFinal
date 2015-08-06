<?php 

// this is the file for all the helper functions in the contact us page.

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// for mandrill mail sending API.
require_once 'mandrill/Mandrill.php'; 

// for sending the invites to the emails entered.
function SendInviteMessage($to, $toName, $from, $fromName) {
	try {
		$mandrill = new Mandrill('J99JDcmNNMQLw32QJGDadQ');
		$message = array(
	        'html' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="margin-top: 0px !important; padding-top: 0px !important">
<head>

<style type="text/css">
	html, body{ margin-top: 0px !important; padding-top: 0px !important; }
	body{ background-color:#FFFFFF; margin-top: 0px !important; padding-top: 0px !important; font-family:sans-serif; }
	table{ margin-top: 0px !important; padding-top: 0px !important; }
</style>


<style type="text/css">
		a img{ color:#000001 !important; }

.wysiwyg-text-align-right{ text-align: right; }
.wysiwyg-text-align-center { text-align: center; }
.wysiwyg-text-align-left{ text-align: left; }
.wysiwyg-text-align-justify{ text-align: justify; }

body{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#000000!important; font-style:normal; font-family:Arial; font-size:14px; line-height:24px; }

h1, #email-284941 h1{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#000000!important; font-weight:400; font-style:normal; font-family:Arial; font-size:36px; line-height:44px; }

h2, #email-284941 h2{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#000000!important; font-weight:400; font-style:normal; font-family:Arial; font-size:24px; line-height:32px; }

h3, #email-284941 h3{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#000000!important; font-weight:400; font-style:normal; font-family:Arial; font-size:15px; line-height:21px; }

p, #email-284941 p{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#000000!important; font-style:normal; font-family:Arial; font-size:14px; line-height:24px; }

a, #email-284941 a{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#1122CC!important; text-decoration:underline; }

h1.open-sans, #email-284941 h1.open-sans{ text-shadow:none; padding-top:0; padding-right:0; padding-bottom:0; padding-left:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0; color:#FFFFFF!important; font-family:Helvetica; font-size:38px; line-height:49px; }


.h1_color_span_wrapper{ color: #000000; }
.h2_color_span_wrapper{ color: #000000; }
.h3_color_span_wrapper{ color: #000000; }
.p_color_span_wrapper{ color: #000000; }
.a_color_span_wrapper{ color: #1122CC; }
.open-sans_color_span_wrapper{ color: #FFFFFF; }


		.mi-all{ display: block; }
		.mi-desktop{ display: block; }

	.mi-mobile{
		display: none;
		font-size: 0; 
		max-height: 0; 
		line-height: 0; 
		padding: 0;
		float: left;
		overflow: hidden;
		mso-hide: all; /* hide elements in Outlook 2007-2013 */
	}


</style>

<style type="text/css" >

	div, p, a, li, td { -webkit-text-size-adjust:none; }
	
	@media only screen and (max-device-width: 480px), screen and (max-width: 480px), screen and (orientation: landscape) and (max-width: 630px) {
		
		.mi-desktop{ display: none !important; }

		/* then show the mobile one */
		.mi-mobile{ 
			display: block !important;
			font-size: 12px !important;
			max-height: none !important;
			line-height: 1.5 !important;
			float: none !important;
			overflow: visible !important;
		}
	}

</style>

	
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
</head><body id="email-284941" style="background: #FFFFFF; color: #000000 !important; font-family: Arial; font-size: 14px; font-style: normal; line-height: 24px; margin: 0px 0 0 0px; padding: 0px 0 0; text-shadow: none" bgcolor="#FFFFFF"><style type="text/css">
body {
margin-top: 0px !important; padding-top: 0px !important;
}
body {
background-color: #FFFFFF; margin-top: 0px !important; padding-top: 0px !important; font-family: sans-serif;
}
body {
text-shadow: none; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; color: #000000 !important; font-style: normal; font-family: Arial; font-size: 14px; line-height: 24px;
}
</style><img src="http://t.inkbrush.com/p/cp/6515a1584ae8fe3b/o.gif" width="1" height="1" /><div class="mi-desktop" style="display: block">
	<table width="100%" cellspacing="0" cellpadding="0" align="center" style="background: #FFFFFF; border-collapse: collapse; border-spacing: 0px; border: 0px none; margin: 0px; padding: 0px" bgcolor="#FFFFFF">
		<tbody>
			<tr align="center" style="border-collapse: collapse; border-spacing: 0px; border: 0px none">
				<td valign="top" align="center" style="border-collapse: collapse; border-spacing: 0px; border: 0px none">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse: collapse; border-spacing: 0px; border: 0px none; margin: 0px; padding: 0px">
						<tbody>
								<tr align="left" style="border-collapse: collapse; border-spacing: 0px; border: 0px none">
									<td width="100%">
										<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0px; border: 0px none; margin-top: 0px !important; padding-top: 0px !important">
											<tbody>
												<tr align="left" style="border-collapse: collapse; border-spacing: 0px; border: 0px none">
													<td width="100%">
														<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0px; border: 0px none; margin-top: 0px !important; padding-top: 0px !important">
															<tbody>
																<tr style="border-collapse: collapse; border-spacing: 0px; border: 0; height: 50px"><td width="100%" valign="top" height="50" align="left" style="background: #FFFFFF" bgcolor="#FFFFFF"><img width="1" height="50" style="border: 0; display: block; line-height: 1; opacity: 0; padding: 0px" src="http://mentored-research.com/mail/images/images/clear.gif" alt="" /></td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
		</tbody>
	</table>
</div>
<table align="center" cellpadding="0" cellspacing="0" width="100%" style="background: #FFFFFF; border-collapse: collapse; border-spacing: 0; border: 0; margin: 0px 0 0; padding: 0px 0 0" bgcolor="#FFFFFF"><tr align="center" style="border-collapse: collapse; border-spacing: 0; border: 0">
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; border: 0">
									
<div class="mi-all" style="display: block"><table width="827" class="mi-all" align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; display: block; margin: 0px 0 0; min-width: 827px; padding: 0px 0 0"><tbody><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top"><table align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin: 0px 0 0; min-width: 827px; padding: 0px 0 0"><tbody><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-59313d843bf0f2e46fc00f516afd7fca69ae6d99.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><a href="http://www.mentored-research.com" target="_blank" style="border: none; color: #1122CC !important; display: block; font-size: 10px;  margin-top:0; padding-top:0; margin-right:0; padding-right:0; margin-bottom:0; padding-bottom:0; margin-left:0; padding-left:0;  text-decoration: none; text-shadow: none"><img src="http://mentored-research.com/mail/images/images/image-4a2dd46cc68f0b9111cf1dcea97e8f73afc6fd5e.jpg" style="border: 0; color: #000001 !important; display: block; line-height: 0px" /></a></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-e8f4d6965a67eb333d1b2b9f93e5b827e4415da0.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top"><table align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin: 0px 0 0; min-width: 827px; padding: 0px 0 0"><tbody><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-e9d90b63ede9c9bf6d054c8242fb441d59000b45.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-6484f8570550050b40dfa4c42a10e9d1d6b9b988.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-42c660c45d4dcc7925678568bfa36e1aff34363a.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-8cb9e23b3de4c3fe99b35117b0582cd5ca192408.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-122a5fb1f402d4a9a024752398836843a37693e4.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-2e7b40f5a2498634500d4693d1d49fd09f9524f1.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-154902fcce9cc63b4be3f180ed6a53ce1cc51d4f.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-437636f46f84016bfc61114774b5f3ca43975edc.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-66becc5d3fb1480034d53dffa7538f06c86042be.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-61c55db79905e953dd478f1073e942a88d2e8e75.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-2723073c1f18d9cfc3c9066e0234ad2a9805dd3b.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-6a144423123a7cfa8293f5cab112ad535c762373.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-e2cbd5bc64006b75627e9a3fa851da338a87e91c.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-89e41a8ce594adf0a5f580dfef9c52b706cb8196.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-79308373020a7f81155a79514639cf72db753e58.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-8cc0d04c73d3464c2cd6af1aa102e6429c880c7e.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top"><table align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin: 0px 0 0; min-width: 166px; padding: 0px 0 0"><tbody><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 166px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-efad5e1bd442cac9c8b9dccfc92712fa214b00c4.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-747d62b7741eb4bdf6f498172b3b053fa01a05b9.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr></tbody></table></td><td width="505" align="left" valign="middle" style="background: #448CCB" height="71" bgcolor="#448CCB"><div style="height: 70px; max-height: 70px; max-width: 504px; overflow: hidden; width: 504px"><h1 class="open-sans" style="color: #FFFFFF !important; font-family: Helvetica; font-size: 38px; font-style: normal; font-weight: 400; line-height: 49px;  margin-top:0; padding-top:0; margin-right:0; padding-right:0; margin-bottom:0; padding-bottom:0; margin-left:0; padding-left:0;  text-align: center; text-shadow: none" align="center"><span class="open-sans_color_span_wrapper" style="color: #FFFFFF">tinyurl.com/ERIDISCOUNT</span></h1></div></td><td align="left" valign="top"><table align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin: 0px 0 0; min-width: 156px; padding: 0px 0 0"><tbody><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 156px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-8291a6819978775047851cabdfeae217680c5834.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-a75a1304c115f0b2e69ff69461bd0b5439acd8a9.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top"><table align="center" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin: 0px 0 0; min-width: 827px; padding: 0px 0 0"><tbody><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-7cbc9fe2609c3db2e191f98d8fb7de914eeeae99.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-1278d1a4e69d080c6fb9b1e714d7e53b7635d7a3.jpg" style="border: 0; display: block; line-height: 0px" /></td><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-5261a5c0208e893d6c311896cdeda9fd221034c4.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr><tr align="left" style="border-collapse: collapse; border-spacing: 0; border: 0"><td><table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse; border-spacing: 0; border: 0; margin-top: 0px !important; min-width: 827px; padding-top: 0px !important"><tbody><tr style="border-collapse: collapse; border-spacing: 0; border: 0"><td align="left" valign="top" style="line-height: 0px; mso-line-height-rule: exactly"><img src="http://mentored-research.com/mail/images/images/image-22345e5c1fa82c8a6ddfcf16784f70a4ba793f89.jpg" style="border: 0; display: block; line-height: 0px" /></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div>


						</td>
					</tr>
			</table>

			

			<div style="display: none; font: 15px courier; white-space: nowrap">
			                      
			                      
			               
			</div>
  </body>
</html>

',
	        'subject' => "You've been invited to Mentored-Research",
	        'from_email' => 'info@mentored-research.co',
	        'from_name' => 'Mentored-Research',
	        'to' => array(
	            array(
	                'email' => $to,
	                'name' => $toName,
	                'type' => 'to'
	            )
	        )
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
	    $res = "1";
	    return $res;
		//return $result;
	} 
	catch(Mandrill_Error $e) {
		$res = "-1";
		return $res;
	}
}

// this is for changing the password of the specified user.
function ChangePasswordUtility($email, $newPassword, $table) {
	$resp = "-1";
	try {
		// for encrypting the password thing
		$hash = hashSSHA($newPassword);
        $encryptedPwd = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt

		$query = "update " . $table . " set " . $table . "Pwd='$encryptedPwd', Salt='$salt' where " . $table . "Email='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is for sending the mail to the newly added user by the admin.
function SendNewUserMail($email) {
	$subject = "User Added - " . $email;

	$message = "Dear " . $email . "<br /><br />";
	$message .= "Congratulations! You are now a part of the Mentored-Research Family. You have been added to the M-R database. To get started with your account, please <a href='http://mentored-research.com/login/signup.php' target='_blank'>Sign Up Here.</a>" . "<br /><br />";
	$message .= "In case you face any issues, please put in a word to us at: guide@mentored-research.com <br /><br />";

	$message .= "Team Mentored-Research<br />";
	$message .= "info@mentored-research.com<br /><br />";
	$message .= "Please do not reply to this automated mail.<br /><br />";
	$res = SendMessage($email, $email, "info@mentored-research.com", "Mentored-Research", $subject, $message);
}

// this is for adding the data to the specified mentor table.
function AddToMenteeTable($organ, $course, $email, $table) {
	$resp = "-1";
	try {
		$query = "insert into " . $table . "(" . $table . "Email, " . $table . "Organ, " . $table . "Course) values('$email', '$organ', '$course')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is for adding the data to the specified mentor table.
function AddToMentorTable($organ, $course, $email, $table) {
	$resp = "-1";
	try {
		$query = "insert into " . $table . "(" . $table . "Email, " . $table . "Organ, " . $table . "Course) values('$email', '$organ', '$course')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is for adding the data to the specified Director table.
function AddToDirectorTable($organ, $email, $table) {
	$resp = "-1";
	try {
		$query = "insert into " . $table . "(" . $table . "Email, " . $table . "Organ) values('$email', '$organ')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for adding the email to the user table. 1 on success. -1 on error.
function AddToUserTable($email, $level) {
	$resp = "-1";
	try {
		$query = "insert into User(UserEmail, UserLevel) values('$email', '$level')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for sending the message through mandrill API.
function SendMessage($to, $toName, $from, $fromName, $subject, $message) {
	try {
		$mandrill = new Mandrill('J99JDcmNNMQLw32QJGDadQ');
		$message = array(
	        'html' => $message,
	        'subject' => $subject,
	        'from_email' => 'info@mentored-research.co',
	        'from_name' => 'Mentored-Research',
	        'to' => array(
	            array(
	                'email' => $to,
	                'name' => $toName,
	                'type' => 'to'
	            )
	        )
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
		return $result;
	} 
	catch(Mandrill_Error $e) {
		$res = "-1";
		return $res;
	}
}

// for getting the mentee details in a json response based on mentee email
// returns -1 on error. array of mentee details on success.
function GetMenteeDetailsByEmail($menteeEmail) {
	$resp = "-1";
	$mentee = array();
	try {
		$query = "select * from Mentee where MenteeEmail='$menteeEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$mentee["MenteeName"] = $res["MenteeName"];
				$mentee["MenteeEmail"] = $res["MenteeEmail"];
				$mentee["MenteeContact"] = $res["MenteeContact"];
				$mentee["MenteeProfile"] = $res["MenteeProfile"];
				$mentee["MenteeCourse"] = $res["MenteeCourse"];
				$mentee["MenteeOrgan"] = $res["MenteeOrgan"];
				$mentee["MenteeMentor"] = $res["MenteeMentor"];
			}
		}
		$resp = $mentee;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentor details in a json response based on mentor ID
// returns -1 on error. array of mentor details on success.
function GetDirectorDetailsByEmail($directorEmail) {
	$resp = "-1";
	$director = array();
	try {
		$query = "select * from Director where DirectorEmail='$directorEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$director["DirectorName"] = $res["DirectorName"];
				$director["DirectorEmail"] = $res["DirectorEmail"];
				$director["DirectorContact"] = $res["DirectorContact"];
				$director["DirectorProfile"] = $res["DirectorProfile"];
				$director["DirectorOrgan"] = $res["DirectorOrgan"];
			}
		}
		$resp = $director;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentor details in a json response based on mentor ID
// returns -1 on error. array of mentor details on success.
function GetMentorDetailsByEmail($mentorEmail) {
	$resp = "-1";
	$mentor = array();
	try {
		$query = "select * from Mentor where MentorEmail='$mentorEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$mentor["MentorName"] = $res["MentorName"];
				$mentor["MentorEmail"] = $res["MentorEmail"];
				$mentor["MentorContact"] = $res["MentorContact"];
				$mentor["MentorProfile"] = $res["MentorProfile"];
				$mentor["MentorCourse"] = $res["MentorCourse"];
				$mentor["MentorOrgan"] = $res["MentorOrgan"];
				$mentor["MentorDirector"] = $res["MentorDirector"];
			}
		}
		$resp = $mentor;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentor details in a json response based on mentor ID
// returns -1 on error. array of mentor details on success.
function GetDirectorDetails($directorId) {
	$resp = "-1";
	$director = array();
	try {
		$query = "select * from Director where DirectorID='$directorId'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$director["DirectorName"] = $res["DirectorName"];
				$director["DirectorEmail"] = $res["DirectorEmail"];
				$director["DirectorContact"] = $res["DirectorContact"];
				$director["DirectorProfile"] = $res["DirectorProfile"];
				$director["DirectorOrgan"] = $res["DirectorOrgan"];
			}
		}
		$resp = $director;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentor details in a json response based on mentor ID
// returns -1 on error. array of mentor details on success.
function GetMentorDetails($mentorID) {
	$resp = "-1";
	$mentor = array();
	try {
		$query = "select * from Mentor where MentorID='$mentorID'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$mentor["MentorName"] = $res["MentorName"];
				$mentor["MentorEmail"] = $res["MentorEmail"];
				$mentor["MentorContact"] = $res["MentorContact"];
				$mentor["MentorProfile"] = $res["MentorProfile"];
				$mentor["MentorCourse"] = $res["MentorCourse"];
				$mentor["MentorOrgan"] = $res["MentorOrgan"];
				$mentor["MentorDirector"] = $res["MentorDirector"];
			}
		}
		$resp = $mentor;
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the directorId of the mentor passed.
// returns 0 if director not assigned. -1 on error. directorId on success.
function GetDirectorIdOfMentor($email, $id) {
	$resp = "-1";
	try {
		$query = "select * from Mentor where MentorEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$resp = $res["MentorDirector"];
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// for getting the mentorID of the mentee passed.
// returns 0 if mentor not assigned. -1 on error. mentorID on success.
function GetMentorIDOfMentee($email, $id) {
	$resp = "-1";
	try {
		$query = "select * from Mentee where MenteeEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$resp = $res["MenteeMentor"];
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function for registering the guide url to the database table.
function RegisterGuideUrl($courseID, $guideName, $url) {
	$resp = "-1";
	try {
		$query = "insert into Guide(GuideName, Guide, GuideCourse) values('$guideName', '$url', '$courseID')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to register the Assignment Off Topic upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentExtra($assID, $courseID, $extraLink) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentExtra(AssID, AssExtra) values('$assID', '$extraLink')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to register the Assignment Off Topic upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentOffTopic($assID, $courseID, $offTopicLink) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentOffTopic(AssID, AssOffTopic) values('$assID', '$offTopicLink')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to register the Assignment Sample Report upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentSampleReport($assID, $courseID, $sampleReportLink) {
	$resp = "-1";
	try {
		$query = "insert into AssignmentSampleReport(AssID, AssSampleReport) values('$assID', '$sampleReportLink')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to register the Assignment PDF upload to the database in the Assignment table.
// returns -1 on error. 1 on success.
function RegisterAssignmentPDF($assID, $courseID, $assLink) {
	$resp = "-1";
	try {
		$query = "update Assignment set AssPdf='$assLink' where AssID='$assID' and AssCourse='$courseID'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to get the mentor course from the mentee Table.
// returns -1 on error. returning 0 means course is not assigned to mentor.
function GetMentorCourse($mentorEmail) {
	$resp = "-1";
	$courseID = "-1";
	try {
		$query = "select * from Mentor where MentorEmail='$mentorEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$courseID = $res["MentorCourse"];
			}
		}
		return $courseID;
	}	
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function to get the mentee course from the mentee Table.
// returns -1 on error. returning 0 means course is not assigned to mentee.
function GetMenteeCourse($menteeEmail) {
	$resp = "-1";
	$courseID = "-1";
	try {
		$query = "select * from Mentee where MenteeEmail='$menteeEmail'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			while ($res = mysql_fetch_array($rs)) {
				$courseID = $res["MenteeCourse"];
			}
		}
		return $courseID;
	}	
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// this is the function for registering the calender url to the database table.
function RegisterCalenderUrl($courseID, $url) {
	$resp = "-1";
	try {
		$query = "insert into Calender(CourseID, Calender) values('$courseID', '$url')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

/**
 * Encrypting password
 * @param password
 * returns salt and encrypted password
 */
function hashSSHA($password) {
    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}

/**
 * Decrypting password
 * @param salt, password
 * returns hash string
 */
function checkhashSSHA($salt, $password) {
    $hash = base64_encode(sha1($password . $salt, true) . $salt);
    return $hash;
}

// this is the helper function to save the details to the log file.
function WriteToLog($txt) {
	$logFile = fopen("log/log.txt", "a");
	if(!$logFile) {
		die("Cannot write to log.");
	}
	else {
		$date = date("Y-m-d H:i:s");
		fwrite($logFile, $date . " --> " . $txt . "\n");
	}
	fclose($logFile);
}

?>