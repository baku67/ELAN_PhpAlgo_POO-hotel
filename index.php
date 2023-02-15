<?php

    require "Hotel.php";
    require "Room.php";
    require "Booking.php";
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";


    $hotel1 = new Hotel("Hilton **** Strasbourg", 30, "10 route de la gare 67000 Strasbourg");
    echo $hotel1 . "<br>";

    $room1 = new Room($hotel1, 129.99, true, 4);
    $room2 = new Room($hotel1, 89.99, false, 2);
    echo $room1 . "<br>";
    echo $room2 . "<br>";

    echo "-----------------------------------------------------------------------------<br>";

    echo $hotel1->printRoomDispoList();

?>