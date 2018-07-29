<?php
    /*
    class className extends baseClassName {
        var $name;
        private var $age;
        function methods1() {}
        private function methods2() {}
    }
    by default member is public
    */
    class Person {
        private $name; // [ok private member]
        private $age; // [ok]
        //private var $member;  [wrong]
        // var $member;  [ok, it is public]

        //function Person() {} // constructor overloading not support in PHP
        function Person($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        function setName($aname) {
            $this->name = $aname;
        }
        function setAge($age) {
            $this->age = $age;
        }
        function showMe() {
            print "Name : ".$this->name.", age : ".$this->age."\n";
        }
        private function checking() {} // private method
    };

    $me = new Person("ahmad",23);
    print "calling showMe method ...\n";
    $me->showMe();
    print "calling setName method ..\n";
    $me->setName("akram");
    print "calling setAge method ...\n";
    $me->setAge(19);
    print "calling showMe methods ...\n";
    $me->showMe();
    print "we cannot access name member, it is private\n";
    //print "Name :".$me->name."\n";
    print "we cannot access checking(), it is private\n";
    //$me->checking();
?>
