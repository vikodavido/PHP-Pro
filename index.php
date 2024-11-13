<?php

trait Trait1 {
    public function test() {
        return 1;
    }
}

trait Trait2 {
    public function test() {
        return 2;
    }
}

trait Trait3 {
    public function test() {
        return 3;
    }
}

class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::test insteadof Trait2, Trait3;
        Trait2::test as newTestTrait2;
        Trait3::test as newTestTrait3;
    }

    public function getSum() {
        return $this->test() + $this->newTestTrait2() + $this->newTestTrait3();
    }
}


$test = new Test();
echo $test->getSum(); 
