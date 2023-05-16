<?php

declare(strict_types=1);
namespace Patterns\Singleton;

// variables 
$name = 'Viktoriia ';
$surname = "Ripka ";
$group = "TV-13";
$new_word = $name . $surname;
echo $new_word;
echo "<br/>";
echo $group;
echo "<br/>";

// string methods
echo "length of $name equals " . strlen($name); 
echo "<br/>";
echo 'length of $name equals ' . strlen($name); 
echo "<br/>";

echo strtoupper($name);
echo "<br/>";


echo substr($name, 1, 5);
echo "<br/>";

// array methods 
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[3]; // piece4
echo "<br/>";

$new_pizza = implode(" ", $pieces);
echo $new_pizza;
echo "<br/>";

foreach ($pieces as &$item) {
    $new_item = ucwords($item);
    echo $new_item;
}
echo "<br/>";

// hash array
$hash_array = array(
    "user_first" => "Viktoriia",
    "user_second" => "Ripka",
    "user_third" => "Ivanivna"
);
print_r($hash_array);
echo "<br/>";
echo gettype($hash_array);
echo "<br/>";
$users = array("Ivan", "Igor", "Andriy");
print_r($users);
echo "<br/>";
echo gettype($users);
echo "<br/>";

// types
$number = 20;
$double = 20.0;
$male = false;
$string = "20";
$someVar;
$new_number = $number;
echo gettype($number);
echo "<br/>";
echo $new_number;
echo "<br/>";

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

if(!$male){
    echo "it is not male";
}
echo "<br/>";

echo gettype($someVar); # попередження і тип нал
echo "<br/>";
$someVar = null;
echo gettype($someVar); # тип нал
echo "<br/>";

// ООП
class Fruit { // клас Фрукт
  public $name;
  private $color;

  function __construct($name, $color) {
    $this->name = $name;
     $this->color = $color;
  }

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }

}

$apple = new Fruit('Apple', 'Red'); // об'єкт класу Фрукт

echo $apple->get_name();
echo "<br>";
$apple->set_name('Peach');
echo $apple->name;
echo "<br/>";
echo $apple->get_color();
echo "<br>";
// $apple->set_color('Red');
// echo $apple->color; //помилка, тому що значення приватне
echo "<br/>";

var_dump($apple instanceof Fruit);

echo "<br/>";

echo "<br/>";

echo "<br/>";
?>