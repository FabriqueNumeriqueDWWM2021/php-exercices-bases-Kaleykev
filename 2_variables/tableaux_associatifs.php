<?php

$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");

$activites["Dimanche"] = "grasse mat";

var_dump($activites);



//deux dimensions
$pierre = array("1"=>"Java","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");

// $preferences = array($pierre,$paul,$jacques);

$preferences = [
    "pierre" => $pierre,
    "paul" => $paul,
    "jacques" =>$jacques
];
var_dump($preferences);

// var_dump (array_count_values($jacques));

$mergArray = array_merge($pierre, $paul, $jacques);
var_dump($mergArray);

$retArray = array_count_values($mergArray);
var_dump($retArray);
var_dump($retArray["Php"]);

array_multisort($retArray, SORT_DESC);
var_dump($retArray);

natsort($retArray);
$retArray = array_reverse($retArray, true);
var_dump($retArray);

arsort($retArray);
var_dump($retArray);

?>