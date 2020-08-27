<?php
  if(isset($_POST['add_mem_sub'])){
    echo "
    <h3>New User Successfully Added</h3>
    <br> 
    Name: {$fName} {$sName}
    <br>
    Email: {$email}
    <br>
    Phone: {$phoNum}
    <br>
    Username: {$username}
    <br>
    Address: {$streNum} {$unit}
    <br>     {$streNam}, {$city}
    <br>     {$suburb}, {$postcode}

    ";
  }
?>
