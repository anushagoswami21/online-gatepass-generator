<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript">
    function myTime()
	{
	      dt=new Date();
		  
		  h=dt.getHours();
		  m=dt.getMinutes();
		  s=dt.getSeconds();

		if(m>58)
		window.close();

          document.f1.H.value=h;
          document.f1.M.value=m;
		  document.f1.S.value=s;
		 

		
		
	
	}
	setInterval("myTime()","1000");
</script>

</head>
<body>
<form method="get" name="f1">

<input type="text" name="H" id="hh" size="2"> 
<input type="text" name="M" id="mm" size="2">
<input type="text" name="S" id="ss" size="2">
 
 
 
 
 
 
<br><br><br>
User Name : <input type="text" name="t1" placeholder="Enter Name" /> <br/>
Password : <input type="password" name="t2" placeholder="Enter Password" /> <br />
Qualification : B.sc<input type="checkbox" name="c1" value="BSC" />
				B.Tech<input type="checkbox" name="c2" value="BT" /> 
				M.Tech<input type="checkbox" name="c3" value="MT" /> <br />


Gender :  Male<input type="radio" name="r1" value="M" />
		  FeMale<input type="radio" name="r1" value="F" /> <br />
		  
		  <input type="submit" value="Register" name="sub1" onClick="checkUser()">
		  		  <input type="submit" value="Click Here" name="sub2">
</form>
</body>
</html>

<?php
       if(isset($_POST['sub1']))
	   	{
		header("Location:test.php");
		}
		if(isset($_POST['sub2']))
		{
				header("Location:Array1.php");
		}


?>






