<?php

interface Output {
    function execute($value);
}

class Fizz implements Output {
    function execute($value) {
        if($value % 3 == 0)
            return "Fizz";
        return "";
    }
}

class Buzz implements Output {
    function execute($value) {
        if($value % 5 == 0)
            return "Buzz";
        return "";
    }
}

class ThisOrThat {
    function pick($ths, $tht) {
        if($ths == null || $ths == "")
            return $tht;

        return $ths;
    }
}

class FizzBuzz {

    private $fizz;
    private $buzz;
    private $thisOrThat;

    function __construct() {
        $this->fizz = new Fizz();
        $this->buzz = new Buzz();
        $this->thisOrThat = new ThisOrThat();
    }

    function run($value) {
        for($i = 1; $i <= $value; $i++){

            $output = $this->thisOrThat->pick(
                $this->fizz->execute($i) . $this->buzz->execute($i),
                $value);

            echo($output);
            echo("\n");
        }
    }
}