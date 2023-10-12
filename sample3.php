<?php

   class Company
   {
     protected $name;
     protected $adress;
     protected $tel;
     

     public function __construct($name,$adress,$tel){
         $this -> name = $name;

         $this -> adress = $adress;

         $this -> tel = $tel;

     }

     public function getName(){
        echo $this -> name;
     }

     public function getAdress(){
        echo $this -> adress;
     }

     public function getTel(){
        echo $this -> tel;
     }
   }

   class Department extends Company

   {
     private $part;
     private $top;

     public function __construct($name,$adress,$tel,$part,$top){
      parent::__construct($name,$adress,$tel); 

      
      $this -> part = $part;

      $this -> top = $top;
     }

     public function getPart(){
        echo $this -> part;
     }
 
    public function getTop(){
       echo $this -> top;
     }

   }
   
   $acompany = new Department("会社名:サンプルA","住所:阿佐ヶ谷","電話番号:080-0000-0000","部署:人事","部長:田中");
   $bcompany = new Department("会社名:サンプルB","住所:新橋","電話番号:090-0000-0000","部署:総務","部長:白石");
   $ccompany = new Department("会社名:サンプルC","住所:池袋","電話番号:070-0000-0000","部署:営業","部長:水田");

   $items = array($acompany,$bcompany,$ccompany);


foreach ($items as $item){
          echo $item -> getName()."\n";
          echo $item -> getAdress()."\n";
          echo $item -> getTel()."\n";
          echo $item -> getPart()."\n";
          echo $item -> getTop()."\n"; 
         
      }
          
?>
