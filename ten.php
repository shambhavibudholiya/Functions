<html>
    <head>
        <title>
         SWAPPING TWO NUMBERS
        </title>
    </head>
    <body>
    <b><?php
    
    function swap($a,$b){
        $c = $a;
        $a =$b;
        $b = $c;
        print ($a. " " . $b);
    }
    swap(10,20);
    ?></b>

    </body>
</html>
