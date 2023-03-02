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
     * getClassInfo
     *
     * @return void
     */
    public static function getClassInfo() : void
    {
        echo "Classname ".__CLASS__;
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
        $this->squeezy = $squeezy;
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
     * sovrascrive override metodo getInfo di Vegetable
     * @return string
     */
    public function getInfo(): string
    {
        return "Io sono un " . $this->getName() . "  sono di colore: " . $this->getColor() .
        " " . $this->isSqueezy() . " e sono ".self::sayFresh()."<br>";
    }

    
    /**
     * sayFresh
     *
     * @return string
     */
    public static function sayFresh(): string
    {
        return "Fresh!";
    }

}




/**
 * printProperties
 *
 * @param  mixed $obj
 * @return void
 */
function printProperties($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "$prop = $val<br>";
    }
}

/**
 * printMethods
 *
 * @param  mixed $obj
 * @return void
 */
function printMethods($obj)
{
    $arr = get_class_methods(get_class($obj));
    foreach ($arr as $method) {
        echo "function $method()<br>";
    }
}


$asparago = new Vegetable(true, "asparago", "verde");
echo $asparago->getInfo();
printProperties($asparago);
printMethods($asparago);

$lemon = new Fruit(true, "limone", "giallo", true);
echo $lemon->getInfo();

$orange = new Fruit(true, "arancia", "arancione", true);
echo $orange->getInfo();

$apple = new Fruit(true, "mela", "verde", false);
echo $apple->getInfo();
printProperties($apple);
printMethods($apple);

echo "asparago: CLASS " . get_class($asparago) . "<br>";
echo "apple: CLASS " . get_class($apple).'<br>';
echo "apple: PARENT " . get_parent_class($apple) . "<br>";

echo "<hr>";
echo Fruit::sayFresh();
echo Fruit::getClassInfo();

