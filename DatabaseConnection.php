<form>
<table border=0 align="center">
<caption><h3>Database Connection Demo</h3></caption>
<tr>
<td>  UserID </td>    <td> : </td>
<td><input type="text" name="t1"> </td>      
 </tr> 
 <tr>
  <td>UserName </td> 
  <td>:</td>
  <td> <input type="text" name="t2"> </td> 
 </tr>   
 <tr>
 <td>Fees</td>
 <td>:</td>
 <td><input type="text" name="t3"> </td> 
   </tr>
   
   <tr>
 <td>Select Student  Id </td>
 <td>:</td>
 <td><select name="s1"> <option> --Select Id--</option> 
 <?php
       $con= mysqli_connect("localhost","root","");
		$db= mysqli_select_db($con,"wtp");
		$str="select stu_id from StudentDetail";
		$qry= mysqli_query($con,$str);
		while($row=mysqli_fetch_row($qry))
			{
			echo "<option>".$row[0]."</option>";	
			}
 ?>
 </select></td> 
   </tr> 
   
   <tr>
   <td colspan="3" align="center">
   <input type="submit" value="Register Here" name="sub1">
   <input type="submit" value="Show Record" name="sub2">
  </td>
   </tr>
</table>
</form>
<?php
       if(isset($_GET['sub1']))
	   {
	$id=$_GET['t1'];
	$name=$_GET['t2'];
	$fee=$_GET['t3'];
	
       $con= mysqli_connect("localhost","root","");
		$db= mysqli_select_db($con,"wtp");
		$str="insert into StudentDetail values('$id','$name','$fee')";
		$qry= mysqli_query($con,$str);
		 if($qry)
		{
		echo "<br> Record Inserted....";
		}
		else
		{
		echo "<br> Record Not Inserted !!!....";
		}
		}
		
		
if(isset($_GET['sub2']))
	   {
	$id=$_GET['t1'];
	$name=$_GET['t2'];
	$fee=$_GET['t3'];
	
        $con= mysqli_connect("localhost","root","");
		$db= mysqli_select_db($con,"wtp");
		$str="select * from StudentDetail";
		$qry= mysqli_query($con,$str);
echo "<form>";
echo "<table border=2 width='80%' align='center'>";
echo "<tr> <th> Student ID </th> <th> Student Name </th><th>Student Fees </th> </tr>";
$n=1;
$tb='t';
$tb=$tb.$n;
echo "TextBox Name =".$tb;
		while($r=mysqli_fetch_row($qry))
			{
			$p=$r[0];
			echo "<tr>";
			echo  "<td align='center'>".$p."</td>";
			echo  "<td align='center'><input type='text' value='".$r[1]."' name='".$tb."' /></td>";

			$n++;
			$tb=$tb.$n;
			
			echo  "<td align='center'><input type='text' value='".$r[2]."' name='".$tb."' /></td>";
			echo "<td align='center'> <a href='RecordUpdate.php?p=$p'> Update Record </a></td>";
			echo "</tr>";
			}
			echo "</table>";
			echo "</form>";
		}
		
		
		
?>