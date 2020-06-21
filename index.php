<?php

require './circle.php';

printf("Hey there... Starting\n");

try {
    $c = new Circle(7);
} catch (\Throwable $th) {
    echo $th;
}

printf("Circle area: ");

echo $c->getArea() . "\n";

printf("Circle perimter: ");

echo $c->getPerimeter();