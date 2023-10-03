<?php

////Traits are used to declare methods that can be used in multiple classes
trait message{
    public function message0(){
        echo "my send to sms web browser here 0 \n";
    }
}
trait message1{
    public function message1(){
        echo "my send to sms web browser here 1 \n";
    }
}

trait message2{
 public function message2(){
    echo " my send to message web 2 \n";
 }
 
}
class message3{
    use message;
    use message1;
    use message2;
}

$sendsms = new message3();
$sendsms-> message0();
$sendsms-> message1();
$sendsms-> message2();
