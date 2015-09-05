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
$hidid= $_POST['hidid'];
$title= $_POST['title'];
$author= $_POST['author'];
$book= $_POST['book'];

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
				   	// $insert="INSERT INTO `books_file` (title,author,book,filename,date_time,status) VALUES('$title','$author','$book','$fileName','$dateTime','$status')";

				   	$update="UPDATE books_file SET title='$title',author='$author',book='$book',filename='$fileName' WHERE id='$hidid'";
					$insertion= mysqli_query($conn,$update) OR die(mysqli_error($conn));
					// echo "Uploaded Successfully <br>";
					// echo "<a href='gallery.php?pfbid=".$fbid."'> Visit Gallery<a>";
					$_SESSION['msg']='Updated Successfully';
				   }else{
				   	// echo "Not Uploaded, try again";
				   	$_SESSION['msg']='Not Uploaded, try again';
				   }
				    
				}else{
					$moved= move_uploaded_file($fileTemp,$imagepath);
					if($moved){
				   	$update="UPDATE books_file SET title='$title',author='$author',book='$book',filename='$fileName' WHERE id='$hidid'";
					$insertion= mysqli_query($conn,$update) OR die(mysqli_error($conn));
					// echo "Uploaded Successfully <br>";
					// echo "<a href='gallery.php?pfbid=".$fbid."'> Visit Gallery<a>";
					$_SESSION['msg']='Updated Successfully';
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
	$update="UPDATE books_file SET title='$title',author='$author',book='$book' WHERE id='$hidid'";
	$insertion= mysqli_query($conn,$update) OR die(mysqli_error($conn));
}



if($insertion){
	$_SESSION['msg']="Submitted Successfully!";
}

header("location: manage_book_files.php");
// exit();
// mysqli_close($conn);

?>