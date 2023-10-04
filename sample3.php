<?php

   class Company
   {
     protected $name;
     
     public function getdisplayName(){
        return $this->name;
     }

     public function setdisplayName($name){
        $this->name =$name;
     }

     protected $adress;

     public function getdisplayAd(){
        return $this->adress;
     }

     public function setdisplayAd($adress){
        $this->adress =$adress;
     }

     protected $tel;
      
     public function getdisplayTel(){
        return $this->tel;
     }

     public function setdisplayTel($tel){
        $this->tel =$tel;
     }}


     class  Department extends Company
     {
    
    private $department;

    public function getdisplayDepart(){
        return  $this->department;
     }

     public function setdisplayDepart($department){
        $this->department =  $department;
     }

     private $top;

     public function getdisplayTop(){
         return  $this->top;
      }
 
      public function setdisplayTop($top){
         $this->top = $top;
      }
     }

   $instance = new Company();
   $instance->setdisplayName('サンプルA','サンプルB','サンプルC');
   $instance->setdisplayAd('阿佐ヶ谷','新橋','池袋');
   $instance->setdisplayTel('080-0000-0000','090-0000-0000','070-0000-0000');
   $instance->setdisplayDepart('人事','総務','営業');
   $top->setdisplayTop('田中','白石','水田');
   
   foreach($instance as $name){
    echo $name->setdisplayName().'<br/>';
   }

   foreach($instance as $adress){
    echo $adress->setdisplayAd().'<br/>';
   }
   foreach($instance as $tel){
    echo $tel->setdisplayTel().'<br/>';
   }
   foreach($instance as $department){
    echo $department->setdisplayDepart().'<br/>';
   }
   foreach($instance as $top){
    echo $top->setdisplayTop().'<br/>';
   }

?>