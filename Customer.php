<?php

    class Customer {

        protected string $_firstName;
        protected string $_lastName;
        protected array $_booking;

        public function __construct(string $firstName, string $lastName) {
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_booking = [];
        }

        public function getFirstName(): string {
            return $this->_firstName;
        }
        public function getLastName(): string {
            return $this->_lastName;
        }
        public function getBooking(): array {
            return $this->_booking;
        }

        public function setFirstName(string $firstName) {
            $this->_firstName = $firstName;
        }
        public function setLastName(string $lastName) {
            $this->_lastName = $lastName;
        }
        public function addBooking(Booking $booking) {
            $this->_booking[] = $booking;
            echo "Nouvelle réservation pour " . $booking->getCustomer()->getFirstName(). " " .$booking->getCustomer()->getLastName(). "<br>Hotel \"" . $booking->getHotel()->getName(). "\" <br>Chambre:<br>". $booking->getRoom() . "<br>";

        }


        public function printBookings() {
            foreach ($this->_booking as $booking) {
                echo $booking->toString(). PHP_EOL;
            }
        }

        public function __toString() {
            return "<span class='title'>Client:</span> " . $this->_firstName.' '. $this->_lastName . "<br>";
        }

    }