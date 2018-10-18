<html>
<body>
<?php
$hostname="localhost";
$username="root";
$pass="";
$con=mysqli_connect($hostname,$username,$pass);
if(!$con)
{
    die('Could not connect'.mysql_error());
}
echo 'Connected';
$db="test";
$y=mysqli_select_db($con,$db);
if (!$y)
{
	    die('Could not select db'.mysql_error());
}
echo "\n Database selected ";
$a=$_POST['textnames'];
$b=$_POST['fathername'];
$c=$_POST['dob'];
$d=$_POST['bloodgroup'];
$e=$_POST['sex'];
$f=$_POST['weight'];   
$g=$_POST['Address'];   
$h=$_POST['city'];   
$i=$_POST['State'];   
$j=$_POST['pincode'];   
$k=$_POST['emailid'];   
$l=$_POST['mobileno'];   
$m=$_POST['anydiseases'];
echo $a;
$b=mysqli_query($con,"insert into register
values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')");
if ($b)
{
echo "\n inserted";
}
?>

</body>
</html>