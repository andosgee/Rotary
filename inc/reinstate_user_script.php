<?php
//Script for setting a user to active
  $confirm_msg = "";
  if(isset($_POST['reinstate_member_btn'])){
    //Sets thee var for the user
    $uid = $_POST['user_select'];

    //SQL Statement
    $sql_remove = "UPDATE `tbl_login` SET `Active` =1 WHERE `ID` = {$uid}";

    //Sends query
    $conn -> query($sql_remove);
  }





?>
