<?php

spl_autoload_register(function ($class) {
	$file = str_replace('\\', '/', $class) . '.php';
	if(file_exists($file)) require $file;
});


use ProjectZoo\Safari\animaux\lion;
use ProjectZoo\Safari\animaux\perroquet;
use ProjectZoo\Safari\Parc\enclos;

$lion = new lion ("simba", 190, 7);
$perroquet = new perroquet("coco", 2);
$perroquet2 = new perroquet("jago", 3);

$enclos = new enclos(3);

echo $enclos->ajouterunanimal($lion);
echo $enclos->ajouterunanimal($perroquet);
echo $enclos->ajouterunanimal($perroquet2);


echo $enclos->visiteguidee();
?>