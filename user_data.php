<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];


	echo "NAME: " . $name . "<br>";
	echo "EMAIL: " . $email . "<br>";
	echo "DATE OF BIRTH: " . $dob . "<br>";
	echo "GENDER: " . $gender . "<br>";
	echo "COUNTRY: " . $country . "<br>";

	//read the content of a file and display
    $filename = "userdata.csv";
    $file = fopen($filename, "w");//open file in write mode

	fputcsv($file, array('user_data.php'));

    $content = fwrite($file, filesize("user_data.php"));//read file
    echo $content;
    fclose($file);//close file

?>