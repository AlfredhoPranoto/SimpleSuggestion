<?php

//Array with names
$char[] = "Jingliu";
$char[] = "Jingyuan";
$char[] = "Topaz";
$char[] = "Sampo";
$char[] = "Seele";
$char[] = "Bronya";
$char[] = "Lynx";
$char[] = "Natasha";
$char[] = "LuoCha";
$char[] = "Ruan Mei";
$char[] = "Serval";
$char[] = "Himeko";
$char[] = "Welt";
$char[] = "Danheng";
$char[] = "Blade";
$char[] = "Kafka";
$char[] = "Asta";
$char[] = "Pela";
$char[] = "Argenti";
$char[] = "Acheron";
$char[] = "Arlan";
$char[] = "Clara";
$char[] = "Bailu";
$char[] = "Fu Xuan";
$char[] = "Herta";
$char[] = "Hook";
$char[] = "Gepard";

// get q parameter from URL
$q = $_REQUEST["q"];
$hint = "";

// lookup all hints from array if $q is different from ""
if($q !== ""){
    $q = strtolower($q);
    $length = strlen($q);
    foreach($char as $name){
        if(stristr($q, substr($name, 0, $length))){
            if($hint === ""){
                $hint = $name;
            }else{
                $hint .= ", $name";
            }
        }
    }
}
?>

<?php
echo $hint === "" ? "no suggestion" : $hint;
?>

