<?php
trait message1
{
    public function msgA()
    {
        echo "MESSAGE1A My favorite color is red. ";
    }

    public function msgB()
    {
        echo "MESSAGE1B My favorite number is 5. ";
    }
}

trait message2
{
    public function msgA()
    {
        echo "MESSAGE2A My favorite color is blue. ";
    }

    public function msgB()
    {
        echo "MESSAGE2B My favorite number is 7. ";
    }
}

class MyClass
{
    use message1, message2 {
        message1::msgA insteadof message2;
        message2::msgB insteadof message1;
    }
}

$obj = new MyClass();
$obj->msgA();
$obj->msgB();
