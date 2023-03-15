<?php
//PHP Namespaces

namespace surungenHayvanlar;
Class Cins
{
    // "Cins" sınıfı içinde "name" isminde bir metod oluşturuyorum.
    public function name()
    {
        return 'surungenHayvanlar\Cins';
    }
}

Class YasamAlani
{
    // "YasamAlani" sınıfı içinde "name" isminde bir metod oluşturuyorum.
    public function name()
    {
        return 'surungenHayvanlar\YasamAlani';
    }
}

namespace omurgaliHayvanlar;
Class Cins
{
    // "Cins" sınıfı içinde "name" isminde bir metod oluşturuyorum.
    public function name()
    {
        return 'omurgaliHayvanlar\Cins';
    }
}

Class YasamAlani
{
    // "YasamAlani" sınıfı içinde "name" isminde bir metod oluşturuyorum.
    public function name()
    {
        return 'omurgaliHayvanlar\YasamAlani';
    }
}


?>


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

echo "<br>";

// Abstract Classes and Methods


abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract protected function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro($message="German") : string {
      return "Choose German quality! I'm an $this->name!"." -$message";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
 
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro("WELCOME TO GERMANY");
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  

// Interfaces
/**
 * implements ile kullanılır. 
 * tüm interface methods public olmalıdır.
 * interface daki tüm methods abstract
 * properties bulunmaz.
 * Sınıflar, aynı anda başka bir sınıftan miras alırken bir interface uygulayabilir.
 */
  interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cat();
  $animal->makeSound();

  echo "<br>";  echo "<br>";

  // Traits
/**
 * PHP de  bir alt sınıf yalnızca tek bir ebeveynden miras alabilir.
 * 
 * Bir sınıfın birden çok özelliği devralabilmesi için traits kullanılır.
 * Traits, birden çok sınıfta kullanılabilen methodlara ve abstract methodlara sahip olabilir ve methodlar herhangi bir 
 * access modifier (public, private, or protected) sahip olabilir.
 */

 trait message1 {
    public function msg1() {
      echo "mesaj1 <br>";
    }
  }
  
  trait message2 {
    public function msg2() {
      echo "mesaj2 <br>";
    }
  }
  
  class Welcome {
    use message1;
  }
  
  class Welcome2 {
    use message1, message2;
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo "<br>";
  
      $obj2 = new Welcome2();
  $obj2->msg1();
  $obj2->msg2();


  echo "<br>";echo "<br>";


// Static Methods and Static Properties

class greeting {

  public $prop="";
  public static $staticProp = "hello everyone";
  public static function welcome() {
    echo "Hello welcome <br>";
  }
   public function __construct() {
    self::welcome();
    self::$staticProp;
  }
  public function getStatic() {
    self::welcome();
    $this->prop = self::$staticProp;
  }

}

//nesne oluşturmadan static methoda direk ulaşma
// Call static method
greeting::welcome();
echo greeting::$staticProp;

echo "<br>";

//nesneye de ait olmasını self kullnarak fonksiyondan  bildirebiliriz.

new greeting(); //__construct da bildirdik 

$nesne = new greeting();
echo $nesne->getStatic();
echo $nesne->prop;

echo "<br>";

//static yöntem public ise farklı sınıftan da ulaşılabilir.
class B { 
  public function message() {
    greeting::welcome();
  }
}
$obj = new B();
echo $obj -> message();

echo "<br>";

// Bir alt sınıftan statik bir yöntem çağırmak için, alt sınıf içindeki parent anahtarı kullanılır.
// statik yöntem public veya protected olmalıdır.

class child extends greeting{
 
  public function __construct() {
    parent::welcome();
  }
  public function getStatic(){
    echo parent::$staticProp;
  }
}

$domain = new child;

$domain->welcome();
$domain->getStatic();

echo "<br>";  echo "<br>";

//PHP Namespaces
/**
* Aynı ada sahip birden fazla sınıf olması durumda karışıklığı en aza indirmek  için kullanılan bir yapıdır.
* Bir dosya içinde birden fazla namespace olabilir.
* alias kullanılabilir. 
*/

// "surungenHayvanlar" namespace'i içinde bulunan "Cins" Sınıfını tanımladık.
$yilan1 = new \surungenHayvanlar\Cins;

$yilan2 = new \surungenHayvanlar\YasamAlani;

use omurgaliHayvanlar as o;

$balik1 = new o\Cins;

$balik2 = new o\YasamAlani;

echo "<br>".$yilan1->name();
echo "<br>".$yilan2->name();
echo "<br>".$balik1->name();
echo "<br>".$balik2->name();




echo "<br>";  echo "<br>";


?>