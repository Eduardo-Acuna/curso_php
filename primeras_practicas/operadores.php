<?php 


    $a = 8;
    $b = 3;

    echo "<h3>Operaciones Aritmeticos <h3>";
    echo "las valores de a=$a y b=$b";
    echo "<br>La suma:              $a + $b = ".($a+$b);
    echo "<br>La resta:             $a - $b = ".($a-$b);
    echo "<br>La division:          $a / $b = ".($a/$b);
    echo "<br>La multiplicacion:    $a * $b = ".($a*$b);
    echo "<br>El exponente de:      $a ** $b = ".($a*$b);
    echo "<br>El modulo:            $a % $b = ".($a%$b);
?>



<?php
    $x=8;
    $y=3;

    echo "<h3>Operaciones de Comparacion<h3>";
    echo "las valores de x=$x y y=$y. VACIO ES FALSE, 1 ES TRUE" ;

    echo "<br>¿ x es igual a y?              $x == $y:  ".($x==$y);
    echo "<br>¿ x es distinto a y?           $x != $y:  ".($x!=$y);
    echo "<br>¿ x es menor a y?              $x < $y: ".($x<$y);
    echo "<br>¿ x es mayor a y?              $x > $y:  ".($x>$y);
    echo "<br>¿ x es menor o igual a y?      $x <= $y:  ".($x<=$y);
    echo "<br>¿ x es mayor o igual a y?      $x >= $y:  ".($x>=$y);
?>  





<?php
    echo "<h3>Operadores Logicos: Y,O, Negación:<h3>";
    echo "A es igual a B y X es mayor a Y:    $a == $b && $x > $y : ".($a==$b && $x>$y);
    echo "<br>A es igual a B o X es igual a Y:    $a == $b || $x == $y : ".($a==$b || $x==$y);
    echo "<br>Negar (B es igual a X)  !($b == $x) : ". !($b == $x);




?>