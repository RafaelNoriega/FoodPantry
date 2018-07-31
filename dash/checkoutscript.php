<?php
//check out code for students
if( isset($_POST['checkout']) && !empty($_POST['checkout']) && isset($_POST[]) ) 
{ 
    //echo '<script>console.log("in checkout")</script>';
    $time = date('h:ia');
    $date = date('m-d-Y');
    $pt1 = (int)$_POST['1pt'];
    $pt2 = (int)$_POST['2pt'];
    $pt3 = (int)$_POST['3pt'];
    $id = $_POST['runnerid'];
    
    //get the sum of points so that we can check if it exceeds the max allowed
    $points = $pt1 + ($pt2*2) + ($pt3*3);
    if($points>16)
    {
        $_SESSION['err'] ="Too many items must be less than 16 pts";
    }
    else
    {
        $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");
       // echo '<script>console.log("entering visit with date: '.$date.'")</script>';
        //insert into visits (visit_date, item1, item2, item3, csub_id)
        //values ('4-24-2018', 1, 3, 2, '001039142');
	$sql = "INSERT INTO visits (visit_date, item1, item2, item3, csub_id)   values ( '".$time"' ,".$pt1." ,".$pt2." ,".$pt3.",'".$id."');";
        pg_query($db, $sql);
	header("Location: ../checkout/index.php");
	
    }
} 
?>

