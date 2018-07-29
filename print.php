<?php
    // printf(); it print formatted string
    // sprintf(); // it returns formated string
    // sscanf(string string,string formatted, variable list); // parse a string from formatted string, reverse of sprintf
    // if variable passed to the function it return how many data are formed
    //    other wise it return formatted string
    /*
        specifier may be
        b - print binary output of integer value
        c - print ASCII value of integer from 0-255
        d - print integer
        e - print scientific notation
        u - print unsigned
        f - print float
        F - print float
        o - print octal
        s - print string
        X - print upper case Hexadecimal
        x - prit lower case Hexadecimal
    */
    $name = "moon";
    $age = 23;
    $email = "ahmad.sk98@gmail.com";
    print "\$name = \"$name\";\n";
    print "\$age = 23;\n";
    print "\$email = \"ahmad.sk98@gmail.com\";\n";
    print "-------------------------\n";
    print "printing all info together by printf()\n";
    $printfoutput = print "printf(\"Name : %s,Age : %d,Email : %s\",\$name,\$age,\$email);\n";
    printf("\tName : %s,Age : %d,Email : %s\n",$name,$age,$email);
    print "Return data from printf method is : $printfoutput\n";


    print "sscanf(stsring, formatted, output);\n";
    $str = sscanf("20-10","%d-%d"); // it return string
    print_r($str);
    $howmany = sscanf("20-10-1990","%d-%d-%d",$day,$month,$year); // it return int, how many data are formed
    print "month : $month, day : $day, year : $year\n";
    print "total $howmany data are formed\n";

?>
