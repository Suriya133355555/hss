<?php include("header.php");?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<style type="text/css">
    .toast-message p { color: #fff; line-height: 16px; font-size: 14px; }
</style>
<?php 

 define('GOOGLE_SECRET_CLIENT', '6LfOrIsUAAAAAHDga47n8rbCWLgq5ylusXqx6XV8'); //6LfOrIsUAAAAAHDga47n8rbCWLgq5ylusXqx6XV8
define('GOOGLE_SECRET_SERVER', '6LfOrIsUAAAAAMIKygJM6QZHUyULWi1UkcdHUoBe'); //6LfOrIsUAAAAAMIKygJM6QZHUyULWi1UkcdHUoBe
$validation_error = 0;
$mail_sent = 0;
if ( isset( $_POST['register_submit'] ) ) {
    $msg                = '';
    $name               = $_POST[ 'Name' ];
    $email              = $_POST[ 'Email' ];
    $mobile             = $_POST[ 'Phone' ];
    $comments           = $_POST[ 'Message' ]; 

    $msg                 .= '
                <table style="width: 60%;border: 1px solid #ccc;" border="0" cellpadding="0" cellspacing="0" class="body" align="center">
                    <tr>
                        <th colspan="2" style="text-align:center; background-color:#fff;font-size:22px; color:#fff;font-weight:bold; padding:10px;text-align:center">
                            <div>
                                <a><img style="width:350px;" src="http://www.omsakthiindia.com/images/logo.png"></a>
                            </div>
                        </th>
                        
                    </tr>
                    <tr >
                        <td colspan="2" style="border-bottom: 1px solid #ccc; padding: 8px;">
                            <div style="text-align: center;margin: 0px;">
                                Enquiry From Om Sakkthi Metal Craft
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="font-size:12px";font-weight:normal; padding:15px;border-bottom: 1px solid #ccc;">
                            <div>
                                <p style="padding:10px;">Hello,</p>
                            </div>
                            <div>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="border: 1px solid #dddddd;padding: 8px;">Name : '.$name.'</td>
                                        <td style="border: 1px solid #dddddd;padding: 8px;">Email : '.$email.' </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #dddddd;padding: 8px;">Contact Number : '.$mobile.'</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border: 1px solid #dddddd;padding: 8px;">Message : '. $comments.'  </td>
                                        
                                    </tr>
                                </table>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="border: 1px solid #dddddd;padding: 8px;"">
                            
                            <div style="background: #fe8864;width: 30%;margin: 5px;padding: 2px;color: #fff;font-size: 12px;">
                                <p>REGARDS</p>
                                <p>Om Sakkthi Metal Craft</p>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2" style="background-color:#00af87;"></td>
                    </tr>
                </table>';

    $to      	= 'suriya97524@gmail.com';//info@omsakthiindia.com
    //$to      	= 'sivabala.dev@gmail.com';
    $subject 	= 'Enquiry From Om Sakkthi Metal Craft';
    $message 	= $msg;
    $headers 	= 'From: Om Sakkthi Metal Craft <info@omsakthiindia.com>' . "\r\n";
    //$headers    = "From: Om Sakkthi Metal Craft <info@omsakthiindia.com>\r\n";
    $headers   .= "MIME-Version: 1.0\r\n";
    $headers   .= "Content-type: text/html; charset: utf8\r\n";
    $headers   .= 'Cc: sakkthi12@gmail.com' . "\r\n";
    $headers   .= 'Bcc: horizonmanick@gmail.com' . "\r\n";

    /*$headers   .= 'Cc: cvaa_bala@yahoo.com' . "\r\n";
    $headers   .= 'Bcc: balasiva95@gmail.com' . "\r\n";*/

    
    if( mail( $to, $subject, $message, $headers ) ) {
        $mail_sent = 1;
    } else {
        $mail_sent = 0;
    }
}
//echo $mail_sent;
?>
<header class="banner-heading">
	<h2>Contact Us</h2>
</header>
<section class="section clear">
    <section class="section-content contact clear">
        <fieldset class="left">
			<h2>Get In Touch</h2>
			<p>Please fill in all data fields to ensure we can process your inquiry as quickly as possible (* required fields).</p>
			<form id="form3" name="form1" action="#" method="post">
				<label><input name="Name" id="name" type="text" placeholder="Name" required></label>
				<label><input name="Email" id="email" type="email" placeholder="Email" required></label>
				<label><input name="Phone" id="mobile" type="number" placeholder="Contact Number" required></label>
				<textarea name="Message" id="comments" rows="4" placeholder="Message" required></textarea>
				<!-- <div id="captcha">
	                <div class="g-recaptcha" data-sitekey="<?= GOOGLE_SECRET_CLIENT; ?>"></div>
	            </div> -->
				<input onClick="return submit_get_in_touch();" name="register_submit" type="submit" value="Submit" id="contact-button"/>
				<input name="reset" type="reset" value="reset" id="reset"/>
			</form>
		</fieldset>
		<aside class="left">
        	<p><strong>For More Details, Please Contact</strong></p>
			<h2>OM SAKKTHI METAL CRAFT</h2>	
			<p><i class="fa fa-location-arrow"></i>#49, Perambur High Road, Jamalia, Perambur, Chennai - 600 012. Tamilnadu, India.</p>
			<p><i class="fa fa-mobile"></i><strong>Mobile No</strong><br>+91 - 95001 22900</p>
			<p><i class="fa fa-phone"></i><strong>Phone No</strong><br>+91-44-4332 6310</p>
			<p><i class="fa fa-envelope"></i>sakkthi12@gmail.com</p>
		</aside>
		<aside class="right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.3917942489547!2d80.20545711482379!3d13.137668690747095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265fdfba01291%3A0x6938c8b2211a8c1b!2sOm%20Sakthi%20Metal%20Craft!5e0!3m2!1sen!2sin!4v1611037499562!5m2!1sen!2sin"  width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</aside>
    </section>
</section>
<?php include("footer.php");?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>

<script type="text/javascript">
    $( '#order_shoe' ).hide();
    function order_change( order ) {
        if( order == 'School Shoes' ) {
            $( '#order_shoe' ).show();
        } else {
            $( '#order_shoe' ).hide();
        }
        return false;
    }

    function submit_get_in_touch() {
        var error_msg       = '';
        var error           = 0;
        
        var name            = $( '#name' ).val();
        var email           = $( '#email' ).val();
        var mobile          = $( '#mobile' ).val();
        var comments        = $( '#comments' ).val();

        if( name == '' ) {
            error_msg      += '<p>Name field is required</p>';
            error           = 1;
        }

        if( email == '' ) {
            error_msg      += '<p>Email field is required</p>';
            error           = 1;
        }

        if( mobile == '' ) {
            error_msg      += '<p>Contact field is required</p>';
            error           = 1;
        }

        if( comments == '' ) {
            error_msg      += '<p>Comments field is required</p>';
            error           = 1;
        }

        // var googleResponse  = $('#g-recaptcha-response').val();
        // if( googleResponse == '' ) {
        //     error_msg      += '<p>Select the captcha code</p>';
        //     error           = 1;
        // }

        if( error == 1 ) {
            toastr.error( error_msg, 'Get in touch' );
        }

        if( error == 0 ) { return true; }

        return false;
    }


     
</script>

<?php if( $mail_sent == 1 ) { $mail_sent = 0; ?> 
<script type="text/javascript">
    toastr.success( 'Email sent successfully', 'Get in touch' );
</script>
<?php
} ?>