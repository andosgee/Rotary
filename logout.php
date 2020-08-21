<?php
session_start(); #opens the session
    session_destroy(); #ends the session
    header("location: index.php") #sends user to the home page

?>
