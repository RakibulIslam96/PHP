<?php

trait Hello
{
    public function sayHello()
    {
        echo "Ai dekh ami code korte pari." . "<br>";
        echo "HTML, Javascript, Php." . "<br>";
        echo "so, let's start something great." . "<br>";
    }
}
trait Hello1
{
    public function sayHello1()
    {
        echo "Pagle." . "<br>";
        echo "bhai." . "<br>";
        echo "fahim .";
    }
}
class Rakib
{
    use Hello, Hello1;
}
class Fahim
{
    use Hello1;
}
$s = new Rakib();
$s->sayHello();
$s->sayHello1();

$f = new Fahim();
$f->sayHello1();
