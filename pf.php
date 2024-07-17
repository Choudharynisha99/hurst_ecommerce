<?php 	

$con = mysqli_connect("localhost","root","","hurst") or die("error");

if(isset($_REQUEST['addone'])){
	$name = $_POST['name'];
	$furniture = $_POST['furniture'];
	$price = $_POST['price'];
	$choose = $_POST['choose_ok'];
	$fileok = $_FILES['filek'];

	// echo $name;
	// echo $furniture;
	// echo $price;
	// echo $choose;
	// print_r($fileok);
	

		    $img_name = $_FILES['filek']['name'];
			$img_typ = $_FILES['filek']['type'];
			$img_temp = $_FILES['filek']['tmp_name'];


			$location = "new_folder/";
			$file = $location.$img_name;

			$target = "new_folder/";
			$finalImage = $target.$img_name;

			move_uploaded_file($img_temp, $finalImage);

			// echo $name . " " . $furniture . " ". $price . " ". $choose. " ".$finalImage;

			$query = mysqli_query($con, "INSERT INTO `add_product`(`product_name`, `furniture`, `price`, `new_sale`, `image`) VALUES ('$name','$furniture','$price','$choose','$finalImage')");

			if($query){
				echo "<script>alert('successfully going');window.location.href='index.php'</script>";
			}
			else{
				echo "<script>alert('something went wrong');window.location.href='product_form.php'</script>";
			}

     }
    






 ?>