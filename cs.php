<?php 	

$con = mysqli_connect("localhost","root","","hurst") or die("error");

if(isset($_REQUEST['banner'])){
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$desc = $_POST['desc'];
	$fileok = $_FILES['filead'];

	// echo $name;
	// echo $furniture;
	// echo $price;
	// echo $choose;
	// print_r($fileok);
	

		    $img_name = $_FILES['filead']['name'];
			$img_typ = $_FILES['filead']['type'];
			$img_temp = $_FILES['filead']['tmp_name'];


			$location = "carousel_folder/";
			$file = $location.$img_name;

			$target = "carousel_folder/";
			$finalImage = $target.$img_name;

			move_uploaded_file($img_temp, $finalImage);

			// echo $name . " " . $furniture . " ". $price . " ". $choose. " ".$finalImage;

			$query = mysqli_query($con, "INSERT INTO `add_banner`(`name`, `brand_name`, `description`, `image`) VALUES ('$name','$brand','$desc','$finalImage')");

			if($query){
				echo "<script>alert('successfully going');window.location.href='index.php'</script>";
			}
			else{
				echo "<script>alert('something went wrong');window.location.href='carousel_form.php'</script>";
			}

     }
    






 ?>