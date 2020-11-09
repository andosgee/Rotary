<?php include "inc/search.php";?>
<div class="tablem">
<table class="table">
  <tr>
    <th class="table__head">Name</th>
    <th class="table__head">Contact</th>
    <th class="table__head">Address</th>
  </tr>
  <?php
  if(isset($_POST['user_search_button'])){
    $term = secure($_POST['user_search_input']);
    //loads all dive club members
    $members = get_from_table("tbl_login", "(`NameF` LIKE '%{$term}%' OR `NameS` LIKE '%{$term}%' OR `Email` LIKE '%{$term}%' OR `Mobile` LIKE '%{$term}%') AND `Active` = 1 AND `Publish` = 1");

  }else{
      $members = get_from_table("tbl_login", "`Active` = 1 AND `Publish` = 1");
  }
  if(!empty($members)){
    foreach ($members as $person ) {
      echo"<tr>
            <td class='table__data'>{$person["NameF"]} {$person["NameS"]}</td>
            <td class='table__data'>{$person['Email']}<br>{$person['Mobile']}</td>
            <td class='table__data'>".((isset($person['UnitNum']))? "{$person['UnitNum']}/":"")."{$person['StreetNum']} {$person['StreetName']}
            <br>{$person['City']} <br>{$person['Suburb']} {$person['PostCode']}</td>
            </tr>";
    }
  }else {
    echo "<h3>Sorry No Results Found For {$term}</h3>";
  }


  ?>
</table>
</div>
