<?php

function OpenCon(){ #Opens the connction
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "Rotary";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);

  return $conn;
}

function AccessForbid(){ #Function redirects user if the user is not supposed to be there
  if(empty($_SESSION['USER'])){
    header("location index.php");
  }
}

function SessionExist(){ #Redirects a signed in user
  if(!empty($_SESSION['USER'])){
    header("location: index.php");
  }
}

function AdminIs(){ #Checks Users Permissions
  if($_SESSION['ADMIN'] == 'Y'){
    include "inc/admin_options.php";
    include "inc/default_options.php";
  }else{
    include "inc/default_options.php";
  }
}

function AdminOptions(){  #If users are not admin they are redirected
  if($_SESSION['ADMIN'] != 'Y'){
    header("location: admin.php");
  }

}

function PopUsersSelect(){ #populates the users into a selectbox for password reset.
  $sql_pop = "SELECT * FROM `tbl_login` WHERE `Active` = 'Y'";
  global $conn;
  $pop = $conn -> query($sql_pop);
  echo "<select name='user_select' id='user_select'>
        <option>--</option>";
  foreach ($pop as $items) {
    $id = $items['ID'];
    $fName = $items['NameF'];
    $sName = $items['NameS'];
    $userName = $items['UserName'];
    echo "<option value='{$id}'>{$fName} {$sName} | {$userName}</option>";
  }
  echo"</select>";
}

?>
