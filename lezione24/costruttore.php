<?php

class Fruit
{
    public $name;
    public $color;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $color
     * @return void
     */
    public function __construct(string $name, string $color = "red")
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

$apple = new Fruit("Apple");
echo $apple->getName() . '<br>';
echo $apple->getColor();

echo "<hr>";
$orange = new Fruit("Arancia", "orange");
echo $orange->getName() . '<br>';
echo $orange->getColor();
$orange->setName("Orange");
echo $orange->getName() . '<br>';

echo "<hr>";

class BaseClass
{
    public $surname;
    public int $age;
    public function __construct($surname, $age = 10)
    {
        print "In BaseClass constructor\n";
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getSurname()
    {
        return $this->surname;
    }
}

class SubClass extends BaseClass
{
    public $name;

    public function __construct($surname, $name, $age =22)
    {
        parent::__construct($surname, $age);
        $this->name = $name;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

// In BaseClass constructor
$obj = new BaseClass("Verdi");
echo $obj->getSurname();

echo "<hr>";

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass("rossi", "mario");
echo $obj->getName().'<br>';
echo $obj->getSurname();
echo "<br>";
echo $obj->getAge();

echo "<br>";
class Product {

    private ?int $id;
    private ?string $name;

    public function __construct(?int $id = null, ?string $name = "mario") {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public static function fromBasicData(int $id, string $name): static {
        $new = new static($id, $name);
        return $new;
    }

    public static function fromJson(string $json): static {
        $data = json_decode($json);
        return new static($data['id'], $data['name']);
    }

    public static function fromXml(string $xml): static {
        // Custom logic here.
        $data = convert_xml_to_array($xml);
        $new = new static();
        $new->id = $data['id'];
        $new->name = $data['name'];
        return $new;
    }
}

$p1 = Product::fromBasicData(5, 'Widget');

echo $p1->getId();

$p2 = new Product (6, "prova");

echo $p2->getId();

$p3 = new Product (7);

echo $p3->getId();
