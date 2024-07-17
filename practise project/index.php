<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//if(file_exists(__DIR__ .'/autoload.php')){
//include_once __DIR__.'/autoload.php';

//}

?>

<?php

function Convert_currency($amount, $type){
    
    if($type == "Dollar"){
    
     $bdt = $amount*117;

     echo "<h1>you have taka $bdt in your account converted from dollar</h1>";
    
    }else if($type == "Pound"){
    
        $bdt = $amount*152;
        echo "<h2>you have taka $bdt in your account converted from pound</h2>";

 
    
    }else if($type == "Euro"){
    
        $bdt = $amount*127;
        echo "<h2>you have taka $bdt in your account converted from euro</h2>";
    }else{
    
       echo "<h3>you have undefined amounts of money</h3>";
    }
    
    
    }

    echo Convert_currency(200, "Pound"). "<br>";
    echo Convert_currency(100, "Dollar"). "<br>";
    echo Convert_currency(300, "Euro"). "<br>";
   
    
    
    
    
    
    








?>
    
</body>
</html>