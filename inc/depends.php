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

?>
