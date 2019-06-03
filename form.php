<?php

require("connection.php");
require("classes.php");

session_start();
//session_destroy();
///////////DECLARE SESSION TO POST//////////////////////
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['depart'] = $_POST['depart'];
$_SESSION['return'] = $_POST['return'];
$_SESSION['hotel'] = $_POST['hotel'];

/////////////INITIALIZE NEW OBJECT//////////////////
$obj = new Reservation;
///////////// OBJECT'S METHOD ACCEPTS NAME OF HOTEL TO DISPLAY RATES/TOTAL/REFERENCE
$obj->getRate_Total_Reference($obj->hotel);
///////////////////////////////////////////////////











///////////////CHECK IF USERS CLICKS CONFIRM / IF YES ADD INPUT TO DATABASE////
if( ($_SERVER['REQUEST_METHOD'] == 'POST' AND $_POST['confirmed'])){

    
  if($obj->writeToDatabase($conn) == true){
  echo "<h2 class='center'>Booking Confirmed<i class='fas fa-check'></i></h2>";
  echo "<h2 class='center'>".'REF: '.$obj->reference."</h2>";
      
  }else{
  echo "<h2 class='center'>Error Processing data</h2>";
  }






////////////// ASKS USER TO CONFIRM INPUT/////////////////////
}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){  
?>
<table>

	<tr>
		<td><h2>Review</h2></td>
        <td><h2>Submission</h2></td>
	</tr>

	<tr>
		<td><p>Fullname</p></td>
		<td><p><?php   echo $obj->firstname."  ".$obj->lastname;    ?></p></td>
	</tr>

	<tr>
		<td><p>Email</p></td>
		<td><p><?php echo $obj->email;  ?></p></td>
	</tr>

	<tr>
		<td><p>Hotel</p></td>
		<td><p><?php  echo $obj->hotel;  ?></p></td>
	</tr>

	<tr>
		<td><p>Days</p></td>
		<td><p><?php  echo $obj->days;  ?></p></td>
	</tr>

	<tr>
		<td><p>Rate</p></td>
		<td><p><?php   echo "ZAR ".$obj->rate;  ?></p></td>
	</tr>

	<tr>
		<td><p>Total</p></td>
		<td><p><?php  echo "ZAR ".$obj->total;  ?></p></td>
	</tr>

	<tr>
		<form method="POST">
		<input type="hidden" value="confirmed" name="confirmed">
        <input type="hidden" value="<?php echo $obj->firstname ; ?>" name="firstname">
        <input type="hidden" value="<?php echo $obj->lastname ; ?>" name="lastname">
        <input type="hidden" value="<?php echo $obj->email ; ?>" name="email">
        <input type="hidden" value="<?php echo $obj->hotel ; ?>" name="hotel">
        <input type="hidden" value="<?php echo $obj->days ;?>" name="day">
        <input type="hidden" value="<?php echo $obj->total ;?>" name="total">
		<td><input type="submit" value="Confirm" class="button forminput"></td>
		</form>
	</tr>

</table>
















<?php
}else{
///////////////////////////DISPLAY FORM /////////////////////////
?>





<form method="POST">

    <table>
    	<tr>
    		<th><label for="firstname">Firstname*</label></th>
    		<th><label for="lastname">Lastname*</label></th>
    	</tr>
    	<tr>
    		<td><input type="text" name="firstname" id="firstname" class="forminput" required></td>
    		<td><input type="text" name="lastname" id="lastname" class="forminput"  required></td>
    	</tr>

    	<tr>
    		<th><label for="email">Email*</label></th>
    		<th><label for="membernumber">Membership Number (opt)</label></th>
    	</tr>
    	<tr>
    		<td><input type="email" name="email" id="email" class="forminput" required></td>
    		<td><input type="text" name="membernumber" id="membernumber" class="forminput"></td>
    	</tr>

     	<tr>
    		<th><label for="depart">Depart on*</label></th>
    		<th><label for="return">Return on*</label></th>
    	</tr>
    	<tr>
    		<td><input type="date" name="depart" id="depart" class="forminput" required></td>
    		<td><input type="date" name="return" id="return" class="forminput" required></td>
    	</tr>

    	<tr>
    		<th><label for="hotel">Hotels*</label></th>
    		<th></th>
    	</tr>
    	<tr>
    		<td><select class="forminput" name="hotel" >
    			<option>Select Hotel</option>
    			<option value="Codespace Inn">Codespace Inn</option>
    			<option value="Hotels Connect">Hotels Connect</option>
    			<option value="Lodgers">Lodgers</option>
    		</select></td>
    		<td><input type="submit" value="submit" class="button forminput"></td>
    	</tr>

    </table>

</form>

<?php
};

?>