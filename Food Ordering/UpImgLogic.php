<?php


require_once 'config.php';
	if(isset($_REQUEST['submit'])){
	try{
		$image_file = $_FILES["image"]["name"];
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
		$temp = $_FILES["image"]["tmp_name"];

		$path ="upload/".$image_file;

		if (empty($image_file)) {
			$errorMsg="Please Selcet Image";
			header("Location: index1.php" );
		}
		else if($type=="image/jpg" || $type=="image/png" || $type=="image/jpeg" || $type=="image/gif"){
			if(!file_exists($path)){
				if($size < 5000000){
					move_uploaded_file($temp, "upload/" .$image_file);
					header("Location: index1.php" );
				}
				else{
					
					$errorMsg="your File is larger than 5MB";
					header("Location: index1.php" );
				}
			}
			else{
				
				$errorMsg="File alredy exist...Check upload folder";
				header("Location: index1.php" );
			}
		}
		else{
			
			$errorMsg="Upload jpg, jpeg, png & gif file format...Check file extension";
			header("Location: index1.php" );
		}
		if(!isset($errorMsg)){
			$sql = 'INSERT INTO images (image) VALUES(:fimage)';

			$prep = $con->prepare($sql);

			$prep->bindParam(':fimage', $image_file);

			$prep->execute();
			echo '<script>alert("Uploaded successfully")</script>';
			header("Location: index1.php" );
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}
?>