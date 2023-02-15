<?php

    class Hotel {

        protected int $_nbrRooms;
        protected string $_address;


        public function __construct(int $nbrRooms, string $address) {
            $this->_nbrRooms = $nbrRooms;
            $this->_address = $address;
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
    }