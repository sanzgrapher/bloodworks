<?php
// echo $hostname;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="<?= HOSTNAME ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= HOSTNAME ?>assets/js/app.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



</head>

<body>


    <nav class="bb-navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="brand d-inline-block">
            <a href="<?= HOSTNAME ?>"> <label class="logo">BLOODWORKS</label></a>

        </div>
        <ul>
            <li>
                <a href="<?= HOSTNAME ?>">HOME</a>
            </li>
            <li>
                <a href="<?= HOSTNAME ?>donorlist">DONORS</a>
            </li>
            <li>
                <a href="<?= HOSTNAME ?>bloodbanks">BLOODBANK</a>
            </li>
            <li>
                <a href="<?= HOSTNAME ?>events">EVENTS</a>
            </li>
            <li class="nav-item">
                <?php $checkIflLoggedIn = checkIflLoggedIn();
                if ($checkIflLoggedIn == false) { ?>
                    <a href="<?= HOSTNAME ?>login" class="btn rounded btn-danger">LOGIN</a>
                <?php } else { ?>
                    <a href="<?= HOSTNAME ?><?= $checkIflLoggedIn ?>" class="btn rounded btn-success">DASH</a>
                <?php } ?>
            </li>
        </ul>

    </nav>