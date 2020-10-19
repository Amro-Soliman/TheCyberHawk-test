<?php

if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['productNr'] < 101 &&  $_GET['productNr'] != '' ) {
    $productNr = $_GET['productNr'];

   if($productNr % 15 == 0) {
    $data =  "<p>" .  "<img src='coating-damage.png'".  "alt='Girl in a jacket'" . "width='20px' height='15px'" . "margin-right='3px'" . "
    >".  "<img src='lightning-strike.jfif'".  "alt='Girl in a jacket'" . "width='20px' height='15px'" .  "height='15px'" ."
    >" . "Coating Damage and Lightning Strike     " . "</p>";
    echo $data;
    }elseif($productNr % 3 == 0){
        $data =  "<p>" . "<img src='coating-damage.png'" .   "width='20px' height='15px'" .  "height='15px'" ."
        >" . " Coating Damage     " . "</p>"; 
        echo $data;

    }elseif($productNr % 5 == 0){
        $data =  "<p>" . "<img src='lightning-strike.jfif'" .   "width='20px' height='15px'" .  "height='15px'" ."
        >" . " Lightning Strike   " . "</p>";
        echo $data;

      
        }elseif(!$productNr % 15 == 0  ){
            $data =   "<p>" . "<img src='correct.png'" .   "width='20px' height='15px'" .  "height='15px'" ."
        >" . " Product  number  $productNr  is NOT damaged   " . "</p>";
        echo $data;
    }

}else{
    $data = 'Please insert a number from 1 to 100';
    echo $data;


    

}



?>







