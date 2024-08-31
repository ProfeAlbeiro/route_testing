<?php declare(strict_types=1);

namespace Src;

use Src\Dependency;

class Stub {

    public function doSomething(Dependency $dependency) {

        $str = $dependency->doSomething();
        $response = "";

        if ($str == "foo") {
            $response = "Válido";
        }

        return $response;
    }

}