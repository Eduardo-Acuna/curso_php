<?php
    function sumar($x,$y){
        return $x+$y;
    }

    function restar($x,$y){
        return $x-$y;
    }

    function mult($x,$y){
        return $x*$y;
    }

    function div($x,$y){
        return $x/$y;
    }

    //VARIABLE LOCAL

    //isset funacion predefnida
    if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])){
        $num_1=$_GET["num1"];
        $num_2=$_GET["num2"];
        $operacion=$_GET["op"];

       if (!empty($num_1) && !empty($num_2) && !empty($operacion)){//empty: verifica si la varible esta vacia
        //if ($num_1!="" && $num_1!="" && $operacio!=""){
            
            if($operacion == "suma" ){
                $resl = sumar($num_1,$num_2);
            } else if($operacion == "resta" ){
                $resl = restar($num_1,$num_2);
            }else if($operacion == "multiplicacion" ){
                $resl = mult($num_1,$num_2);
            }else if($operacion == "division" ){
                $resl = div($num_1,$num_2);
            }

            echo "el resultado es: ".$resl;

        } else{
            echo "Esta vacio uno de los campos";
        }
    } else {
        echo "ERROR ";
    }

?>