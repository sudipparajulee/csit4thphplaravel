<?php
include 'dbopen.php';
$qry = "SELECT * FROM students";
if(!$result = mysqli_query($con,$qry))
{
    die('Error on data read');
}

include 'dbclose.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-blue-600 text-white p-2 text-right">
        <a class="mx-2" href="">Home</a>
        <a class="mx-2" href="">About</a>
        <a class="mx-2" href="students.php">Students</a>
        <a class="mx-2" href="">Contact</a>
        <a class="mx-2" href="">Login</a>
    </nav>

    <div class="my-4">
        <h2 class="text-center font-bold text-3xl my-2">Our Students</h2>
        <div class="text-right mx-24 my-2">
        <a href="createstudent.php" class="bg-blue-600 text-white py-1 px-2 rounded-lg">Add Student</a>
        </div>
        <div class="grid grid-cols-3 gap-4 mx-24">
           <?php 
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <div class="bg-gray-200 p-4 rounded-lg shadow">
                <p>ID: <?php echo $row['id']; ?></p>
                <p>Name: <?php echo $row['name']; ?></p>
                <p>Phone: <?php echo $row['phone']; ?></p>
                <p>Address: <?php echo $row['address']; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <p>Faculty: <?php echo $row['faculty']; ?></p>
                <a href="editstudent.php?id=<?php echo $row['id']; ?>" class="bg-blue-600 text-white px-2 py-1 rounded">Edit</a>
                <a href="" class="bg-red-600 text-white px-2 py-1 rounded">Delete</a>
                </div>
            <?php
            }
           ?>
            

            
        </div>
    </div>
</body>
</html>