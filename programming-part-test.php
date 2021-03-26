<?php
//first exercise


function contain($massive,$element){
    for($i=0;$i<count($massive);$i++) {
        if ($massive[$i] == $element) {
            echo $massive[$i] . "Yes" . '<br>';
        } else {
            echo $massive[$i] . "No" . '<br>';
        }
    }
}



contain([23,2,9,4,13],2);


//second exercise



function test2($sort){
    $temp=0;
    for($i=0;$i<count($sort);$i++){
        for($j=0;$j<count($sort)-1;$j++){
            if($sort[$j]>$sort[$j+1]){
                $temp=$sort[$j];
                $sort[$j]=$sort[$j+1];
                $sort[$j+1]=$temp;
            }
        }
    }
    return $sort;
}
$res1=test2(['1','2','9','6']);
$res2=test2(['13','6','7','3']);
$new_array=array_merge($res1,$res2);
print_r(test2($new_array));
