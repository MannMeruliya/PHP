<?php

    include('config/config.php');

    $con = new Connect();

    $con->connect();

    $res = $con->getdata();
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

        <table class="table table-striped table-hover">

    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php while($rec = mysqli_fetch_assoc($res)){?>
        <tr>
        <th scope="row"><?php echo $rec['id'];?></th>
        <td><?php echo $rec['name'];?></td>
        <td><?php echo $rec['age'];?></td>
        <td><?php echo $rec['course'];?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </div> 
</body>
</html>