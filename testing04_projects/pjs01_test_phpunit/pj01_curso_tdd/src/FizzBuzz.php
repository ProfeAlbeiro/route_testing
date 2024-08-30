<?php declare(strict_types=1);

namespace Src;

class FizzBuzz {
    
    public function generateOutput(int $n) : array {
        $resp = [];	
        for ($i = 0; $i < $n; $i++){
            array_push($resp, $this->getValue($i+1));
        }
        return $resp;
    }

    private function getValue(int $n) : String {
        $str = $n;
        if ($n % 15 == 0) {
            $str = "FizzBuzz";
        } else if ($n % 3 == 0) {
            $str = "Fizz";
        } else if ($n % 5 == 0) {
            $str = "Buzz";
        } 
        return strval($str);
    }

}