<?php
require '../vendor/autoload.php';

$new = new App\Wcs\Hello();

$new1 = new HelloWorld\SayHello();

echo $new->talk();
echo $new1->world();