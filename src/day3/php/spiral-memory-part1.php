<?php

include 'Day3.php';

$obj = new Day3();
$obj->setInput(289326);
$obj->generatePart1Spiral();
echo $obj->getSteps();
