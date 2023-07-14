<?php 
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_books";
    //create the connection
    $con = mysqli_connect($servername, $username, $password, $database);
    // die if the connection was not successful
    if(!$con)
    {
        die("Sorry we failed to connect".mysqli_connect_error());
    }
    else
    {
        echo "<br/>Connection was successful.";
    }
    $sql = "CREATE TABLE `students_info` (`s_fname` VARCHAR(15) NOT NULL , `s_lname` VARCHAR(15) NOT NULL , `s_rollno` INT(8) NOT NULL , `s_branch` VARCHAR(6) NOT NULL );";
    $result = mysqli_query($con, $sql);
    //check table creation success
    if($result)
    {
        echo "The table has created successfully.<br/> ";
    }
    else
    {
        echo "The table has not created successfully because of the error!".mysqli_error($con);
    }
?>