<?php
$username = $password = $password_user = "";
echo password_hash("Admin", PASSWORD_DEFAULT);
if(isset($_POST["signin_butt"])){
  $username = ltrim(rtrim($_POST["signin_user"]));
  $password = ltrim(rtrim($_POST["signin_pass"]));
  $username = mysqli_escape_string($conn, $username);
  $password = mysqli_escape_string($conn, $password);

  $sql_login_search = "SELECT * FROM `tbl_login` WHERE `UserName` ='{$username}'";

  $login_pass = $conn -> query($sql_login_search);
  $login_pass_verif = $conn -> query($sql_login_search);
  if(!empty($login_pass_verif)){

    while($row = $login_pass_verif -> fetch_assoc()){
                $password_user = $row['Password'];

        }
        if(password_verify($password, $password_user)){ #Checks details are correct
            if ($user = $login_pass -> fetch_assoc()){ #logs user in
//                Sets the session variables
                header("location: index.php");
                session_start();
                $_SESSION['USER'] = $user['ID'];
                $_SESSION['USERNAME'] = $user['UserName'];
                $_SESSION['NameF'] = $user["NameF"];
                $_SESSION['NameS'] = $user["NameS"];
                #echo "here";
            }else{
                echo "Error Logging in, Please try Later.";
            }
        }else{
            echo "Incorrect Credentials!";
        }
        }else{
            echo "Verification Error.";
        }
  }





?>
