<?php

   class Company
   {
     protected $name;
     
     public function getdisplayName(){
        return $this->name;
     }

     public function setdisplayName($value){
        $this->name =$value;
     }

     protected $adress;

     public function getdisplayAd(){
        return $this->adress;
     }

     public function setdisplayAd($value){
        $this->adress =$value;
     }

     protected $tel;
      
     public function getdisplayTel(){
        return $this->tel;
     }

     public function setdisplayTel($value){
        $this->tel =$value;
     }}


     class  Department extends Company
     {
    
    private $department;

    public function getdisplayDepart(){
        return  $this->department;
     }

     public function setdisplayDepart($value){
        $this->department =$value;
     }

     private $top;

     public function getdisplayTop(){
         return  $this->top;
      }
 
      public function setdisplayTop($value){
         $this->top =$value;
      }
     }

   $instance = new Company();
   $instance->setdisplayName('サンプルA','サンプルB','サンプルC');
   $instance->setdisplayAd('阿佐ヶ谷','新橋','池袋');
   $instance->setdisplayTel('080-0000-0000','090-0000-0000','070-0000-0000');
   $instance->setdisplayDepart('人事','総務','営業');
   $instance->setdisplayTop('田中','白石','水田');
   
   foreach($instance as $value){
    echo $value->getdisplayName().'<br/>';
   }
   foreach($instance as $value){
    echo $value->getdisplayAd().'<br/>';
   }
   foreach($instance as $value){
    echo $value->getdisplayTel().'<br/>';
   }
   foreach($instance as $value){
    echo $value->getdisplayDepart().'<br/>';
   }
   foreach($instance as $value){
    echo $value->getdisplayTop().'<br/>';
   }

?>