<html>
    <head>
        <title>
         ARMSTRONG 
        </title>
    </head>
    <body>
    <?php
     
    $n = 31;
    $sum = 0;
    $i = $n;
    
    while($i!=0){
        $x = $i%10;
        $sum = $sum+($x*$x*$x);
        $i = $i/10;
    }
    if($n == $sum){
        echo "$n is an armstrong number. ";
    }
    else{
        echo "$n is NOT an armstrong number. ";
    }
    
    ?>

    </body>
</html>
