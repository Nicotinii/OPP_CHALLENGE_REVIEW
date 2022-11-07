<?php

class Person
{

    protected string $firstname;
    protected string $lastname;
    protected string $address;
    protected int $birthday;
    protected int $date;

    public function __construct(string $firstname, string $lastname, string $address, int $birthday, int $date)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->address = $address;
        $this->birthday = $birthday;
        $this->date = $date;
    }

    public function setFirstname(int $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getFirstname(): int
    {
        return $this->firstname;
    }

    public function setLastname(int $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getLastname(): int
    {
        return $this->lastname;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setBirthday(int $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBirthday(): int
    {
        return $this->birthday;
    }

    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function infos(): string
    {
        return $this->firstname . "<br>" . $this->lastname . "<br>" . $this->address . "<br>" . $this->birthday . "<br>";
    }

    public function addressModif(): void
    {
    }


    public function getAge(): void
    {
    }
}
