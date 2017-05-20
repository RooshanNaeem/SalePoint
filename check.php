<?php

include 'config.php';
if(isset($_POST['login'])){
	session_start();

	$username =$_POST['username'];
	$pass = $_POST['pass'];
	$role= $_POST['role'];
	if ($role='Administrator') {
		//echo $role;
		//$sql1 ="SELECT * from user where position='admin'";
		//$result =$conn->query($sql1);
		//$row=$result->fetch_assoc();
		//echo $row;
		//if($result->num_rows > 0){
	$sql="SELECT * from user where username='$username' AND password='$pass' AND position='admin'";
	$res=$conn->query($sql);
	$row=$res->fetch_assoc();
	if($res->num_rows > 0){
			$_SESSION['username'] = $username;
         	$_SESSION['pass'] = $pass;

		header("Refresh: 2 ; URL=dashboard.php");
	}
	else{
		echo "Invalid email or password";
		header("location: index.php");
	}
		//}
	
}

elseif ($role='Employee') {
	//$sqle="SELECT * FROM user WHERE position='Employee' ";
	//$result1 =$conn->query($sqle);
	//	$row=$result1->fetch_assoc();
		//if($result1->num_rows > 0){
	$sql="SELECT * from user where username='$username' AND password='$pass' AND position='Employee'";
	$resulte=$conn->query($sqle);
	$row=$resulte->fetch_assoc();
	if($resulte->num_rows > 0){
			$_SESSION['username'] = $username;
         	$_SESSION['pass'] = $pass;

		header("Refresh: 1 ; URL=emp_dash.php");
	}
	else{
		echo "Invalid email or password";
		header("location: index.php");
	}
	
//}

}
}




?>