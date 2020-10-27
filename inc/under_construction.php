<?php
  $email = "";
  if(isset($_POST['button'])){
    $email = secure($_POST['footer_input']);
    $sql_insert = "INSERT INTO `tbl_newsreg` (`Email`) VALUES ('{$email}')";
    $conn -> query($sql_insert);
  }
?>
