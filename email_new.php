<?php

 
 $first_name;$last_name;$email;$phone_num;$comment;$hear;$key;
if(isset($_POST['firstname']))
 {
   $first_name=$_POST['firstname'];
 }
if(isset($_POST['lastname']))
{
   
  $last_name=$_POST['lastname'];
}
if(isset($_POST['email']))
{
   $email=$_POST['email'];
}
if(isset($_POST['textarea']))
{
   $comment=$_POST['textarea'];
}
if(isset($_POST['phone_num']))
{
    $phone_num=$_POST['phone_num'];
}
if(isset($_POST['hear']))
{
     $hear=$_POST['hear'];
}
 if(isset($_POST['key']))
{
     $key=$_POST['key'];
}
     $to = "sales@thecapitolcondos.com";
     $subject = "Capitol Condos Entry from " . $first_name . " " . $last_name;
     $txt = $first_name . " " . $last_name . " " . $email . " " . $phone_num . " " . $hear .  "\r\n" . $comment . "\r\n" . $key;
     $headers = "From: " . $email;
     mail($to,$subject,$txt,$headers);
     header("Location: http://thecapitolcondos.com/thankyou");
     exit();
?>




    

 
								 
								

	 
   
	   
    
   
 
   
   	
  		
		
      
    
  
  

  
  
          
  
