
<?php
function clockOut(){	
    $time = date("h:ia");
    $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");  

    //if their last clock in row had a end_time of null then they
    //forgot to log out. If it is not null then there was a time set when they hit logout
    //in the dashboard so we will insert a new clock row for them.

    //if there are no records (if it is a new user) then insert a new row. 
    //------------------add "and vid= session id"
    $clockOut = "update time set end_time = '".$time."' where t_id = '".$_SESSION['tid']."' and volunteer_id='".$_SESSION['id']."';";
    pg_query($db,$clockOut);
    header("Location: ../dash");


}
function clockIn()
{
    $time = date("h:ia");
    $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");  
    //insert a new clock in row into the time table
    $sql = "INSERT INTO time (volunteer_id, start_time, end_time) 
	values ('".$_SESSION["id"]."','".$time."', NULL)";
    pg_query($db, $sql);
    header("Location: ../checkout/index.php");

}
if(isset($_POST['clockOut'])){
    clockOut();
}

if(isset($_POST['clockIn'])){
    clockIn();
}
?>
