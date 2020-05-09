<?php
// $name = $_GET['username'];
// $another_name = $_POST['username'];
// if ($name === 'mohamed') {
//     echo "you are successufly login";
// } else {echo "your name is not correct";}
session_start();
$username = $_SESSION['name'];
echo '<h3 style = "text-align: center">'. $username . '</h3>';
?>