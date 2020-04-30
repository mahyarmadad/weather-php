<?php
$link = mysqli_connect("localhost","mahyar","123","myBlog");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error());
    echo "<script>window.alert('Hi!')</script>";
}

?>