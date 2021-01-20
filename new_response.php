<?php
	if(isset($_POST['submit'])){
        $fname=$_POST['first name'];
        $lname=$_POST['last name']
		$email=$_POST['email id'];
		$country=$_POST['country'];
        $subject=$_POST['subject'];

		$to='arghorkm35@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$fname .$lname"\n"."Country :".$country."\n"."Wrote the following :"."\n\n".$subject;
        $headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$fname.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>