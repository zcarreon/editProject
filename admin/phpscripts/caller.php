<?php
  //DO NOT PUT A LINK TO THE CALLER.PHP IN CONFIG.PHP!
  require_once("config.php");
  if(isset($_GET["caller_id"])){
    $dir = $_GET["caller_id"];
    if($dir == "logout") {
      logged_out();
    }else if($dir == 'delete'){
      $id = $_GET['id'];
      deleteuser($id);
    }else{
      echo "Caller id was passed incorrectly.";
    }
  }
?>
