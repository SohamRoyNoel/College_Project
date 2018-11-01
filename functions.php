<?php
function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
}

function Confirm(){
    header("Location: userlogin.php");
    echo "<script>alert(\"You've been registered; LOGIN to continue\")</script>";
}

function Hold(){
    echo "<script>alert(\"There is another account with this email.\")</script>";
//    header("Location: userlogin.php");
}