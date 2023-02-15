<?php

    class Hotel {

        // Properties
        protected string $_name;
        protected int $_nbrRooms;
        protected string $_address;
        protected array $_roomList;

        // Constructor
        public function __construct(string $name, int $nbrRooms, string $address) {
            $this->_name = $name;
            $this->_nbrRooms = $nbrRooms;
            $this->_address = $address;
            $this->_roomList = [];
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

        public function addRoom( Room $room ) {
            $this->_roomList[] = $room;
        }

        public function printRoomList() {
            echo "Liste des chambres de l'Hotel " . $this->getName(). "\n<br>";
            foreach($this->_roomList as $room) {
                echo " - " . $room . "\n";
            }
        }
        public function printRoomDispoList() {
            echo "Liste des chambres *disponibles* de l'Hotel " . $this->getName(). "\n<br>";
            foreach($this->_roomList as $room) {
                if(!$room->getStatus()) {
                    echo " - " . $room . "\n";
                }
            }
        }

        public function __toString() {
            return "<span class='hotelName'>Hotel \"" . $this->getName() . "\":</span> <br>Nombres de chambres: " . $this->getNbrRooms() . "<br>Adresse: " . $this->_address . "<br>";
        }

    }