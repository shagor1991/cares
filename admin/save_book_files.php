<?php 
session_start();

include('../connect.php');
date_default_timezone_set("Asia/Dhaka");
$dateTime=date("Y-m-d h-i-s");

// if($_SESSION['isLogin'] !=1){
//     header("location:index.php");
// }

// print_r($_FILES);
// exit();

$title= $_POST['title'];
$author= $_POST['author'];
$book= $_POST['book'];
$status= $_POST['status'];

if($_FILES['filename']['name']!=""){
$fileName=$_FILES['filename']['name'];
$fileSize=$_FILES['filename']['size'];
$filetype=$_FILES['filename']['type'];
$fileTemp=$_FILES['filename']['tmp_name'];

	if($filetype=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $filetype=="application/msword" || $filetype=="application/pdf")
		{
			if($fileSize<1048576000)
			{
				$imagepath="../uploads/".$fileName;
				
				if(file_exists($imagepath)){
				   $a=gmdate("Yzhis");
				   $fileName=$a.$fileName;
				   $imagepath="../uploads/".$fileName;
				   $moved= move_uploaded_file($fileTemp,$imagepath);
				   // return $fileName;
				   if($moved){
				   	$insert="INSERT INTO `books_file` (title,author,book,filename,date_time,status) VALUES('$title','$author','$book','$fileName','$dateTime','$status')";
					$insertion= mysqli_query($conn,$insert) OR die(mysqli_error($conn));
					// echo "Uploaded Successfully <br>";
					// echo "<a href='gallery.php?pfbid=".$fbid."'> Visit Gallery<a>";
					$_SESSION['msg']='Uploaded Successfully';
				   }else{
				   	// echo "Not Uploaded, try again";
				   	$_SESSION['msg']='Not Uploaded, try again';
				   }
				    
				}else{
					$moved= move_uploaded_file($fileTemp,$imagepath);
					if($moved){
				   	$insert="INSERT INTO `books_file` (title,author,book,filename,date_time,status) VALUES('$title','$author','$book','$fileName','$dateTime','$status')";
					$insertion= mysqli_query($conn,$insert) OR die(mysqli_error($conn));
					// echo "Uploaded Successfully <br>";
					// echo "<a href='gallery.php?pfbid=".$fbid."'> Visit Gallery<a>";
					$_SESSION['msg']='Uploaded Successfully';
				    }else{
				   	// echo "Not Uploaded, try again";
				   	$_SESSION['msg']='Not Uploaded, try again';
				    }
					// return $fileName;
				}
			}else{
				// echo "Your image is too large";
				$_SESSION['msg']='Your file file is too large';
			}
			
		}else{
			// echo "Image format is incorrect.";
			$_SESSION['msg']='File format is incorrect.';

		}
}else{
	// echo "Please choose an image.";
	$_SESSION['msg']='Please choose an file.';
}



if($insertion){
	$_SESSION['msg']="Submitted Successfully!";
}

header("location:add_files_book.php");
// exit();
// mysqli_close($conn);

?>