<?php
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;

}
?>

<!DOCTYPE html>

<body><br><br>
<a href="employee.php">Manage Employees </a></br></br>
<a href = "salereport.php">Sales Report </a>

</body>
</html>