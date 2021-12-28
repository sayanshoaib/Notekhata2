<?php 
    class UserService {
        
        public $name;
        public $email;
        public $institute;
        public $password;

        public function __construct($email, $password) {
            $this->email = $email;
            $this->password = $password;
        }

        public function login_info($email, $password) {
            $this->email = $email;
            $this->password = $password;
        }

        public function get_name() {
            return $this->name;
        }

        public function get_email() {
            return $this->email;
        }

        public function get_institute() {
            return $this->institute;
        }

        public function get_password() {
            return $this->password;
        }

        public function user_info() {
            echo "Username: " . $this->name . "<br>";
            echo "Email: " . $this->email . "<br>";
            echo "Institute: " . $this->institute . "<br>";
            echo "Password: " . $this->password . "<br>";
        }
    }
?>