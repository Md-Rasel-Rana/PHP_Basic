<?php
class shape{
    private $name;
    private $area;
    public function __construct($name)
    {
        $this->name=$name;
        $this->calculatorArea();
    }


    public function getArea(){
        echo "$this {$this->name} area {$this->area}";

    }
    public function calculatorArea(){
    }
}
class Traingle extends shape{
    private $a,$b,$c;
    public function __construct($name,$a,$b,$c)
    {
        
    }
}