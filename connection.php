<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form>
<table>
<tr>
    <td>   FIRST NAME :</td>
	<td> <input type="text" name="t2" placeholder="Enter Your Name" ></td>
	
</tr>
<tr>
     <td>   ROLL NUMBER: </td>
	 <td><input type="text" name="t1" placeholder="Enter Your Roll Number"></td>
	
</tr>
<tr>
      <td align="center"><button  title="Click here to register" name="sub" value="Register" onClick="alter('Registered Successfully')">Register</button></td>
</form>
<?php

if(isset($_GET["sub"]))
 {echo "hii";
	     $roll=$_GET['t1'];
	        $name=$_GET['t2'];
	
	    $con= mysqli_connect("localhost","root","");
		$db= mysqli_select_db($con,"annu");
		 echo "hii";
		$str="insert into detail values('$roll','$name')";
		$qr= mysqli_query($con,$str);
		 if($qr)
		{
		echo "<br> Record Inserted....";
		}
		else
		{
		echo "<br> Record Not Inserted !!!....";
		}
}
		?>
		</tr>
</table>
</body>
</html>
