<?php declare(strict_types=1);

namespace Src;

class FizzBuzz {
    
    public function generateOutput(int $n): array {
        $resp = [];	
        for ($i = 0; $i < $n; $i++){
            if (($i + 1) % 15 == 0) {
                array_push($resp, "FizzBuzz");
            } else if (($i + 1) % 3 == 0) {
                array_push($resp, "Fizz");
            } else if (($i + 1) % 5 == 0) {
                array_push($resp, "Buzz");
            } else {
                array_push($resp, $i + 1);                
            }
        }
        return $resp;
    }

}