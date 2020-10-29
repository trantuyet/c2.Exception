<?php
class DivideByZeroException extends Exception {

    public function __toString()
    {
        return "Can't divide by zero";
    }

}
