<?php
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;

}
if(isset($_GET['ud']) && $_GET['ud'] != ""){

  $id = $_GET['ud'];
   $id;
  $sql = "SELECT * from employees where Emp_id = ".$id." ";
 $res = $conn->query($sql);
$rw = $res->fetch_assoc();
//print_r ($rw);
//echo $sch = $rw['School']; 
}




?>
<!--Redirecyed Form -->
<form id="addemp" name="addemp" method="POST" action="updatingEmp.php" >
    <fieldset>

        <legend>Employee Info.</legend>
            <ul>
            	<li><br>
						<input type="hidden" name="id" value= "<?php echo $_GET['ud'];?>">
					</li><br>
                <li>

                    <label for="fname">First Name </label>
                    <input type="text" name="fname" value="<?php echo $rw['Fname'];?>">
                </li><br>
                <li>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" value="<?php echo $rw['Lname'];?>">
                </li><br>
                <li>
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $rw['Email'];?>">
                </li><br>
                <li>
                    <label for="phone">Contact No. </label>
                    <input type="text" name="phone" value="<?php echo $rw['Ph_no'];?>">
                </li><br>
                <li>
                    <label for="add">Address</label>
                    <input type="text" name="add" value="<?php echo $rw['Address'];?>">
                </li><br>
                <li>
                     <label for="city">City </label>
                    <input type="text" name="city" value="<?php echo $rw['City'];?>">
                </li><br>
                <li>
                     <label for="state">State</label>
                    <input type="text" name="state" value="<?php echo $rw['State'];?>">
                </li><br>
                <li>
                    <label for="Des">Description</label>
                    <input type="text" name="Des" value="<?php echo $rw['Description'];?>">
                </li><br>
                <li>
                    <input type="submit" name="update" value="update">
                </li><br>
            </ul>

    </fieldset>
</form> 