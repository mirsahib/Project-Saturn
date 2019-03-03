<?php
    DEFINE('user_name','root');
    DEFINE('password','root');
    DEFINE('db_name','School');
    DEFINE('host','localhost');
    
    $db = @mysqli_connect(host,user_name,password,db_name)
    OR die('Could connect with database'.mysqli_connect_error());
?>