<?php
class Saluta
{
    private string $name;

    public string $surname ="Bianchi";

    /**
     * salutoGenerico
     *
     * @return void
     */
    public function sayHelloAnonymous(): void
    {
        echo "Hello<br>";
    }

    /**
     * sayHelloWithName
     *
     * @return void
     */
    private function sayHelloWithName(): void
    {
        echo "Hello " . $this->name . " ".$this->surname. "<br>";
    }

    /**
     * setName
     *
     * @param  mixed $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
        $this->sayHelloWithName();
    }
    
    /**
     * getName
     *
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }

}

$greeting = new Saluta;
$greeting->sayHelloAnonymous();
$greeting->surname="Rossi";
$greeting->setName("Mario");
echo "Ciao ".$greeting->getName();
