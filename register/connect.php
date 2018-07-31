<?php
$db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=rop60Xapt");

if($db) {
    echo'<script>console.log("Connection Succesfull")</script>';
}
else {
    echo '<script>console.log("L")</script>';
}


//ini_set("log_errors",1);
//ini_set("error_log", "php_errors.log");
//error_log("Hello world");
?>
