<?php
/**
 Описание магазиа
*/
 error_reporting(-1);
class ShopProduct{
    public $title;
	public $productMainName;
	public $producerFirstName = "Имя автора";
	public $price;

	function __construct ($title, $firstName, $mainName, $price) {


		$this -> title = $title;
		$this -> producerFirstName = $firstName;
		$this -> producerMainName = $mainName;
		$this -> price = $price;
	}


	function getProducer() {
		return "{$this->producerFirstName} " . "{$this->producerMainName}";
	}

	function getSummaryLine() {
		return "{this->producerFirstName}" . "{$this->producerMainName}";

	}
}
//private $id = 0;

//public function setID($id) {
//    $this->id = $id;
//}

//public static function getInstanse ($id , PDO, $pdo){
//
//}

class CDProduct extends ShopProduct {
	public  $playLength;

    function __construct($title, $firstName, $mainName, $price, $playLength) {
        parent::__constrcut($title, $firstName, $mainName, $price);

        $this->playLength = $playLength;
    }

    function getPlayLength(){
        return $this->playLenth;
    }

    function getSummaryLine() {
        $base = "{$this->title} ({$this->producerMainName},";
        $base .="{$this->producerFirstName} )";

        $base .= ": Время звучания - {$this->playLenght}";
        return $base;
    }

}

class BookProduct extends ShopProduct {
    public $numPages;

    function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        //Унифицированный конструктор, означает обращение непостредственно к родительскому классу, независимо от изменений в иерархии

        parent::__construct ($title ,$firstName, $mainName, $price, $numPages);
        $this->numPages = $numPages;
    }

    function getNumberOfPages(){
        return $this->numPages;
    }

    function getSummaryLine(){
        $base = "$this->title ( $this->producerMainName, ";
        $base .= "$this->producerFirstName)";
        $base.= ":$this->numPages стр.";
        return $base;
    }
}

//
////Вызов через конструтор
$product1 = new ShopProduct( "Cобачье сердце", "Михаил" , "Булгаков", "5.99");
 print_r("Автор : {$product1 -> getProducer() } \n");

//

////Обратиться к переменным свойств
//$product1 = new ShopProduct();
//$product1->title = "Собачье сердце";
//$product1->producerMainName = "Булгаков";
//$product1->producerFirstName = "Михаил";
//$product1->price = 5.99;
// print "Автор: {$product1->getProducer()} \n";

