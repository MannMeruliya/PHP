<?php

include('config/config.php');
$obj = new Connect();
$obj->connect();
$sbm = @$_REQUEST['sb'];

        if(isset($sbm)){

            $name = $_GET['name'];
            $age = $_GET['age'];
            $course = $_GET['course'];

            $obj->insert($name,$age,$course);

            header('Location : desboard.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     
        <div class="container">
                <form action="" method = "get" >

                <label for="name">Name : </label>
                <input type="text" name = "name"><br><br>

                <label for="age">Age :</label>
                <input type="number" age = "age"><br><br>

                <label for="course">Course :</label>
                <input type="text" Course = "course"><br><br>

                <input type="submit" value = "SUBMIT" name = "sb">
                </form>
        </div>
</body>
</html>
