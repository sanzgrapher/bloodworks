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


    <link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



</head>

<body> 
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">

                <span class="ml-3 font-weight-bold">BRAND</apan>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav mr-auto pl-lg-4">
                    <li class="nav-item px-lg-2 active">
                        <a class="nav-link" href="<?= HOSTNAME ?>"> Home</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>bloodbanks">bloodbanks</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>donorlist"> Donor List</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>dash"> dash</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>dash/edit"> edit</a>
                    </li>

                    <li class="nav-item px-lg-2 dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>Dropdown
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            
                        </div>
                    </li>

                    <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <li class="nav-item">
                        <button type="button" class="btn rounded btn-danger">Login</button>

                    </li>
                </ul>

            </div>
        </div>
    </nav>