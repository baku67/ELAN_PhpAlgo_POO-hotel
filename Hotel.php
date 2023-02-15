<?php

    class Hotel {

        // Properties
        protected string $_name;
        protected int $_nbrRooms;
        protected string $_address;

        // Constructor
        public function __construct(string $name, int $nbrRooms, string $address) {
            $this->_name = $name;
            $this->_nbrRooms = $nbrRooms;
            $this->_address = $address;
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

        public function __toString() {
            return "Hotel \"" . $this->getName() . "\": <br>Nombres de chambres: " . $this->getNbrRooms() . "<br>Adresse: " . $this->_address;
        }

    }