<?php

interface Anagrafica
{
    public function setName(string $name, string $surname);
    public function setAddress($state, $city);
    public function getFullInfo();
}

class Person implements Anagrafica
{
    public int $age;
    public string $name;
    public string $surname;
    public string $state;
    public string $city;

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setName(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setAddress($city, $state)
    {
        $this->state = $state;
        $this->city = $city;
    }

    public function getFullInfo()
    {
        return $this->name. ' '.$this->surname . ' age '.$this->age. ' city '.$this->city. ' state '.$this->state;
    }

}

$person = new Person();
$person->setAge(27);
$person->setName("Mario", "Rossi");
$person->setAddress("Milano", "Italia");
echo $person->getFullInfo();