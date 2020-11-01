<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(!isset($_SESSION))
  {
    session_start();
  }
include 'connection.php';
$conn = Connect();
$food_ID = $_GET['id'];
$action = $_GET['action'];

$sql = "SELECT qty FROM food WHERE food_id = ".$food_ID;
$result = mysqli_query($conn, $sql);
if($result){
  if($obj = mysqli_fetch_assoc($result)) {
    switch($action) {
      case "add":
      if($_SESSION['cart'][$food_ID]+1 <= $row["qty"])
        $_SESSION['cart'][$food_ID]++;
      break;
      case "remove":
      $_SESSION['cart'][$food_ID]--;
      if($_SESSION['cart'][$food_ID] == 0)
        unset($_SESSION['cart'][$food_ID]);
        break;
    }
  }
}

header("location:cart.php");
?>
