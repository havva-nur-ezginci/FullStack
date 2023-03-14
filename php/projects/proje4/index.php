<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;
  
    function __construct($color="şeffaf",$name=" ") {
        $this->color = $color;
        $this->name = $name;
    }
   
    function __destruct() {//yıkıcı
        echo "<br>";
        echo "__destruct ; The fruit is {$this->name}.";
    }
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    public function get_name() {
      return $this->name;
    }
    function set_color($n) { 
        $this->color = $n;
      }
    function set_weight($n) { 
        $this->weight = $n;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
      }
}

  $apple = new Fruit();
  $banana = new Fruit();
  $apple->set_name('Apple');
  $banana->set_name('Banana');
  
  echo $apple->get_name();
  echo "<br>";
  echo $banana->get_name();
  echo "<br>";
  var_dump($apple instanceof Fruit);//instanceof : verilen sınıfa ait mi?bool(true)
  echo "<br>";

  // __destruct() => Nesne yok edildiğinde veya komut dosyası durdurulduğunda veya çıkıldığında __destruct çağırılır.

  /**
   * public-  her yerden erişilebilir. default
   * protected- sınıf içinde ve o sınıftan türetilen sınıflar tarafından erişilebilir
   * private- YALNIZCA sınıf içinden erişilebilir */

   
$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->set_color('Yellow'); // protected color= >ERROR
$mango->set_weight('300'); //private $weight =>ERROR

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight="10") {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
      }
    public function message() {
        echo "<br>";
        echo "Am I a fruit or a berry? ";
        echo "<br>";
         // Call protected method from within derived class - OK
        $this -> intro();
    }
    public function get_name() {// geçersiz kıldık.
        return "<br> Overriding Inherited Methods---- ".$this->name."<br>";
      }
  }
  $strawberry = new Strawberry(name:"Strawberry",color: "red");
  $strawberry->message();
  echo $strawberry->get_name();
  // $strawberry->intro(); eror => eğer class içinden erişirsek ulaşabiliriz.

  //final : The final keyword can be used to prevent class inheritance or to prevent method overriding.
//   final class tree{
//     // some code
//   }
  
//   // will result in error
//   class Raspberry  extends tree { 
//     // some code
//   }
  
//   class tree{
//     final public function intro() {
//         // some code
//       }
//   }
  

//   class Raspberry  extends tree { 
//     public function intro() {  =>   // will result in error
//         // some code
//       }
//   }
print_r("\n\n");

// Class Constants : sabitler değiştirilemez

// sınıf içinden self ile  sabite ulaşılır.

class Constants {
    const WELCOME_MESSAGE = "Hoş geldin";
    public function hi() {
        echo self::WELCOME_MESSAGE;
        echo "<br>";
      }
  }
  
echo Constants::WELCOME_MESSAGE;
echo "<br>";

$constant = new Constants();
$constant->hi();

// Abstract Classes and Methods









?>