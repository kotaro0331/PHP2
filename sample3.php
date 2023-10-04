<?php

   class Company
   {
     
     protected $name;

     protected getdisplayCompany(){
        return $this->name;
     }

     protected setdisplayCompany($name){
        $this->name =$name;
     }

     protected $adress;

      protected getdisplayCompany(){
        return $this->adress;
     }

     protected setdisplayCompany($adress){
        $this->adress =$adress;
     }

     protected $tel;
      
     protected getdisplayCompany(){
        return $this->tel;
     }

     protected setdisplayCompany($tel){
        $this->tel =$tel;
     }}


     class  Department extends Company
     {
    
    private $department;

    private getdisplayDepartment(){
        return  $this->department;
     }

     private setdisplayDepartment($department){
        $this->department =  $department;
     }

     private $top;

     private getdisplayDepartment(){
         return  $this->top;
      }
 
      private setdisplayDepartment($top){
         $this->topt =  $department;
      }
           $this->top = $top;
   }

　　
  $info = new Department();
  $info->setName('サンプルA','サンプルB','サンプルC')
  echo "会社名:"$info->GetName().;
 
   $name =('サンプルA','サンプルB','サンプルC')
   $adress =('阿佐ヶ谷','新橋','池袋')
   $tel =('080-0000-0000','090-0000-0000','070-0000-0000')
   $department =('人事','総務','営業')
   $top = ('田中','白石','水田')

   foreach($name as $value){
    echo "会社名:"$value.'<br/>';
   }
   foreach($adress as $value){
    echo "住所:"$value.'<br/>';
   }
   foreach($tel as $value){
    echo "電話番号:"$value.'<br/>';
   }
   foreach($department as $value){
    echo "部署名:"$value.'<br/>';
   }
   foreach($atop as $value){
    echo "部長:"$value.'<br/>';
   }

?>