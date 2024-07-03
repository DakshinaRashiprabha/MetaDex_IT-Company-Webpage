<?php 
include "config.php"; 
include "nav.php";

if (isset($_GET['id'])) {
 $user_id = $_GET['id'];
 $sql = "DELETE FROM `users` WHERE `user_id`='$user_id'";
 $result = $conn->query($sql);
 if ($result == TRUE) {
 echo "Record deleted successfully.";
 header("Location: view.php");

 }else{
 echo "Error:" . $sql . "<br>" . $conn->error;
 }
}
?>