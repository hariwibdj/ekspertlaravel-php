<?php
class Person
{
  public $name;
 
  public function getName()
  {
    return $this->name;
  }
}
 
$person = new Person();
$person->name = 'Bob Smith';
echo $person->getName(); // prints 'Bob Smith'
?>