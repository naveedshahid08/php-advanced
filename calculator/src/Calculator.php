<?php

class Calculator {
    public function add($num1,$num2){
        return $num1 + $num2;
    }
    public function subtract($num1,$num2){
        return $num1 - $num2;
    }
    public function multiply($num1,$num2){
        return $num1 * $num2;

    }
    public function division($num1,$num2){
        if($num2==0){
            return "Cannot divide by 0!";
        }
        return $num1 / $num2;

    }
}