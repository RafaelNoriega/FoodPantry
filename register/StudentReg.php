<?php 

$db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");
if($db) {
    echo'<script>console.log("Connection Succesfull")</script>';
}
else {
    echo '<script>console.log("L")</script>';
}
if(isset($_POST['fname'])){
    $sentfirstname = $_POST['fname'];}

if(isset($_POST['lname'])){
    $sentlastname = $_POST['lname'];}

if(isset($_POST['email'])){
    $sentemail = $_POST['email'];}

if(isset($_POST['runnerid'])){
    $sentrid = $_POST['runnerid'];}

if(isset($_POST['phone'])){
    $sentphone = $_POST['phone'];}



$sentrole;
$sentmajor;
$q1;
$q2;
$q3;
$q4;
$q5;
$q6;
$err;
$res;
$row;
$id;

if(isset($_POST['submit']))
{
    Signup();
}

function newuser()
{	
    $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");
    echo '<script>console.log("in new user function")</script>';
    // check to see if text fields are not only not empty but are set
    if(isset($_POST['fname'],
	$_POST['lname'],
	$_POST['email'],
	$_POST['runnerid'],
	$_POST['role'],
	$_POST['major'],
	$_POST['phone'],
	$_POST['q1'], 
	$_POST['q2'], 
	$_POST['q3'], 
	$_POST['q4'], 
	$_POST['q6'] ) 
	&& !empty($_POST['fname']) && !empty($_POST['lname']) 
	&& !empty($_POST['email']) && !empty($_POST['major']) && !empty($_POST['phone'])
    ){
	//sanatize form
	$sentfirstname =trim( htmlspecialchars( $_POST['fname']) );
	$sentlastname = trim( htmlspecialchars( $_POST['lname']) );
	$sentemail =    trim( htmlspecialchars( $_POST['email']) );
	$sentrid =      trim( htmlspecialchars( $_POST['runnerid']) );
	$sentrole =     trim( htmlspecialchars( $_POST['role']) );
	$sentmajor =    trim( htmlspecialchars( $_POST['major']) );
	$sentphone =    trim( htmlspecialchars( $_POST['phone']) );	
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q6 = $_POST['q6'];
	$q5 = NULL;
	if (isset($_POST['q5'])) 
	{	
	    $q5 = $_POST['q5'];
	}
	//this is the variable holding the query that adds a user, needs to be converted into postgress sql
	$adduser = "INSERT INTO users 
	    (fname, lname, email, major, phone_number, role, csub_id)
	    values ('".$sentfirstname."','".$sentlastname."','".$sentemail."','".$sentmajor."','".$sentphone."','".$sentrole."','".$sentrid."');";

	// if the register was successful we redirect them to a login page for debugging purposes, if it works we switch back to the voulenteers page to add items 
	//----------------------------------------------------uncomment
	if($res = pg_query($db, $adduser))
	{ 
	    echo "<script>console.log('Seccessfully Registered')</script>";
	    //grab the user_id for the new entry
	    $grabid = "Select * from users where csub_id='".$sentrid."';";
	    $id=NULL;

	    if( $res = pg_query($db,$grabid) )
	    {
		while($row = pg_fetch_array($res))
		{

		    $id =$row['user_id'];
		    echo "<script>console.log('the id is: ".$id."')</script>";
		}
	    }

	    //insert data to database
	    $data = "INSERT INTO data values('".$id."',".$q1.",'".$q2."',".$q3.",'".$q4."','".$q6."');";

	    if( pg_query($db, $data) )
	    {
		header("Location: ../thankyou");exit();
		echo "<script>console.log('Seccessfully added data')</script>";

	    }

	}

	//redirect after data inserted into database
	//header("Location: index.html");
    }
    // basic error message 
    else
    {
	$_SESSION['err']= "All Fields Must Be filled";
    }
} 

function Signup(){

    $db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");
    // global $db;

    //sanatize form
    if(isset($_POST['fname'])&& !empty($_POST['fname'])){
	$sentfirstname = trim(htmlspecialchars($_POST['fname']));
    }
    if(empty($_POST['fname'])||empty($_POST['lname'])){
	$_SESSION['err'].= "Missing Name! <br>";
    }
    if(empty($_POST['runnerid'])){
	$_SESSION['err'].= "Missing RunnerID! <br>";
    }
    if(empty($_POST['email'])){
	$_SESSION['err'].= "Missing Email! <br>";
    }
    if(empty($_POST['phone'])){
	$_SESSION['err'].= "Missing Phone Number! <br>";
    }
    // check if questions are answered
    if ( !isset($_POST['q1']) || !isset($_POST['q2']) || !isset($_POST['q3']) || !isset($_POST['q4']) || !isset($_POST['q6']) )
    {
	$_SESSION['err'].="Questions must be answered! <br>";
	echo "<script>console.log('Not all question filled')</script>";
    }

    if(!empty($_POST['email'])&& !empty($_POST['runnerid'])) 
    {

	$testingRID =trim(htmlspecialchars($_POST['runnerid']));
	$testingEMAIL =trim(htmlspecialchars($_POST['email']));
	$check= "SELECT *  FROM users WHERE csub_id = '{$testingRID}'";
	echo $check;
		
	$result = pg_query($db, $check);	
	if($row =pg_query($result))
	{
	    $_SESSION['err'].= " <br>User Already Exist!!!";
	    echo '<script>console.log("User Found")</script>';

	}
	else if(isset($_POST['fname'],
	    $_POST['lname'],
	    $_POST['email'],
	    $_POST['runnerid'],
	    $_POST['role'],
	    $_POST['major'],
	    $_POST['phone'],
	    $_POST['q1'], 
	    $_POST['q2'], 
	    $_POST['q3'], 
	    $_POST['q4'], 
	    $_POST['q6'] ) 
	    && !empty($_POST['fname']) && !empty($_POST['lname']) 
	    && !empty($_POST['email']) && !empty($_POST['major']) && !empty($_POST['phone'])
	){
	    newuser();
	}

    }
}
?>
