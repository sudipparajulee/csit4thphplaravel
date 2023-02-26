<?php
include 'dbopen.php';

$qry = "INSERT INTO students(name,phone,address,email,faculty) VALUES ('Ram Prasad','98989898989','Himalaya','ram@rrrr.com','CSIT')";

if(mysqli_query($con,$qry))
{
    echo "Data inserted successfully";
}
else
{
    echo "Data couldn't be inserted";
}

include 'dbclose.php';

?>