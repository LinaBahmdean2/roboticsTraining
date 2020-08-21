<!DOCTYPE html>
<html>

<head>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script>
 $(document)
		.ready(
				function() {
				  $(document).on("click","#start",function(){
                    $("#mytable").append("<tr><td>"+$("#turn_right").val()+"</td><td>"+$("#forward").val()+"</td><td>"+$("#turn_left").val()+"</td></tr>");
				                                               }
               )
});



</script>


<style>


label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​


</style>

    <title>
        How to call PHP function
        on the click of a Button ?
    </title>
</head>

<body style="text-align:center;">

    <h1 style="color: #e60000;">
        Move the Robot
    </h1>



    

<?php

include "DBConnection.php";

// choose button action
if(isset($_POST['submit'])) { 
    //insert to the database and print the direction
    $turn_right = $_POST['turn_right'];
    $forward = $_POST['forward'];
    $turn_left = $_POST['turn_left'];
    $sql = "INSERT INTO movements (turn_right, forward, turn_left)
    VALUES ($turn_right, $forward , $turn_left)";

  
}

//close the connection to the database
$conn->close();

?>


    <form method="POST">

    Turn Right <input type="text" id="turn_right" name="turn_right" value="<?php echo isset($_POST['turn_right']) ? $_POST['turn_right'] : '' ?>" placeholder="Enter Full Name">
  <br/>

  Go Forward <input type="text" id="forward" name="forward"  value="<?php echo isset($_POST['forward']) ? $_POST['forward'] : '' ?>" placeholder="Enter Full Name">
  <br/>

  Turn Left <input type="text" id="turn_left" name="turn_left" value="<?php echo isset($_POST['turn_left']) ? $_POST['turn_left'] : '' ?>" placeholder="Enter Full Name">
  <br/>


  <input type="submit" id="submit" name="submit" value="Save">
  <input type="submit" name="deleted" value="Delete">
  

  


</form>


<input type="submit" id="start" name="start" value="Start">

      <table id="mytable" border="1" class="tbinput" style="width:30%">
  <tr>
    <th>Name</th>
    <th>EmployeeID</th>     
    <th>Phone No</th>
  </tr>
</table>

    </body>

</html>