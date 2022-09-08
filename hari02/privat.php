<?php
class Person
{
  private $name;
 
  public function getName()
  {
    return $this->name;
  }
 
  public function setName($name)
  {
    $this->name = $name;
  }
}
 
$person = new Person();
// $person->name = 'Bob Smith'; // Throws an error
// $person->setName('Bob Smith');
// echo $person->getName(); // prints 'Bob Smith'

echo "<p> Jika Anda mencoba mengakses properti private dari luar class, itu akan menimbulkan kesalahan yang fatal Cannot access private property Person::$name. Dengan demikian, Anda perlu mengatur nilai properti pribadi menggunakan method setter, seperti yang kami lakukan menggunakan method setName. Ada alasan bagus mengapa Anda mungkin ingin menjadikan properti private. Misalnya, mungkin beberapa tindakan harus diambil (memperbarui basis data, mengatakan, atau merender ulang template) jika properti itu berubah. Dalam hal ini, Anda dapat mendefinisikan method setter dan menangani logika khusus ketika properti diubah.</p>"
?>