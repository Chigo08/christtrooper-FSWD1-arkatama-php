<?php
class Animal
{
  public $nama;
  public $jenis;

  function __construct($nama, $jenis)
  {
    $this->nama = $nama;
    $this->jenis = $jenis;
  }

  function getInfo()
  {
    return "Hewan ini adalah $this->nama jenis $this->jenis.";
  }
}

class Cat extends Animal
{
  function __construct($nama)
  {
    $this->nama = $nama;
  }

  function getInfo()
  {
    $this->jenis = "Kucing";
    return "Hewan ini adalah $this->nama jenis $this->jenis. $this->jenis adalah hewan yang suka bermain dan bersih";
  }
}

class Dog extends Animal
{
  function __construct($nama)
  {
    $this->nama = $nama;
  }

  function getInfo()
  {
    $this->jenis = "Anjing";
    return "Hewan ini adalah $this->nama jenis $this->jenis. $this->jenis adalah hewan yang setia dan cerdas";
  }
}

// Objek dari Class Animal
$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo() . "<br>";

// Objek dari Class Cat
$cat = new Cat("Kitty");
echo $cat->getInfo() . "<br>";

$dog = new Dog("Buddy");
echo $dog->getInfo() . "<br>";
