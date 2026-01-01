<?php

require __DIR__.'/src/CalculatorInterface.php'; 
require __DIR__.'/src/AbstractCalculator.php'; 
require __DIR__.'/src/FirstRuleCalculator.php'; 
require __DIR__.'/src/SecondRuleCalculator.php';
require __DIR__.'/src/ThirdRuleCalculator.php'; 
require __DIR__.'/src/FourthRuleCalculator.php'; 
require __DIR__.'/src/PPH21Calculator.php';

use PPH21\FirstRuleCalculator; 
use PPH21\SecondRuleCalculator; 
use PPH21\ThirdRuleCalculator; 
use PPH21\FourthRuleCalculator; 
use PPH21\PPH21Calculator;


$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

//1.250.000
echo $calculator->calculate(25000000); 
echo PHP_EOL;
//1.500.000
echo $calculator->calculate(30000000); 
echo PHP_EOL;
//2.250.000
echo $calculator->calculate(45000000); 
echo PHP_EOL;
//2.500.000
echo $calculator->calculate(50000000); 
echo PHP_EOL;
//4.000.000
echo $calculator->calculate(60000000); 
echo PHP_EOL;
//6.250.000
echo $calculator->calculate(75000000); 
echo PHP_EOL;
//32.500.000
echo $calculator->calculate(250000000); 
echo PHP_EOL;
//45.000.000
echo $calculator->calculate(300000000); 
echo PHP_EOL;
//82.500.000
echo $calculator->calculate(450000000); 
echo PHP_EOL;
//170.000.000
echo $calculator->calculate(750000000); 
echo PHP_EOL;
