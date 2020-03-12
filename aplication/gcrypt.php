<?php

    namespace aplication;

    class gcrypt{

        private $pass;

        public function __construct($pass){
            $this->pass = $pass;
        }

        public function encript($pass){
            $array_hash_lowerCase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            

            return base64_encode($pass);
        }

        public function decript($pass){
            return base64_decode($pass);
        }
    }