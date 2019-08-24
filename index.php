<html>

<?php
//Start the Session if the session has not started yet!!

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/***************************************************/

if(!isset($_SESSION['current_page'])){ 
$_SESSION['current_page']="step1";
}
echo $_SESSION['current_page'];
include './application/config/config.php';
include './application/views/header.php';
include './application/controller/main.php';
include './application/views/footer.php';


?>


</html>
