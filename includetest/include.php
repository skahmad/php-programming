<?php
    print "include,include_once,require,require_once methods example\n";
    $flag = 5;
    if($flag) {
        include("person.php");
        print "** including person.php\n";
    }else{
        include("methods.php");
        print "** including methods.php\n";
    }
    $ahmad = new person("ahmad",23);
    print $ahmad->getInfo();

?>
