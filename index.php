<?php

require('honda.php');
require('nissan.php');
require('ferrari.php');

$honda = new Honda();
$nissan = new Nissan();
$ferrari = new Ferrari();

$h_maker = $honda->maker;
$n_maker = $nissan->maker;
$f_maker = $ferrari->maker;

$h_price = $honda->price;
$n_price = $nissan->price;
$f_price = $ferrari->price;

$h_speed = $honda->speed;
$n_speed = $nissan->speed;
$f_speed = $ferrari->speed;

$h_capacity = $honda->capacity;
$n_capacity = $nissan->capacity;
$f_capacity = $ferrari->capacity;

echo $h_maker . 'のスペック：<br/>車体価格' . $h_price . '円<br/>速度' . $h_speed . 'km/h<br/>定員' . $h_capacity . '名<br/><br/>'; 
echo $n_maker . 'のスペック：<br/>車体価格' . $n_price . '円<br/>速度' . $n_speed . 'km/h<br/>定員' . $n_capacity . '名<br/><br/>'; 
echo $f_maker . 'のスペック：<br/>車体価格' . $f_price . '円<br/>速度' . $f_speed . 'km/h<br/>定員' . $f_capacity . '名<br/><br/>'; 

?>