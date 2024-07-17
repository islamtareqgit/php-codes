<?php

/**function currencyConverter($amount, $type){


// calculate rate

$rate  = null;

switch($type){

case "Dollar":
$rate = 117;
break;

case "Pound":
    $rate = 152;
    break;

    case "Euro":
        $rate = 128;
        break;

        default:
        $rate = 117; 


}

$bdt = $amount * $rate;

 return "{$amount} {$type} = {$bdt} BDT";
 
  
}**/



?>