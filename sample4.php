<?php

class Test
{
 protected $num;

　//同インスタンスで設定された$numを持ってくる関数
 public function getNum(){
    return $this->num;
 }

　//指定された引数$valに入った値をnumに代入する関数
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