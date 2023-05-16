<?php

declare(strict_types=1);
namespace DesignPatterns\Creational\Singleton\Tests;

// variables 
$name = 'Viktoriia ';
$surname = "Ripka ";
$group = "TV-13";
$new_word = $name . $surname;

echo $new_word, "<br/>";
echo $group, "<br/>", "<br/>";

// string methods
echo "length of $name equals " . strlen($name), "<br/>"; 
echo 'length of $name equals ' . strlen($name), "<br/>"; 
echo strtoupper($name), "<br/>";
echo substr($name, 1, 5), "<br/>", "<br/>";

// array methods 
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[3], "<br/>"; // piece4

$new_pizza = implode(" ", $pieces);
echo $new_pizza, "<br/>";

foreach ($pieces as &$item) {
    $new_item = ucwords($item);
    echo $new_item, " ";
}
echo "<br/> <br/>";

// hash array
$hash_array = array(
    "user_first" => "Viktoriia",
    "user_second" => "Ripka",
    "user_third" => "Ivanivna"
);
print_r($hash_array);
echo "<br/>";
echo gettype($hash_array), "<br/>";

$users = array("Ivan", "Igor", "Andriy");
print_r($users);
echo "<br/>";
echo gettype($users), "<br/>", "<br/>";

// types
$number = 20;
$double = 20.08567;
$male = false;
$string = "20";
$someVar;
echo gettype($number), "<br/>";

$new_number = 'number';
echo $$new_number , "<br/>";

// $new_number = 5;
// echo $new_number, " ", $number, "<br/>";
// $number = 15;
// echo $new_number, " ", $number, "<br/>";

if($number < $double ){
    echo "$number < $double";
} elseif($number > $double) {
    echo "$number > $double";
} else {
    echo "$number == $double";
}
echo "<br/>";

if($number === $string){ # можна порівнювати з double і string
    echo "$number === $string";
} else {
    echo gettype($number) . "!== " . gettype($string);
}
echo "<br/>";

echo $double, " ", gettype($double), "<br>";
$double2 = (int)$double;
echo $double2,  " ", gettype($double2), "<br/>";

if(!$male){
    echo "it is not male";
}
echo "<br/>";

// echo gettype($someVar); # попередження і тип нал
echo "<br/>";
$someVar = null;
echo gettype($someVar), "<br/>", "<br/>"; # тип нал

// ООП
class Car {
  public $model;
  private $color;

  function __construct($model, $color) {
    $this->model = $model;
     $this->color = $color;
  }

  function set_model($model) {
    $this->model = $model;
  }
  function get_model() {
    return $this->model;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

  function __destruct() {
    echo "The car is {$this->model} and the color is {$this->color}.<br>";
  }

}

final class Audi extends Car { // final class
  public function intro() : string {
    return "I am an $this->name!";
  }
}

// final class Volvo extends Audi { // ERROR
//   public function intro() : string {
//     return "I am an $this->name!";
//   }
// }

$audi = new Audi("s5", "green"); // об'єкт класу Audi
echo $audi->get_color(), "<br>";
// echo $audi->color, "<br>"; // помилка, тому що значення приватне

$car = new Car('xs500', 'red'); // об'єкт класу Car
echo $car->get_model(), "<br>";
$car->set_model('M07');
echo $car->model, "<br/>";

var_dump($car instanceof Fruit);
var_dump($car instanceof Car);
echo "<br/> <br/>";

// singleton
class Singleton {
    public $a;
    private static $instance = [];

    protected function __construct() {}
    protected function __clone() {}
    public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function getA() {
        return $this->a;
    }
    public function setA($a) {
       $this->a = $a;
    }
}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
if ($s1 === $s2) {
  echo "Singleton works, both variables contain the same instance.", "<br>";
} else {
  echo "Singleton failed, variables contain different instances.", "<br>";
}

?>