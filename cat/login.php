<?php

$db=mysqli_connect('localhost','root','qwerty','hospital');	
session_start();
if (!$db)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit']))
	{
	$u=$_POST['id'];
	$p=$_POST['pass'];
	$sql=" select * from employe where username='$u' and password='$p' ";
$q=mysqli_query($db,$sql);

if($q)
{
 echo "successfully login";
 $_SESSION['id'] = $u;
 header('Location: welcome.php');
}
else
{
 echo "Unsuccess";
}	
 
}

  ?>
  
