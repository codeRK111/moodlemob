<?php 
    if(isset($_POST['step2']))
    {
      //     print_r($_POST);
          // $_SESSION['name'] = $_POST['name'];
          // $_SESSION['email'] = $_POST['email'];
          // $_SESSION['service'] = $_POST['service'];
          // $_SESSION['price'] = $_POST['price'];
          $_SESSION['current_page']="finish";
          header("location: ./");

    }
     include './application/views/step2.php';

?>