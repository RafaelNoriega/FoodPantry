<?php 
$db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");

if($db) 
{
    echo'<script>console.log("Connection Succesfull")</script>';
}
else {
    echo '<script>console.log("L")</script>';


}
$sentusername;
$sentpassword;
$err;
$res;
$row;
$v_id;


if(isset($_SESSION['active'])){
	header("Location: ../index.html");
	exit();
}

if(isset($_POST['email'], $_POST['password']) &&!
	empty($_POST['email']) && !empty($_POST['password']))
{
	//sanatize form
	$sentemail =trim(htmlspecialchars($_POST['email']));
	$sentpassword =trim(htmlspecialchars($_POST['password']));

	//check the users credentials to see if they have an account and sign them in.
	$sql = "SELECT * 
	FROM volunteer 
	WHERE email = '".$sentemail."'
	AND password='".$sentpassword."';";
	
	$result= pg_query($db, $sql);
	if($row = pg_fetch_array($result))
	{
	$_SESSION['active'] = true;	
	$_SESSION["id"]    = $row['volunteer_id'];
	$_SESSION["fname"] = $row['fname'];
	$_SESSION["email"] = $row['email'];
	$_SESSION['role'] = $row['role'];
	
	$db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");
	$query = "SELECT * from time 
	    WHERE volunteer_id = '{$_SESSION["id"]}'
	    ORDER BY t_id DESC;";

	$result = pg_query($db, $query);
	if($row= pg_fetch_array($result))
	{
		if($row['end_time'] == NULL)
		{
		    $_SESSION['clockedin'] = true;
		    echo "already clocked in";
		}
		else
		{
		    $_SESSION['clockedin'] = false;
		    echo "Clocked out";
		}
	}
	header("Location: ../dash");		
	}
}
?>
