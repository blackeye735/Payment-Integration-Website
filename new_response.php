<?php
	if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
		$email=$_POST['email'];
		$country=$_POST['country'];
        $subject=$_POST['subject'];

		$to='arghorkm35@gmail.com'; 
		$msg='Form Submission';
	    $message="First Name :".$fname. "Last Name :".$lname. "\n"."Country :".$country."\n"."Wrote the following: ".$subject;
        $headers="From: ".$email;

		if(mail($to, $msg, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$fname.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>