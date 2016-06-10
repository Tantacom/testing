<?php

namespace Tanta;

use Tanta\Exceptions\NotNumberException;

class Calculator {
    /**
     * Suma dos números
     *
     * @param $op1
     * @param $op2
     *
     * @throws NotNumberException
     * @return mixed
     */
    public function suma($op1, $op2)
    {
        if (!is_numeric($op1)) {
            throw new NotNumberException("El primer valor no es un número");
        }

        if (!is_numeric($op2)) {
            throw new NotNumberException("El segundo valor no es un número");
        }

        return $op1 + $op2;
    }
}
