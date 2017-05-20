<?php
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;

}
if(isset($_POST['submit']) && !empty($_POST['submit'])){
	//Form Data stored in variables//
	$fname= $_POST['fname'];
	$lname=$_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$add = $_POST['add'];
	$city = $_POST['city'];
	$stt = $_POST['state'];
	$des = $_POST['Des'];
	$sql="INSERT into employees (Fname,Lname,Email,Ph_no,Address,City,State,Description) VALUES ('$fname','$fname','$email','$phone','$add','$city','$stt','$des' )";
//echo $rslt=  $conn->query($sql);

if(mysqli_query($conn, $sql)){
    echo "<b> Data has been Inserted.</b>";
    header("Refresh: 2 ; URL=employee.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


}
