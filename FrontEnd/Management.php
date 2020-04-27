<?php
    include_once 'connection.php';
?>
<html>
<head>
    <link rel="stylesheet" href="main.css"> 
    <!-- fonts: montserrat, alegreya --> <link href="https://fonts.googleapis.com/css?family=Alegreya|Montserrat|Indie+Flower" rel="stylesheet">
    <!-- bootstrap --> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="emuIcon.png">
    <title>Emu Air</title>
</head>
<body>
    <div class = "header row">
        <div class="col-lg-3 col-sm-0"></div>
        <div class="col-lg-6">
            <div class="row" style="padding-left: 15px;">
            <img src = "emuIcon.png" style = "width: 80px; height: 80px;">
                <div style="display: inline-block; padding-left: 10px;">
                    <h1>Emu Air<br/></h1>
                    <p style="padding-left: 5px;">what would an emu do</p>
                </div>
            </div>
            <div class="table" >
                <ul>
                    <li><a href="Search.html"><p>Search</p></a></li>
                    <li><a href="MyAccount.php"><p>My Account</p></a></li>
                    <li><a href="#"><p class="currentPage">Management</p></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-0"></div>
    </div>
</body>
</html>