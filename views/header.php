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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



</head>

<body>


    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">BLOODWORKS</label>
        <ul>
            <li>
                <a href="<?= HOSTNAME ?>" >HOME</a>
            </li>
            <li>
                <a href="<?= HOSTNAME ?>donorlist">DONATE</a>
            </li>
            <li>
                <a href="<?= HOSTNAME ?>bloodbanks">BLOODBANK</a>
            </li>
            <li>
                <a href="<?= HOSTNAME ?>events">EVENTS</a>
            </li>
            <li class="nav-item">
                <?php $checkIflLoggedIn = checkIflLoggedIn(); if($checkIflLoggedIn == false) {?>
                <a href="<?= HOSTNAME ?>/login" class="btn rounded btn-danger">LOGIN</a>
                <?php }else{ ?>
                <a href="<?= HOSTNAME ?><?= $checkIflLoggedIn ?>" class="btn rounded btn-success">DASH</a>
                <?php } ?>
            </li>
        </ul>

    </nav>
    <!-- <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
        <div class="container"> 
            <a class="navbar-brand d-flex align-items-center" href="#">

                <span class="ml-3 font-weight-bold "><span class="">Blood</span>Works</apan>
            </a> 

            <div class="topnav" id="myTopnav">
            <div class="top">
            <div class="navi">
            <ul class="navbar-nav mr-auto pl-lg-4 menu-nav">
                <a href="<?= HOSTNAME ?>"><button  onclick="openTab(event, 'Home')"id="defaultOpen">HOME</button></a>
                <a href="<?= HOSTNAME ?>donorlist"><button  onclick="openTab(event, 'DonorList')">DONOR LIST</button></a>
                
                <a href="<?= HOSTNAME ?>bloodbanks"><button  onclick="openTab(event,'BloodBank')">BLOOD BANKS</button></a>
                <a href="<?= HOSTNAME ?>events"><button  onclick="openTab(event, 'Events')" >EVENTS</button></a>
               
            </ul>
            <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                <li class="nav-item">
                    <?php $checkIflLoggedIn = checkIflLoggedIn(); if($checkIflLoggedIn == false) {?>
                    <a href="<?= HOSTNAME ?>/login" class="btn rounded btn-danger">LOGIN</a>
                    <?php }else{ ?>
                    <a href="<?= HOSTNAME ?><?= $checkIflLoggedIn ?>" class="btn rounded btn-success">DASH</a>
                    <?php } ?>
                </li>
            </ul>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            </div>
            </div>

            <div class="topnav" id="myTopnav">
             <div class="tab">
            <div class="collapse navbar-collapse" id="navbar4">

                <ul class="navbar-nav mr-auto pl-lg-4">
                    <li class="nav-item px-lg-2 active">
                        <a class="nav-link" href="<?= HOSTNAME ?>"> 
                        <button class="tablinks" onclick="openTab(event, 'Home')">HOME</button>
                        </a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>donorlist"> 
                        <button class="tablinks" onclick="openTab(event, 'DonorList')">DONOR LIST</button>
                        </a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>bloodbanks"> 
                        <button class="tablinks" onclick="openTab(event, 'BloodBank')">BLOOD BANKS</button>
                        </a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link" href="<?= HOSTNAME ?>events">
                        <button class="tablinks" onclick="openTab(event, 'Events')">EVENTS</button>
                        </a>
                    </li>
                    <li class="nav-item px-lg-2">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                    </li>
                  </a>


                   </ul>

                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <li class="nav-item">
                        <?php $checkIflLoggedIn = checkIflLoggedIn(); if($checkIflLoggedIn == false) {?>
                        <a href="<?= HOSTNAME ?>/login" class="btn rounded btn-danger">LOGIN</a>
                    <?php }else{ ?>
                    <a href="<?= HOSTNAME ?><?= $checkIflLoggedIn ?>" class="btn rounded btn-success">DASH</a>
                    <?php } ?>


                    </li>
                </ul>

            </div>
            </div>
                </div> -->
        <!-- </div>
    </nav> -->
 

   
