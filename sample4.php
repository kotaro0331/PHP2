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

　//一つだけ表示したいのであればこの様な文で問題無し
 echo $instance->getNum();

　//$instanceの中身が無くなるまで繰り返す
 foreach($instance as $value){
 echo $value->getNum();
 }

?>