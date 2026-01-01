<?php
// PPH21/src/PPH21Calculator.php
namespace PPH21;
use PPH21\CalculatorInterface;

final class PPH21Calculator
{
    private $calculators;

    public function __construct(CalculatorInterface ...$calculators)
    {
        $this->calculators = $calculators;
    }

    public function calculate(float $pkp): float
    {
        foreach ($this->calculators as $calculator) {
            if ($pkp < $calculator->maxPkp() && $pkp >= $calculator->minPkp()) {
                return $calculator->calculate($pkp);
            }
        }
    }
}