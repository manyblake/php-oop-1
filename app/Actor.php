<?php

class Actor
{
  public $name;
  public $lastName;
  public $yearOfBirth;

  function __construct($name, $lastName, $yearOfBirth)
  {
    $this->name = $name;
    $this->lastName = $lastName;
    $this->yearOfBirth = $yearOfBirth;
  }
}
