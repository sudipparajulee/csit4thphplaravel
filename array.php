<?php
//indexed array
$myarr = array("BCA","CSIT","BIM");

//displaying indexed array
for($i=0; $i<count($myarr);$i++){
    echo "$myarr[$i] <br>";
}

foreach($myarr as $element)
{
    echo "<br>";
    echo $element;
}



//associative array
$myarray = array("CSIT" => 40,"BCA" => 36,"BIM" => 24);

foreach($myarray as $k=>$v){
    echo "<br>";
    echo "Faculty $k has $v students";
}



?>