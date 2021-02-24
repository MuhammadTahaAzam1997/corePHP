<?php 

function markarr($arr){
    $sum=0;
    $i=1;
    foreach($arr as $value){
    $sum += $value;
    $i++; // increment when the fuction run everytime
    }

    return $sum/$i; //sum / by i to get result
}

$student = [10,30,45,52,79];
$avg= markarr($student);
echo $avg;


?>