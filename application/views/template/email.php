<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"> <!-- utf-8 works for most cases -->
	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
	<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

	<!-- Web Font / @font-face : BEGIN -->
	<!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->
	
	<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
	<!--[if mso]>
		<style>
			* {
				font-family: sans-serif !important;
			}
		</style>
	<![endif]-->
	
	<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
	<!--[if !mso]><!-->
		<!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
	<!--<![endif]-->

	<!-- Web Font / @font-face : END -->
	
	<!-- CSS Reset -->
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" rel="stylesheet">
    <style>

		/* What it does: Remove spaces around the email design added by some email clients. */
		/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
	        margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: "Helvetica Neue", Helvetica, 'Arimo', sans-serif;
        }
        
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
                
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
      
    </style>
    
    <!-- Progressive Enhancements -->
    <style>
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

        .social{
            font-size: 1.35em
        }
        a{text-decoration: none;color:#fff;font-weight: bold;}
        .bawah a{color:#00377B;}

    </style>

</head>
<body bgcolor="#212b35" width="100%" style="margin: 0;">
    <center style="width: 100%; background: #212b35;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
            <?php echo $subject ?>
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Email Header : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;box-shadow: 0px 0px 2px #000;" class="email-container">
			<tr>
				<td style="padding: 0px 0 0 0px; background: #fff; height:80px;position:relative;">
                    <a style="display: block" href="http://www.lp3i.ac.id">
					   <img src="https://student.lp3i.ac.id/assets/images/header.png" width="100%"/> 
                    </a>
				</td>
			</tr>
        </table>
        <!-- Email Header : END -->
        
        <!-- Email Body : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;box-shadow: 0px 0px 4px #000" class="email-container">
            <tr>
                <td bgcolor="#ffffff" style="padding: 20px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                    <span style="float: right;font-size: small">Subject: <?php echo $announcement ?></span>
                    <h3 style="font-weight: normal !important;">To, <?php echo $appellation ?><br/><b><?php echo $name ?></b></h3>
                    <br>
                    <?php echo $message ?>
                    <br>
                    Utilization of an information system will be very useful in supporting performance, Thank You.
                    <br/><br/><br/><br/>
                    Best Regards,<br/>-<br/>
                    <?php echo $email_signature ?>
                </td>
            </tr>
            <tr>
                <td height="40" style="font-size: 0; line-height: 0; padding:10px 20px; background:#eee;">
                    <img src="https://student.lp3i.ac.id/assets/images/footer_label.png" width="100%"/>
                </td>
            </tr>
            <tr>
                <td bgcolor="#00377B">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="padding: 20px; font-family: sans-serif; font-size: 0.75em; mso-height-rule: exactly; line-height: 20px; color: #fff;position:relative;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td>
                                    SMS Center : <b><a href="sms:081514756666">0815 1475 6666</a></b><br/>
                                    Email : <b><a href="mailto:support@lp3i.ac.id">support@lp3i.ac.id</a></b><br/>
                                    Official Website : <b><a href="http://www.lp3i.ac.id" target="_blank">www.lp3i.ac.id</a></b><br/>
                                    Online Registration : <b><a href="http://pmb.lp3i.ac.id" target="_blank">pmb.lp3i.ac.id</a></b><br/>
                                    </td>
                                    <td align="right" width="15%">
                                        <img src="https://student.lp3i.ac.id/assets/images/barcode.png" style="width:100%;" />
                                    </td>
                                </table>
                            </td>
                            </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#fff">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="text-align:left;padding: 2%; font-family: sans-serif; font-size: 0.75em; mso-height-rule: exactly; line-height: 20px; color: #00377B;position:relative;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                    <td>
                                    <table class="bawah" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td style="white-space:nowrap;width:6%"><a href="http://www.instagram.com/lp3i_pusat/" target="_blank"><i class="social fi-social-instagram"></i> LP3I Tepat & Cepat Kerja</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://fb.com/LP3Ipusat" target="_blank"><i class="social fi-social-facebook"></i> LP3I Tepat & Cepat Kerja</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://www.twitter.com/LP3I_PUSAT" target="_blank"><i class="social fi-social-twitter"></i> @LP3I_PUSAT</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.youtube.com/c/sahabatLP3I" target="_blank"><i class="social fi-social-youtube"></i> sahabatLP3I</a></td>
                                        </tr>
                                    </table>
                                    </td>
                                    <td>
                                    <table class="bawah" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="text-align: right">
                                        <tr>
                                            <td style="white-space:nowrap;width:6%"><a href="whatsapp:081514756666"><img width="12px" src="http://www.iconsdb.com/icons/preview/royal-azure-blue/whatsapp-xxl.png"/> 0815 1475 6666</a></td>
                                        </tr>
                                        <tr>
                                            <td style="white-space:nowrap;width:6%"><a href="line:081514756666"><img width="13px" src="http://www.thaibeautypluspattaya.com/image/line_icon.png"/> 0815 1475 6666</td>
                                        </tr>
                                        <tr>
                                            <td style="white-space:nowrap;width:6%"><img width="14px" src="https://developer.blackberry.com/native/files/documentation/images/bbm_target_icon.png"/> <b>D115788C</b></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                    </tr>
                                </table>
                                </td>
                                 
<!--                                 <i class="social fi-social-facebook"></i> LP3I Tepat & Cepat Kerja
                                <i class="social fi-social-twitter"></i> @LP3I_PUSAT
                                <i class="social fi-social-youtube"></i> <a href="https://www.youtube.com/c/sahabatLP3I" target="_blank">sahabatLP3I</a>
                                <i class="social fi-social-whatsapp"></i> -->
                            </td>
                            </tr>
        </table>
        <!-- Email Body : END -->
          
        <!-- Email Footer : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                    <webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;">View as a Web Page</webversion> | &copy; ICT LP3I 2016 | 
                    <unsubscribe style="color:#888888; text-decoration:underline;">Unsubscribe</unsubscribe>
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

    </center>
</body>
</html>

