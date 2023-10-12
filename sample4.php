<?php

class Test
{
 protected $num;


 public function getNum(){
    return $this ->num;
 }

 public function setNum($val){
 $this ->num = $val;
 }

}

 $instance = new Test();
 $instance ->setNum('5');
 

foreach($instance as $val){
echo $val ->getNum();
}

?>