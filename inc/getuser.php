<?php
// if(empty($_GET['id'])){
//   $id = 0;
// }
echo(var_dump($_POST));
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  print_r($_POST);
  echo(var_dump($_POST));
  echo 'test';
}

// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//   // $id = secure($_GET['id']);
//   $id = 1;
//   $userID = get_from_table('tbl_login',"ID = {$id}")[0];
//   echo $userID['NameF'];
// }


?>

<!-- <div id="txtHint"></div> -->
