<?php include "inc/search.php";?>

<div class='table'>
<?php
if(isset($_POST['user_search_button'])){
  $term = secure($_POST['user_search_input']);
  //loads all dive club members
  $members = get_from_table("tbl_login", "(`NameF` LIKE '%{$term}%' OR `NameS` LIKE '%{$term}%' OR `Email` LIKE '%{$term}%' OR `Mobile` LIKE '%{$term}%') AND `Active` = 1 AND `Publish` = 1");

  if($members){

    echo "<div class='table__column'>
          <div class='table__head'>Name</div>";
    foreach ($members as $info) {
      echo"
          <div class='table__data'>{$info['NameF']} {$info['NameS']}</div>
          ";
    }
    // echo "</div>
    //       <div class='table__column'>
    //       <div class='table__head'>Phone</div>";
    // foreach ($members as $info) {
    //   echo"
    //       <div class='table__data'>{$info['Mobile']}</div>
    //       ";
    // }
    echo "</div>
          <div class='table__column'>
          <div class='table__head'>Contact</div>";
    foreach ($members as $info) {
      echo"
          <div class='table__data'>{$info['Email']}<br>{$info['Mobile']}</div>
          ";
    }
    echo "</div>
          <div class='table__column'>
          <div class='table__head'>Address</div>";
    foreach ($members as $info) {
      echo"
          <div class='table__data'>{$info['UnitNum']}{$info['StreetNum']} {$info['StreetName']}
          <br>{$info['City']} {$info['Suburb']} {$info['PostCode']}
          </div>
          ";
    }
    // echo "</div>
    //       <div class='table__column'>
    //       <div class='table__head'>Unit Number</div>";
    // foreach ($members as $info) {
    //   echo"
    //       <div class='table__data'>{$info['UnitNum']}</div>
    //       ";
    // }
  }
}else{
  //loads all dive club members
  $members = get_from_table("tbl_login", "`Active` = 1 AND `Publish` = 1");

  if($members){

    echo "<div class='table__column'>
          <div class='table__head'>Name</div>";
    foreach ($members as $info) {
      echo"
          <div class='table__data'>{$info['NameF']} {$info['NameS']}</div>
          ";
    }
    // echo "</div>
    //       <div class='table__column'>
    //       <div class='table__head'>Phone</div>";
    // foreach ($members as $info) {
    //   echo"
    //       <div class='table__data'>{$info['Mobile']}</div>
    //       ";
    // }
    echo "</div>
          <div class='table__column'>
          <div class='table__head'>Contact</div>";
    foreach ($members as $info) {
      echo"
          <div class='table__data'>{$info['Email']}<br>{$info['Mobile']}</div>
          ";
    }
    echo "</div>
          <div class='table__column'>
          <div class='table__head'>Address</div>";
    foreach ($members as $info) {
      echo"
          <div class='table__data'>".((isset($info['UnitNum']))? "{$info['UnitNum']}/":"")."{$info['StreetNum']} {$info['StreetName']}
          <br>{$info['City']} {$info['Suburb']} {$info['PostCode']}
          </div>
          ";
    }
    // echo "</div>
    //       <div class='table__column'>
    //       <div class='table__head'>Unit Number</div>";
    // foreach ($members as $info) {
    //   echo"
    //       <div class='table__data'>{$info['UnitNum']}</div>
    //       ";
    // }
  }}

?>
</div>
</div>
