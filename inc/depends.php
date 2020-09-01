<?php

function OpenCon(){ #Opens the connction
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "rotary";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);

  return $conn;
}


function AdminOnlyAccess(){ #Restrict page to admin access
  if(!$_SESSION['ISADMIN']){
    header("location: ./index.php");
  }
}


function UserOnlyAccess(){ #Restrict page to user (or higher) access
  if(!isset($_SESSION['USER'])){
    header("location: ./index.php");
  }
}


function get_active_page(){ //Get active page as 'example' instead of '/pharcourts/example.php'
  $address = $_SERVER['PHP_SELF']; // Get as /pharcourts/example.php
  $components = explode('/', $address); //Get as array
  return str_replace('.php', '', end($components)); //Return last element
}


function get_from_table($table_name,$condition=1,$sort=1,$sort_direction='ASC'){
  global $conn;
  $query = "SELECT *
            FROM {$table_name}
            WHERE {$condition}
            ORDER BY {$sort} {$sort_direction}";
  $results = []; //Empty Array
  $query_result = $conn -> query($query); //Get items

  $count = $query_result -> num_rows; //Check if empty
  if($count == 0){ //If no results
    return false;
  }

  while($item = $query_result-> fetch_assoc()){ //Iterate through items
    $results[] = $item; //Append to array
  }

  return $results; //Returns as array of associated arrays
}


function secure(string $string){ //Injection security
  global $conn;
  // Add escape character to problematic characters eg. " ' \
  $string = $conn -> real_escape_string($string);
  //Remove HTML, PHP, JS tags to prevent injection
  $string = strip_tags($string);
  //Remove leading/trailing whitespace
  $string = trim($string);
  return $string;
}
?>
