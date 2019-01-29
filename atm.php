<?php
$input = $_POST["atm"];
$revstr = strrev($input);
$length = strlen($revstr);
$msg = '';
//echo $revstr ."<br>";
$arr = [];
$arr2 = [];
#Even positions multipled by two
for ($i=1; $i < $length; $i=$i+2) {
    $product = $revstr[$i];
    $multiplied = $product*2;
    array_push($arr, $multiplied);
}
$arrtostr = implode($arr);
//echo $arrtostr;
$strarr = str_split($arrtostr);
$sum1 = array_sum($strarr);
//echo $sum1;
/* */
if ($sum1 !== "") {
for ($i=0; $i < $length; $i=$i+2) {
    $product1 = $revstr[$i];
    array_push($arr2, $product1);
}
//print_r($arr2);
$sum2 = array_sum($arr2);
//echo $sum2;
} else {
    $msg .= "Empty values not accepted";
}
$total = $sum1+$sum2;
$checktotal = $total;
$aec = array("34","37");
$mc = array("22","51","52","53","54","55");
$vc = array("40","41","42","43","44","45","46","47","46","49");

if ($checktotal == 0) {
    $msg .= "<div class='error'>You did not insert any value</div>";
} elseif ($checktotal > 0) {
         if ($checktotal % 2 == 0) {
                $qq = substr($input, 0, 2);
                if(in_array($qq, $aec) && $length == 15){
                $msg .= "<div class='success'>Your card is American Express!</div>";
            } elseif (in_array($qq, $mc) && $length == 16){
                $msg .= "<div class='success'>Your card is Master!</div>";
            } elseif (in_array($qq, $vc) && $length == 13 || in_array($qq, $vc) && $length == 16){
                $msg .= "<div class='success'>Your card is Visa Card!</div>";
            } else {
                $msg .= "<div class='error'>Unknown Card type</div>";
            }
        } else {
            $msg .= "<div class='error'>Invalid ATM digits</div>";
        }
} else {
    $msg .= "<div class='error'>You have not inserted any value to check for</div>";
}
echo $msg;
?>