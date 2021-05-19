<?php

session_start();

if(!isset($_SESSION['user'])) {
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-3">John Doe (Manager)</h1>

        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot upload file 
            </div>
        <?php endif ?>

        <?php if(file_exists('_actions/photos/profile.jpg')) :?>
            <img src="_actions/photos/profile.jpg" alt="Profile Photo" class="img-thumbnail mb-3"width="200">
        <?php endif ?>

        <form action="_actions/upload.php"method="post"enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file"name="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> john.doe@gmail.com 
            </li>
            <li class="list-group-item">
                <b>Phone:</b> (09) 122 455 677
            </li>
            <li class="list-group-item">
                <b>Address:</b> No. 341 , Side Street, East City.
            </li>
        </ul>
        <br>
        <button class="btn btn-secondary">
            <a href="_actions/logout.php">Logout</a>
        </button>
    </div>
</body>
</html>