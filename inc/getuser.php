<?php

if(!empty($_GET)){
    //Redefine depends and conn here. Wont work othewise
    include "depends.php";
    $conn = OpenCon();
    $id = $_GET['id'];
    LoadInfo($id);
 }


?>

<div id="txtHint"></div>
