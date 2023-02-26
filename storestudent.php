<?php
$name =  $_POST['name'];
$phone =  $_POST['phone'];
$address =  $_POST['address'];
$email =  $_POST['email'];
$faculty =  $_POST['faculty'];

//connection
include 'dbopen.php';

//query
$qry = "INSERT INTO students(name,phone,address,email,faculty) VALUES('$name','$phone','$address','$email','$faculty')";

//execute query
if(mysqli_query($con,$qry))
{
    echo "<script>alert('Data inserted Successfully'); 
        window.location.href = 'students.php';
    </script>";
}
else
{
    echo "Data not inserted";
}

//close connection
include 'dbclose.php';
?>