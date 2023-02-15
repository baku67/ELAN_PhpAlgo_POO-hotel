<?php

    class Booking {

        // Correction: On obtient l'hotel en passant pas la chambre (chaînage)
        // private Hotel $_hotel;
        private Room $_room;
        private Customer $_customer;
        private string $_dateFrom;
        private string $_dateTo;

        public function __construct(Room $room, Customer $customer, string $dateFrom, string $dateTo) {
            $this->_room = $room;
            $this->_customer = $customer;
            $this->_dateFrom = $dateFrom;
            $this->_dateTo = $dateTo;

            $this->_customer->addBooking($this);
            // On chope l'hotel depuis la room:
            $this->_room->getHotel()->addBooking($this);
            $this->_room->reserve();
        }

        public function getDateFrom(): string {
            return $this->_dateFrom;
        }
        public function getDateTo(): string {
            return $this->_dateTo;
        }

        public function getRoom(): Room {
            return $this->_room;
        }
        public function getCustomer(): Customer {
            return $this->_customer;
        }

        public function setRoom(Room $room) {
            $this->_room = $room;
        }
        public function setCustomer(Customer $customer) {
            $this->_customer = $customer;
        }


        public function __toString():string {
            return "Réservation du customer \"" . $this->_customer->getFirstName() . " " . $this->_customer->getLastName() . ": " . $this->_room->getHotel(). ", chambre:<br> " . $this->_room  . "Du " . $this->getDateFrom() . " au " . $this->getDateTo() . "<br><br>";
        }
        // Lors d'un booking, l'ajouter a la liste bookings du customer
    }

?>