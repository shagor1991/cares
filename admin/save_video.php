<?php 
include('../connect.php');
session_start();

// if($_SESSION['isLogin'] !=1){
//     header("location:index.php");
// }



// $insert="INSERT INTO `rj_info` (short_name,full_name,about_me,shows,favourites,hate_things,philosophy) VALUES('$short_name','$full_name','$about_me','$show','$favourites','$hate_things','$philosophy')";
// $insertion= mysqli_query($conn,$insert) OR die(mysqli_error($conn));

// print_r($_FILES);
// exit();
$title= $_POST['title'];
$status= $_POST['status'];
######
if($_FILES['filename']['name']!=""){
$fileName=$_FILES['filename']['name'];
$fileSize=$_FILES['filename']['size'];
$filetype=$_FILES['filename']['type'];
$fileTemp=$_FILES['filename']['tmp_name'];

	if($filetype=="video/avi" || $filetype=="video/mp4" || $filetype=="video/x-ms-wmv" || $filetype=="video/quicktime" )
		{
			if($fileSize<1048576000)
			{
				$imagepath="../video/".$fileName;
				
				if(file_exists($imagepath)){
				   $a=gmdate("Yzhis");
				   $fileName=$a.$fileName;
				   $imagepath="../video/".$fileName;
				   $moved= move_uploaded_file($fileTemp,$imagepath);
				   // return $fileName;
				   if($moved){
				   	$insert="INSERT INTO `videos` (title,video,type,status) VALUES('$title','$fileName','$filetype','$status')";
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
				   	$insert="INSERT INTO `videos` (title,video,type,status) VALUES('$title','$fileName','$filetype','$status')";
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
				$_SESSION['msg']='Your Video file is too large';
			}
			
		}else{
			// echo "Image format is incorrect.";
			$_SESSION['msg']='Video format is incorrect.';

		}
}else{
	// echo "Please choose an image.";
	$_SESSION['msg']='Please choose an video.';
}
######



if($insertion){
	$_SESSION['msg']="Submitted Successfully!";
}

header("location:add_video.php");
// exit();
mysqli_close($conn);

?>