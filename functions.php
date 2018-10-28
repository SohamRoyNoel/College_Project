<?php
function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
}

function Confirm(){
    echo "<script>alert(\"You've been registered; LOGIN to continue\")</script>";
}