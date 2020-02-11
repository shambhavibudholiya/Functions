<html>
    <head>
        <title>
         Factorial
        </title>
    </head>
    <body>
    <?php

    Function Factorial($num){
        $z=1;
        for($x=1;$x<=$num;$x++)
        {
            
            $z=$x*$z;
            
        }
        echo($z);
    }
    Factorial(6);
    ?>

    </body>
</html>
