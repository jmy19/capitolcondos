<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/jquery.onvisible.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
        <title>IN8 Developments</title>
	
   
    </head>
  
	   

	    
          
        
	   
	  
	   
   <?php
   
   		require_once "recaptchalib.php";
		$first_name;$last_name;$email;$textarea;
		// your secret key
		$secret = "6LcM6AYTAAAAAB4RcEpFGeGelOpRHyOKPqUw_Urt";
 

 
		// check secret key
		$reCaptcha = new ReCaptcha($secret);

		// if submitted check response
		if ($_POST["g-recaptcha-response"]) {
			$response = $reCaptcha->verifyResponse(
				$_SERVER["REMOTE_ADDR"],
				$_POST["g-recaptcha-response"]
			);
		}
		 if ($response != null && $response->success) {
			echo "Hi " . $_POST["firstname"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
			 header('Location: http://in8developments.ca');
		  } 
  		
		$first_name;$last_name;$email;$textarea;$captcha;
        if(isset($_POST['firstname'])){
          $first_name=$_POST['firstname'];
        }if(isset($_POST['lastname'])){
          $last_name=$_POST['lastname'];
		if(isset($_POST['email'])){
          $email=$_POST['email'];
        }if(isset($_POST['textarea'])){
          $textarea=$_POST['textarea'];
        }
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
          if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          
        }else
        {
          echo '<h2>Thanks for posting comment.</h2>';
        }
    
  
  
   $to = "sales@sagecondos.ca";
   $subject = "IN8 New Entry from " . $first_name . " " . $last_name;
   $txt = $first_name . " " . $last_name . " " . $email . "\r\n" . $textarea;
   $headers = "From: nathan@in8developments.ca";

   mail($to,$subject,$txt,$headers);
   
  
   ?>
  
  
          
    </body>
</html>
