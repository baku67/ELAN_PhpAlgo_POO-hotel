<?php 

    class Room {

        protected bool $_reserved;
        protected float $_price;
        protected bool $_wifi;
        protected int $_nbrBeds;

        public function __construct() {
            $this->_reserved = false;
            $this->_price = 0;
            $this->_wifi = false;
            $this->_nbrBeds = 0;
        }

        public function isReserved() {

        }
    }

?>