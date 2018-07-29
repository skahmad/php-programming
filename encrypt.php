<?php
    // crypt(string, salt)
    // md5()
    // sha1()
    $username = "moon";
    $password = "It is me - light";
    $passwordEncr =crypt($password,256);
    print "\n";
    print "user name : $username\n";
    print "password : $passwordEncr\n";
?>
