<?php
class calculator
{
    public $operator;
    public $num1;
    public $num2;


    public function calculate(int $num1, int $num2, string $operator)
    {
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '/':
                return $num1 / $num2;
            case '*':
                return $num1 * $num2;
        }
    }
}