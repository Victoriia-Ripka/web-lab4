<?php

declare(strict_types=1);
namespace Patterns\Singleton;

// variables 
$name = "Viktoriia ";
$surname = "Ripka ";
$group = "TV-13";
$new_word = $name . $surname;
echo $new_word;
echo "<br/>";
echo $group;
echo "<br/>";

// string methods
echo "length of name variable equals " . strlen($name); 
echo "<br/>";

echo strtoupper($name);
echo "<br/>";
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



echo "<br/>";

echo "<br/>";

echo "<br/>";

echo "<br/>";

echo "<br/>";

echo "<br/>";

echo "<br/>";

echo "<br/>";
?>