<?php
    /*
        methods signature
        ---------------------
        urlencode(string)
        urldecode(string)
    */
    print"Encoding script\n";
    print"----------------\n";

    $urlis = "Hello, there! How are you?";
    print "My Url is : $urlis\n";
    print "Encoding the above Url ...\n";
    $enurl = urlencode($urlis);
    print "Encoded Url is : $enurl\n";

    print "Decoding the above Encoded Url ...\n";
    print "Decoded Url is : ".urldecode($enurl)."\n";
?>
