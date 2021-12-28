<?php 
    class user {
        public $name;
        public $email;
        public $institue;
        public $password;

        function __construct($name, $email, $institue, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->institue = $institue;
            $this->password = $password;
        }

        function get_name() {
            return $this->name;
        }

        function get_email() {
            return $this->email;
        }

        function get_institue() {
            return $this->institue;
        }

        function get_password() {
            return $this->password;
        }
    }
?>