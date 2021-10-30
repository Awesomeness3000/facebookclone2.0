<?php
    $con = mysqli_connect('localhost','root','','facebookclone');

    $phoneoremail = $_POST['phoneoremail'];
   

    $check_data = mysqli_query($con,"DELETE FROM  userdata WHERE phoneoremail = '$password' WHERE '$password'");
    
    if($check > 0){
        header("Location:http://localhost/facebookclone/index.html");
    }
?>