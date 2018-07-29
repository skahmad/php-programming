<?php
    class person {
        private $name = "";
        private $age = 0;
        private $email = "";
        private $phone = "";
        private $address = "";

        public function __construct($name, $age) {
            print "** calling person constructor with two value : $name,$age\n";
            $this->name = $name;
            $this->age = $age;
        }
        public function setInfo($email, $phone, $address) {
            print "** calling person->setInfo() method\n";
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;
        }
        public function getInfo() {
            print "** calling person->getInfo() method\n";
            return ("Name : ".$this->name."\nAge : ".$this->age."\nEmail : "
        .$this->email."\nPhone : ".$this->phone."\nAddress : ".$this->address."\n");
        }
    };
?>
