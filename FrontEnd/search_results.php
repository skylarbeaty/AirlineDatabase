<html>
<head>
    <link rel="stylesheet" href="main.css"> 
    <!-- fonts: montserrat, alegreya --> <link href="https://fonts.googleapis.com/css?family=Alegreya|Montserrat|Indie+Flower" rel="stylesheet">
    <!-- bootstrap --> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="emuIcon.png">
    <title>Emu Air</title>
</head>
<body>
    <!-- formatting -->
    <div class = "header row">
        <div class="col-lg-3 col-sm-0"></div>
        <div class="col-lg-6">
            <div class="row" style="padding-left: 15px;">
            <img src = "emu_icon.png" style = "width: 80px; height: 80px;">
                <div style="display: inline-block; padding-left: 10px;">
                    <h1>Emu Air<br/></h1>
                    <p style="padding-left: 5px;">what would an emu do</p>
                </div>
            </div>
            <div class="table" >
                <ul>
                    <li><a href="search.html"><p>Search</p></a></li>
                    <li><a href="management.html"><p>Management</p></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-0"></div>
    </div>
    <div class = "row" style="padding-top: 20px;">
        <div class="col-lg-3 col-sm-0"></div>
        <div class="col-lg-6">
            <!-- php code -->
            <?php

            include_once 'connection.php';

            $departure_city = $_POST['departure_city'];
            $destination_city = $_POST['destination_city'];
            $date = $_POST['departure_date'];

            $sql = "SELECT * FROM flight WHERE departure_city = '$departure_city' OR destination_city = '$destination_city' OR departure_date= '$date'";
            $result = $conn->query($sql); 


            if ($result && $result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Flight " . $row["flight_no"] . " " . $row["departure_city"];
                    echo " to " . $row["destination_city"].  "<br>";
                    echo "on " . $row["departure_date"] . " at " . $row["departure_time"].  "<br>";
                    echo "arriving on " . $row["arrival_date"] . " at " . $row["arrival_time"].  "<br>";
                    echo "Flight Length " . $row["flight_length"].  "<br>";
                    echo "Available Seats " . $row["empty_seats"].  "<br>";
                    echo "<br>";
                }
            } else {
                echo "No results found";
            }
            
            ?>
        </div>
        <div class="col-lg-3 col-sm-0"></div>

</body>
</html>