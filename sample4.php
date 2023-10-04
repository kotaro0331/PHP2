<?php

class Test
{
 protected $num;

 public function getNum(){
    return $this->num;
 }


 public function setNum($value){
 $this->num = $value;
 }
}

 $instance = new Test();
 $instance->setNum(5);

 foreach($instance as $value){
 echo $value->getNum();
 }

?>