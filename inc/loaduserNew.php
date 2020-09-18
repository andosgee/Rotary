<?php
$fName = '';
  if(!empty($_GET)){
    include "depends.php";
    $conn = OpenCon();
    $id = $_GET['id'];
    $user = get_from_table("tbl_interest","ID={$id}")[0];
    $fName = $user["fName"];
  }

  ?>

<div id="txtHint"></div>
