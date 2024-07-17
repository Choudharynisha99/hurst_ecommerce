<?php 

$con = mysqli_connect("localhost","root","","hurst") or die("Error");

if(isset($_REQUEST['reg'])){
	$name = $_POST['name'];
	$email =$_POST['email'];
	$passw = $_POST['passw'];
	$passs = $_POST['passs'];

	// echo $name;
	// echo $email;
	// echo $passw;
	// echo $passs;
        $query = mysqli_query($con,"INSERT INTO `register`(`name`, `email`, `password`, `pass`) VALUES ('$name','$email','$passw','$passs')");

	if($passw === $passs && $query){

         echo "<script>alert('Successfully Registered');window.location.href='login.php';</script>";		
 		}
 		else{
 			echo "<script>alert('Failed')</script>";
 		}
	

	
}




 ?>