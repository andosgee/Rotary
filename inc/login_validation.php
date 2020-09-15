<?php
if(isset($_POST["login_submit"])){
  //Get input
  $username_input = secure($_POST['login_user']);
  $password_input = secure($_POST['login_pass']);

  //Get user from database
  $user = get_from_table('tbl_login',"tbl_login.Username = '{$username_input}'");

  //Having this IF instead of getting index on assignment prevents invalid offset warning on invalid username
  if($user){
    $user = $user[0];
  }

  if($user != false && password_verify($password_input, $user['Password'])){
    session_start();
    //Set session variables
    $_SESSION['USER'] = $user['ID'];
    $_SESSION['USERNAME'] = $user['UserName'];
    $_SESSION['NameF'] = $user["NameF"];
    $_SESSION['NameS'] = $user["NameS"];
    $_SESSION['ISADMIN'] = $user['Admin'];
    //Redirect
    if($_SESSION['ISADMIN']){
      header("location: admin.php");
    }else{
    header("location: index.php");
  }
  }
  else{
    echo "<div class='login__error'>Incorrect Username or Password</div>";
  }
}
?>
