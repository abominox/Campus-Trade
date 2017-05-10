<html lang="en-US">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="text"> You will be redirected in <div id="counter"> 5 </div> seconds</div>
<script>
	setInterval(function() {
		var div = document.querySelector("#counter");
		var count = div.textContent * 1 - 1;
		div.textContent = count;
		if (count <= 0) {
			location.href="../index.php";
		}
	}, 1000);
</script>


<?php

$servername = "localhost";
$username = "test";
$password = "test";
$db = "campuslist";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$target_dir = "images/furniture/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOK = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$new_name = uniqid() . '.'.$imageFileType;



// Check if real image
	$check = getimagesize($_FILES["file"]["tmp_name"]);
	if($check !== false) {
		$uploadOK = 1;
	} else {
		echo "File is not an image.";
		$uploadOK = 0;
	}
// Check if file exists
	if (file_exists($target_file)) {
		echo "<br>";
		echo "Sorry, file already exists.";
		$uploadOK = 0;
	}

// Check file size
	if ($_FILES["file"]["size"] > 500000) {
		echo "Sorry, file is too large.";
		$uploadOK = 0;
	}

// Limit file types
	if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		echo "Sorry, only JPG, PNG, and JPEG files are accepted.";
		$uploadOK = 0;
	}

// upload image
	if ($uploadOK == 0) {
		echo "<br>";
		echo "Sorry, please include an image or follow errors above.";
		echo "<br>";
	} else {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $new_name)) {

			$sql = "INSERT INTO furniture (listingTitle, furniture, price, email, phone, contact, image)
							VALUES ('$_POST[post_listing]', '$_POST[post_type]', '$_POST[post_price]',
							'$_POST[post_email]', '$_POST[post_phone]', '$_POST[post_name]', '$new_name')";

			if ($conn->query($sql) == TRUE) {
				echo "<br>";
				echo "New listing created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} else {
			echo "Sorry, there was an error uploading your file";
		}
	}

$conn->close();
?>

</body>
</html>
