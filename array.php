<?php 


$num =array(1,2,5,7,3,4,5,6,7,8,7,8);
for($i=0; $i< count($num); $i++ ){
    
    echo $num[$i];
}

$name =array("Taha","Azam");
foreach($name as $value){
    echo $value;

}

//assosiative array

$salary = array("taha"=>32000, "sameer"=> 35000);
echo "<br>Salary of taha is ". $salary[taha]. " while the salary of sameer is ". $salary[sameer];

//Multidimensional Array

$mark=  array(
    "Taha" => array(
        "physics"=>26
    ),
    "Azam"=> array(
        "physics"=> 36
    )

    );

foreach($mark as $value=> $keys){
    // echo "$keys=>$value";
    echo "$value=>$keys=>$var";
}
?>



<html>
</html>