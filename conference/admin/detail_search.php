<?php
	 session_start();
	 error_reporting(0);
	include("../common.php");

	$role=$_SESSION['role'];
	if ($role != 1){
	header('Location: index.php');	
				}
	$_SESSION['std_id'];

	$user_id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail User</title>
<link rel="stylesheet" href="style/description.css" />
</head>
<body>
<div id="main_page">
	<div id="menu">
    	<a href="search.php"><button>Home</button> </a>
        <a href="index.php"><button>logout</button> </a>
    </div>
    
    <div id="container">
    	<table cellpadding="2" cellspacing="2" width="100%">
        	<?php
				$i=1;
				$select_name="SELECT *FROM `registration` WHERE id=$user_id";
				$results=mysql_query($select_name);
				$row=mysql_fetch_array($results);?>
			<tr><td align="center" colspan="2"><img src="../upload/<?php echo $row['photo'];?>" width="180" height="220" /></td></tr>
            <tr bgcolor="#999966"> <td> Name </td> <td align="left"><?php echo $row['name'];?> </td></tr>
            <tr> <td> Institution </td><td> <?php echo $row['institution'];?> </td></tr>
            <tr bgcolor="#999966"> <td> Address </td><td><?php echo $row['address'];?></td></tr>
            <tr> <td> Email </td><td> <?php echo $row['email'];?> </td></tr>
            <tr bgcolor="#999966"> <td> Phone </td><td> <?php echo $row['contact'];?> </td></tr>
            <tr> <td> Attend Conferance </td><td> <?php echo $attend_yes=$row['attend_conf']; if($attend_yes==''){echo "No";}?>  </td></tr>
            <tr bgcolor="#999966"> <td>Presenting a paper</td><td> <?php echo $yes=$row['paper']; if($yes==''){echo "No";}?> </td></tr> 
            <tr> <td>Presenting a poster</td><td> <?php echo $yes=$row['poster']; if($yes==''){echo "No";}?> </td></tr>  
            <tr bgcolor="#999966"> <td>Passport or Id.</td><td> <?php echo $row['passport'];?> </td></tr> 
            <tr> <td>Payment Mode</td><td> <?php echo $row['pay_mode'];?> </td></tr> 
        </table>
    </div>
</div>


</body>
</html>