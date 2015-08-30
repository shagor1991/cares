<?php
	 session_start();
	 error_reporting(0);
	include("../common.php");

	$role=$_SESSION['role'];
	if ($role != 1){
	header('Location: index.php');	
				}
	$_SESSION['std_id'];
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cares Admin Panel</title>
<link rel="stylesheet" href="style/main.css" />
</head>

<body>
<div id="main_page">
	<div id="menu">
    	<a href="search.php"><button>Home</button> </a>
        <a href="index.php"><button>logout</button> </a>
    </div>
    
    <div id="container">
    	<table cellpadding="5" cellspacing="5" width="100%">
        	<tr bgcolor="#999966">
            	<th width="5%"> Sl </td>
            	<th width="95%"> Name </td> 
            </tr>
       <?php
	   $i=1;
	   $select_name="SELECT *FROM `registration` ORDER BY `id` DESC";
	   $results=mysql_query($select_name);
	   while($row=mysql_fetch_array($results)){
	   ?>     
        	<tr align="center" <?php if($i%2==0){?>bgcolor="#999966" <?php }?>>
            	<td width="5%"><?php echo $i++;?></td>
                <td width="60%"><div id="link"><?php echo "<a href='detail_search.php?id=$row[id]'>".$row['name']."</a>"; ?></div></td> 
            </tr>
            <?php  }?>
        </table>
    </div>
</div>
</body>
</html>
