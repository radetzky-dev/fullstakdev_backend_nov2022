<?php

class Vegetable
{
    public bool $edible;

    public string $color;

    public string $vegName;

    public function __construct(bool $edible, string $vegName, string $color = "green")
    {
        $this->edible = $edible;
        $this->vegName = $vegName;
        $this->color = $color;
    }
    
    /**
     * isEdible
     *
     * @return void
     */
    public function isEdible()
    {
        return $this->edible;
    }
    
    /**
     * getColor
     *
     * @return void
     */
    public function getColor()
    {
        return $this->color;
    }
    
    /**
     * getName
     *
     * @return void
     */
    public function getName()
    {
        return $this->vegName;
    }
    
    /**
     * getInfo
     *
     * @return string
     */
    public function getInfo(): string
    {
        return "Io sono un " . $this->getName() . "  sono di colore: " . $this->getColor() .
"<br>";
    }
}

class Fruit extends Vegetable
{
    public bool $squeezy = false;

    public function __construct(bool $edible, string $vegName, string $color, bool $squeezy)
    {
        $this->squeezy= $squeezy;
        parent::__construct($edible, $vegName, $color);
    }

    /**
     * isSqueezy
     *
     * @return string
     */
    public function isSqueezy(): string
    {
        if ($this->squeezy) {
            return "posso essere spremuto";
        }
        return "";
    }
    
    /**
     * getInfo
     * sovrascrive metodo getInfo di Vegetable
     * @return string
     */
    public function getInfo(): string
    {
        return "Io sono un " . $this->getName() . "  sono di colore: " . $this->getColor() .
" " . $this->isSqueezy() . "<br>";
    }

}

$asparago = new Vegetable(true, "asparago", "verde");
echo $asparago->getInfo();

$lemon = new Fruit(true, "limone", "giallo", true);
echo $lemon->getInfo();

$orange = new Fruit(true, "arancia", "arancione", true);
echo $orange->getInfo();

$apple = new Fruit(true, "mela", "verde", false);
echo $apple->getInfo();



