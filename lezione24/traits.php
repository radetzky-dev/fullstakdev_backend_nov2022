<?php

interface Mail
{
    public function setEmail(string $email): void;
}

class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!<br>';
    }

    public function sayCiao()
    {
        echo "ciao<br>";
    }
}

class MyHelloWorld extends Base implements Mail
{
    use SayWorld;

    public function sayBuonasera()
    {
        echo "Buonasera<br>";
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayCiao();
$o->sayBuonasera();
$o->setEmail("test@test.it");
