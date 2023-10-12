<?php
class Company {
    protected $name;
    protected $adress;
    protected $tel;

    function setName($displayCompany) {
        $this->name = $displayCompany;
    }
    function getName() {
        return $this->name;
    }
    function setAdress($displayCompany) {
        $this->adress= $displayCompany;
    }
    function getAdress() {
        return $this->adress;
    }
    function setTel($displayCompany) {
        $this->tel = $displayCompany;
    }
    function getTel() {
        return $this->tel;
    }
}

class Department extends Company {
    private $part;
    private $top;

    function setPart($displayDepartment) {
        $this->part = $displayDepartment;
    }
    function getPart() {
        return $this->part;
    }
    function setTop($displayDepartment) {
        $this->top = $displayDepartment;
    }
    function getTop() {
        return $this->top;
    }
}

$foo = new Company();
$foo->setName("会社名:サンプルA");
$foo->setAdress("会社名:サンプルB","住所:'新橋","電話番号:090-0000-0000","部署:総務","部長:白石");
$foo->setTel("会社名:サンプルC","住所:池袋","電話番号:070-0000-0000","部署:営業","部長:水田");



foreach ($foo as $displayCompany){
       echo $displayCompany -> getName()."\n";
       echo $displayCompany -> getAdress()."\n";
       echo $displayCompany -> getTel()."\n";
      
   }


