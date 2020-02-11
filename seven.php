<html>
    <head>
        <title>
         Fibonacci
        </title>
    </head>
    <body>
    <?php
    $n = 14;
    function fibo($n){
        if($n == 0)
        return 0;
        else if($n ==1)
        return 1;
        else
        return(fibo($n-1)+fibo($n-2));
    }
    for($counte=1;$counte<=$n;$counte++){
        echo fibo($counte);
    }
    ?>

    </body>
</html>
