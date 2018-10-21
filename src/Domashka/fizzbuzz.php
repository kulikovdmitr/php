<?php

namespace Domashka;

Class FizzBuzz
{
    public function mode (int $i)
    {
        $mod3 = $i % 3;
        $mod5 = $i % 5;

        if ($mod3 == 0 and $mod5 !== 0){
           return "Fizz";
        }

        if ($mod5 == 0 and $mod3 !== 0) {
            return "Buzz";
        }

        if ($mod3 && $mod5 == 0){
            return "FizzBuzz";
        }

        if ($mod5 && $mod3 == 0){
            return "FizzBuzz";
        }

    }
}