<?php error_reporting(-1);
//В массиве А(N) подсчитать количество элементов, встречающихся  более одного раза.  
$A = [1, -7, -4, 2, -7, 2, 3, 3, -199, 4, 1, 4, -20, 6, 6, 3, -4];


echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = count_rep_elem($A);
echo("В массиве А(N) {$a} элементов встречаются более одного раза");


function count_rep_elem($array){
    $countres = 0;
    $countern = 1; 
    $n = 0;
    for($i = 0; $i < count($array); $i++){
        $countern = 1; 
        for($n = 1;$n < count($array) - $i; $n++){
            if($array[$i] == $array[$i+$n]){
                $countern++;
                $array[$i+$n] = null;
                $l = 0;
                $res = [];
                for($m = 0; $m < count($array); $m++){
                    if($array[$m] == null){
                        continue;
                    }
                    $res[$l] = $array[$m];
                    $l++;
                }
                $array = $res;
            }
        }
        if($countern > 1){
            $countres++;
        }
    }
    return $countres;
}        

