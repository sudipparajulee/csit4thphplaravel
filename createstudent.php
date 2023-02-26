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
        <h2 class="text-center font-bold text-3xl my-2">Add Student</h2>

        <form action="storestudent.php" method="POST" class="w-6/12 mx-auto bg-gray-300 text-center p-4">
            <input type="text" name="name" class="w-6/12 p-2 m-2 rounded outline-0" placeholder="Full Name">
            <input type="text" name="address" class="w-6/12 p-2 m-2 rounded outline-0" placeholder="Address">
            <input type="text" name="phone" class="w-6/12 p-2 m-2 rounded outline-0" placeholder="Phone">
            <input type="text" name="email" class="w-6/12 p-2 m-2 rounded outline-0" placeholder="Email">
            <select name="faculty" id="" class="w-6/12 p-2 m-2 rounded outline-0">
                <option value="CSIT">CSIT</option>
                <option value="BCA">BCA</option>
                <option value="BIM">BIM</option>
            </select>

            <input type="submit" name="submit" class="block mx-auto bg-blue-500 text-white w-4/12 p-2 m-2 rounded outline-0">
        </form>
    </div>

</body>
</html>