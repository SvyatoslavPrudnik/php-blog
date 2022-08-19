<?php

require_once 'common/dbconnect.php';


$sql = "SELECT * FROM info_post";
$result = $conn->query($sql);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Blog</title>
</head>
<body>
    <style>
        .topnav {
            background-color: dodgerblue;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: royalblue;
            color: white;
        }

        .card {
            text-align: center;
            width: 40%;
            border: 1px solid;
            margin: 10px auto auto;
            box-shadow: 10px 5px 5px grey;
            position: relative;
        }

        .delete-btn {
            color: red;
            background-color: white;
            border: none;
            cursor: pointer;
            top: 0;
            right: 0;
            position: absolute;
        }

        .add-btn {
            float: right;
            padding: 14px 16px;
            cursor: pointer;
            color: white;
            border: none;
            background-color: dodgerblue;
        }

    </style>

    <div class="topnav">
        <a class="active" href="#blog">Blog</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <button class="add-btn">
            <span class="material-icons">
                add_circle
            </span>
        </button>
    </div>
    <?php

    foreach(mysqli_fetch_all($result) as $element) {

    ?>
    <div class='card'>
        <button class="delete-btn">X</button>
        <h2><?= $element[1] ?></h2>
        <h5><?= $element[2]?></h5>
        <p><?= $element[4] ?></p>
    </div>
    <?php
    }

    ?>
</body>
</html>