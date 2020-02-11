<html>
    <head>
        <title>
         Prime.
        </title>
    </head>
    <body>
    <?php
    $n = 8;
    function prime($n){
        $i = 1;
        $i <= $n;
        $i++;
        if ($n%$i==0)
            echo"$n is NOT a prime number.";
        else
            echo"$n is a prime number.";    
    }
    prime($n);
    ?>

    </body>
</html>
