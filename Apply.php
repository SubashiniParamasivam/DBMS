<html>
<head>
<div align="center">
<img src="logo_nvsp.jpg" alt="" width="170"><img src="NVSP_header.jpg" alt="" width="595"></DIV>
</HEAD>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["t1"];
	$gender=$_POST["s4"];
	$age=$_POST["t5"];
	$mobileno=$_POST["t14"];
	$emailid=$_POST["t15"];
	$optional=$_POST["t13"];
	$state=$_POST["s1"];
	$district=$_POST["s5"];
	$houseno=$_POST["t7"];
	$street=$_POST["t8"];
	$village=$_POST["t9"];
	$postoffice=$_POST["t10"];
	$pincode=$_POST["t11"];
	$typeofrelation=$_POST["s3"];
	$relativename=$_POST["t3"];
}

$server="localhost";
$db="Voter";
$pwd="";
$user="root";
$conn=new mysqli($server,$user,$pwd,$db);
if(!$conn)
	echo "Connection failure.... Retry";
else
{
	$sql1="Insert into GeneralDetails(Name,Gender,Age,Mobileno,Emailid,Optional) values('$name','$gender','$age','$mobileno','$emailid','$optional')";
	$sql2="Insert into Address(Houseno,Street,Village,Postoffice,Pincode,State,District) values('$houseno','$street','$village','$postoffice','$pincode','$state','$district')";
	$sql3="Insert into Relative(Name,Relativename,Typeofrelation) values('$name','$relativename','$typeofrelation')";
	if(($conn->query($sql1)===True)&&($conn->query($sql2)===True)&&($conn->query($sql3)===True))
	{
		echo '<div align="center"><br><br><br>';
		echo '<h4>Your details are submitted successfully!!!</h4><br>';
		echo 'Get your VOTER ID and be ready for VOTING';
		echo '<br><br><br>';
		echo '<H2>YOUR VOTE YOUR RIGHT</H2>';
		echo '<img src="bg.jpg">';
		echo '</div>';
	}
	else
	{
		echo"Error in Submitting details. Try Again later...";
	}
}
$conn->close();
?>
</html>