
<?php
interface Eatable
{
    public function eat();
}

interface Flyable
{
    public function fly();
}

class Swallow implements Eatable, Flyable
{
    public function eat(){}

    public function fly(){}
}

class Ostrich implements Eatable
{
    public function eat(){}
}
?>
