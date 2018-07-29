<?php
    $str = "Apple World";
    print "main string : $str\n";
    function reverse_str($str) {
        $len = strlen($str);
        if($len<2)
            return ;
        $c = $str[0];
        $end = $len-1;
        for($i = 0; $i<$end; $i++,$end--) {
            $c = $str[$i];
            $str[$i] = $str[$end];
            $str[$end] = $c;
        }
        return $str;
    }
    print "Reverse string : ".reverse_str($str);

?>
