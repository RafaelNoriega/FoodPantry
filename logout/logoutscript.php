<?php
//File: logout.php
//Destroys the session and deletes the cookie from 
// the client's web browser
 // needed to access $_SESSION
include 'lib.php';

// if guest attempt to view page
// redir
if(!isset($_SESSION['active'])) { // guest viewing page
    header("Location: ../index.php");exit();
}

$_SESSION = array();    // empty the session variable
setcookie(session_name(),"",-1,"/"); // set client's cookie to '' and expire
session_destroy(); // destroys all data registered to a session
?>
