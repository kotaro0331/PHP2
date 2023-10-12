//ここから親クラスの内容
<?php
    class Menu{
        protected $name;
        protected $price;

        public function __construct($name,$price){
            $this -> name = $name;

            $this -> price = $price;
        }

        public function getName(){
            echo $this -> name;
        }

        public function getPrice(){  
            echo $this -> price;
        }
    }

    $pasta = new Menu("パスタ",1000);
    $curry = new Menu("カレー",500);
    $juice = new Menu("ジュース",300);
    $coffee = new Menu("コーヒー",400);

    $items = array($pasta,$curry,$juice,$coffee);
?>

<?php foreach($items as $item):?>
    <p><?php echo $item -> getName()."の金額は".$item -> getPrice()."円です"; ?></p>
<?php endforeach ?>
//ここまで親クラスの内容


//ここから子クラスの内容
<?php
    class Food extends Menu{
    }

    $food = new Food("食べ物",100);
?>

<p><?php echo $food -> getName()."の金額は".$food -> getPrice()."円です"; ?></p>
//ここまで子クラスの内容



,"住所:阿佐ヶ谷","電話番号:080-0000-0000","部署:人事","部長:田中"