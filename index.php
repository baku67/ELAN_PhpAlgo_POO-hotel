<?php

    require "Hotel.php";
    require "Room.php";
    require "Booking.php";
    require "Customer.php";
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";

    echo "<h1>Instanciations:</h1><br>";

    $customer1 = new Customer("Guénolé", "De Montaigu");
    $customer2 = new Customer("Caroline", "Martinique");
    echo $customer1 . "<br>";
    echo $customer2. "<br>";

    $hotel1 = new Hotel("Hilton **** Strasbourg", 30, "10 route de la gare 67000 Strasbourg");
    echo $hotel1 . "<br>";

    $room1 = new Room($hotel1, 129.99, true, 4);
    $room2 = new Room($hotel1, 89.99, false, 2);
    echo $room1 . "<br>";
    echo $room2 . "<br>";

    echo "-----------------------------------------------------------------------------<br><h1>Tests:</h1><br>";

    echo $hotel1->printRoomDispoList();

    echo "<br><br>";
    $resa1 = new Booking($hotel1, $room1, $customer1, date('Y-m-d', strtotime("2023-05-02")), date('Y-m-d', strtotime("2023-06-03")));
    $resa2 = new Booking($hotel1, $room2, $customer2, date('Y-m-d', strtotime("2023-07-22")), date('Y-m-d', strtotime("2023-07-26")));
    // echo $resa1. "<br>";
    // echo $resa2. "<br>";

    echo "<br><br>";
    echo $hotel1->printRoomDispoList();


    echo "<br><br>";
    echo $hotel1->printBookingList();

?>