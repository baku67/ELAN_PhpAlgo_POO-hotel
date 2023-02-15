<?php

    class Booking {

        private Hotel $_hotel;
        private Room $_room;
        private Customer $_customer;

        public function __construct(Hotel $hotel, Room $room, Customer $customer) {
            $this->_hotel = $hotel;
            $this->_room = $room;
            $this->_customer = $customer;

            $this->_customer->addBooking($this);
            $this->_hotel->addBooking($this);
            $this->_room->reserve();
        }

        public function getHotel(): Hotel {
            return $this->_hotel;
        }
        public function getRoom(): Room {
            return $this->_room;
        }
        public function getCustomer(): Customer {
            return $this->_customer;
        }

        public function setHotel(Hotel $hotel) {
            $this->_hotel = $hotel;
        }
        public function setRoom(Room $room) {
            $this->_room = $room;
        }
        public function setCustomer(Customer $customer) {
            $this->_customer = $customer;
        }


        public function __toString() {
            return "Réservation du customer \"" . $this->_customer->getFirstName() . " " . $this->_customer->getLastName() . ": " . $this->_hotel->getName(). ", chambre:<br> " . $this->_room;
        }
        // Lors d'un booking, l'ajouter a la liste bookings du customer
    }

?>