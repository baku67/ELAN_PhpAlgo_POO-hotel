<?php 

    class Room {

        protected Hotel $_hotel;
        protected bool $_reserved;
        protected float $_price;
        protected bool $_wifi;
        protected int $_nbrBeds;

        public function __construct(Hotel $hotel, float $price, bool $wifi, int $nbrBeds) {
            $this->_hotel = $hotel;
            $this->_reserved = false;
            $this->_price = $price;
            $this->_wifi = $wifi;
            $this->_nbrBeds = $nbrBeds;

            $this->_hotel->addRoom($this);
        }

        public function getHotel(): Hotel {
            return $this->_hotel;
        }
        public function getPrice(): float {
            return $this->_price;
        }
        public function getReserved(): bool {
            return $this->_reserved;
        }
        public function getWifi(): bool {
            return $this->_wifi;
        }
        public function printWifi(): string {
            if($this->getWifi()) {
                return "WIFI";
            }
            else {
                return "No WIFI";
            }
        }
        public function getNbrBeds(): int {
            return $this->_nbrBeds;
        }

        public function setHotel(Hotel $hotel) {
            $this->_hotel = $hotel;
        }
        public function setWifi(bool $wifi) {
            $this->_wifi = $wifi;
        }
        public function setPrice(float $price) {
            $this->_price = $price;
        }
        public function reserve() {
            $this->_reserved = true;
        }
        public function setNbrBeds(int $nbrBeds) {
            $this->_nbrBeds = $nbrBeds;
        }
        
        public function getStatus():bool {
            return $this->_reserved;
        }
        public function printStatus():string {
            if($this->getStatus()) {
                return "Reserved";
            }
            else {
                return "Not reserved";
            }
        }
        public function setStatus(bool $status) {
            $this->_reserved = $status;
        }


        public function __toString() {
            return "Description de la chambre: <br>Hotel: " . $this->_hotel->getName() . "<br>Wifi: ". $this->printWifi() . "<br>Price: " . $this->getPrice() . "<br>Nombre de lits: " . $this->getNbrBeds() ."<br>Status: " . $this->printStatus() . "<br>";

        }
    }

?>