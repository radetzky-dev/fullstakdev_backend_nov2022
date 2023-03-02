<?php

interface Anagrafica
{
    public function setName(string $name, string $surname);
    public function setAddress($state, $city);
    public function getFullInfo();
}

interface Mail
{
    public function setEmail(string $email): void;
    public function sendEmailTo(): string;
}

class Person implements Anagrafica
{
    public int $age = 0;
    public string $name;
    public string $surname;
    public string $state;
    public string $city;

    /**
     * setAge
     *
     * @param  mixed $age
     * @return void
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * setName
     *
     * @param  mixed $name
     * @param  mixed $surname
     * @return void
     */
    public function setName(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * setAddress
     *
     * @param  mixed $city
     * @param  mixed $state
     * @return void
     */
    public function setAddress($city, $state)
    {
        $this->state = $state;
        $this->city = $city;
    }

    /**
     * getFullInfo
     *
     * @return void
     */
    public function getFullInfo()
    {
        if (!empty($this->city)) {
            return $this->name . ' ' . $this->surname . ' age ' . $this->age . ' city ' . $this->city . ' state ' . $this->state;
        }
        return "-";
    }
}

class Impiegato extends Person implements Mail
{
    public string $email;

    /**
     * setEmail
     *
     * @param  mixed $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * sendEmailTo
     *
     * @return string
     */
    public function sendEmailTo(): string
    {
        return "mail inviata a " . $this->email;

    }

}

$person = new Person();
$person->setAge(27);
$person->setName("Mario", "Rossi");
//$person->setAddress("Milano", "Italia");
echo $person->getFullInfo();

echo "<hr>";
$impiegato = new Impiegato();
$impiegato->setAge(32);
$impiegato->setName("Giulia", "Versi");
$impiegato->setAddress("Roma", "Italia");
echo $impiegato->getFullInfo();
$impiegato->setEmail("giulia@test.it");
echo $impiegato->sendEmailTo();
