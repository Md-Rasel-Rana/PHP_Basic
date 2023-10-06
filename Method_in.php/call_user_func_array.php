<?php

function myfun($a,$b){
    return $a+$b;
}
 $arrelement =[12,34];
echo $result =call_user_func_array("myfun", $arrelement);

class MyClass {
    public function add($a, $b) {
        return $a + $b;
    }
}

$obj = new MyClass();
$args = [3, 4];
$result = call_user_func_array([$obj, 'add'], $args);
echo "Result: $result"; // Output: Result: 7



class MyMath {
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

$args = [3, 4];
$result = call_user_func_array(['MyMath', 'multiply'], $args);
echo "Result: $result \n"; // Output: Result: 12


class myclassname{
    public function addvalue($a,$b){
        return $a+$b;
    }
}
$myobj=new myclassname();
$arrgs=[20,70];
 echo $result= call_user_func_array([$myobj,"addvalue"],$arrgs);
 