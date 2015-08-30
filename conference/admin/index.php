<?php
	session_start();
	session_destroy();
	error_reporting(0);
	$loginCorrect = $_GET['loginInfo'];
?>
<html>
<head>
  </head>
        <body>
            <form action="attd.php" method="POST"/>
            <table align="center" vspace="150" style="display: table; border: 1px solid black;}">
            <tr><td width="50"></td><td width="50">Log In</td></tr>
            <tr><td width="90">Student Id</td><td>:</td><td><input type="text" name="std_id" size="40"></td></tr>
            <tr><td width="70">PassWord</td><td>:</td><td><input type="password" name="password" size="40"></td></tr>
			<tr><td><?php if($loginCorrect == 'false') echo "Try again"; ?></td></tr>
            <tr><td></td><td width="20"></td><td><input type="submit" value="Sign in"></td><td></td>
            <td></td><td width="90"><a href="../index.php">Home</a></td></tr>
            </form>
            </table>
            
        </body>
</html>