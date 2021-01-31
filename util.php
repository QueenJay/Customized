<?php

function grade($score){
    $grades = "" ; 
    $remark = "" ;
    if ($score >79){
        $grades = "A";
        $remark = "Excellent" ;

    }elseif($score >69){
        $grades = "B";
        $remark = "Very Good" ;
    }elseif($score >59){
        $grades = "C";
        $remark = "Good" ;
    }elseif($score >49){
        $grades = "D";
        $remark = "Fair" ;
    }elseif($score >39){
        $grades = "E";
        $remark = "Poor" ;
    }else{
        $grades = "F";
        $remark = "Fail" ;
    }
    return array($grades, $remark);
}

?>