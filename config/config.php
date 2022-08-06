<?php
include "a.php";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die('<div class="alert alert-danger">错误！请进行一些更改。</div>'.$conn->connect_error);
}


?>