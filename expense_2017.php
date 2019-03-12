<?php 
    header('Content-Type: application/json');

    //database
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'UGC');

    //get connection
    $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(!$mysqli){
      die("Connection failed: " . $mysqli->error);
    }

    //query to get data from the table
    $query = sprintf("SELECT * FROM `Expense_2017`  
                ORDER BY `Expense_2017`.`Uni_name`  ASC");

    //execute query
    $result = $mysqli->query($query);

    //loop through the returned data
    $data = array();
    foreach ($result as $row) {
      $data[] = $row;
    }

    //free memory associated with result
    $result->close();

    //close connection
    $mysqli->close();

    //now print the data
    print json_encode($data);
?>