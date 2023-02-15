<?php

    class Hotel {

        // Properties
        protected string $_name;
        protected int $_nbrRooms;
        protected string $_address;
        protected array $_roomList;
        protected array $_bookingList;

        // Constructor
        public function __construct(string $name, int $nbrRooms, string $address) {
            $this->_name = $name;
            $this->_nbrRooms = $nbrRooms;
            $this->_address = $address;
            $this->_roomList = [];
            $this->_bookingList = [];
        }

        public function getBookingList(): array {
            return $this->_bookingList;
        }
        public function printBookingList(): string {
            $result = "Réservations de l'hôtel \"" . $this->getName() . "\":\n";
            foreach($this->_bookingList as $booking) {
                $result .= "<br>" . $booking . "<br>";
            }
            return $result;
        }

        public function getRoomList(): array {
            return $this->_roomList;
        }
        public function setRoomList(array $roomList) {
            $this->_roomList = $roomList;
        }

        public function getName(): string {
            return $this->_name;
        }
        public function setName(string $name) {
            $this->_name = $name;
        }

        public function getAddress(): string {
            return $this->_address;
        }
        public function setAddress(string $address) {
            $this->_address = $address;
        }

        public function getNbrRooms(): int {
            return $this->_nbrRooms;
        }
        public function setNbrRooms(int $nbrRooms) {
            $this->_nbrRooms = $nbrRooms;
        }

        
        // Methods

        public function addBooking(Booking $booking) {
            $this->_bookingList[] = $booking;
        }

        public function addRoom( Room $room ) {
            $this->_roomList[] = $room;
        }

        public function printRoomList():string {
            $result = "Liste des chambres de l'Hotel " . $this->getName(). "\n<br>";
            foreach($this->_roomList as $room) {
                $result .= " - " . $room . "\n";
            }
            return $result;
        }
        public function printRoomDispoList():string {
            $result = "Liste des chambres *disponibles* de l'Hotel " . $this->getName(). "\n<br>";
            $compteur = 0;
            foreach($this->_roomList as $room) {
                if(!$room->getStatus()) {
                    $result .= " - " . $room . "\n";
                    $compteur += 1;
                }
            }
            if ($compteur == 0) {
                $result .= "<span style='color:red;font-weight:bold;'>Aucune chambre n'est disponible!</span>\n";
                return $result;
            }
            else {
                return $result;
            }
        }

        public function __toString():string {
            return "<span class='title'>Hotel \"" . $this->getName() . "\":</span> <br>Nombres de chambres: " . $this->getNbrRooms() . "<br>Adresse: " . $this->_address . "<br>";
        }

    }