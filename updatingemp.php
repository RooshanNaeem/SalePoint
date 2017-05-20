<?php 
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;

}
//////Editing the data///////
if(isset($_POST['id'])){
	$udID = $_POST['id'];
	$udfname = $_POST['fname'];
	$udlname = $_POST['lname'];
	$udemail = $_POST['email'];
	$udphone = $_POST['phone'];
	$udadd = $_POST['add'];
	$udcty = $_POST['city'];
	$udstate = $_POST['state'];
	$uddes = $_POST['Des'];
	
	$query= "UPDATE employees set Fname = '$udfname', Lname = '$udlname', Email = '$udemail', Ph_no = '$udphone', Address = '$udadd', City = '$udcty', State = '$udstate', Description = '$uddes' Where Emp_id =  ".$udID." " ;

if(mysqli_query($conn, $query)){
    echo "<b> Data has been Updated.</b>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
echo '<script type="text/javascript"> window.location = "http://localhost/Projects/SalePoint/employee.php" </script>';
}

?>