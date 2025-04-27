<!-- <?php
$x=50;
$y= 50;
$p=$x+$y; 
$d=$x-$y;
$g=$x*$y;
$o=$x/$y;

echo"$p,$d,$g,$o"; 
echo"</br>";
echo "$p";
echo"</br>";
echo "helloworld";
?> -->
<!-- 
<?php

for ($x = 1; $x <= 3; $x++) {
    echo "hello php";
    echo $x;
}
echo"</br>";

$x = 1;
while ($x <= 3) {
    echo "hello whil loop";
    echo $x;
    $x++;
}
echo"</br>";

$x = 1;
do {
    echo "hello do while loop";
    echo $x;
    $x++;
} while ($x <= 2);

?> -->



<!-- <?php
// Class and Object example
class Car {
    // Properties (attributes)
    public $brand;
    public $model;
    public $color;
    
    // Method (behavior)
    public function startEngine() {
        return "The {$this->brand} {$this->model}'s engine is starting!";
    }
}

// Creating objects (instances)
$car1 = new Car();
$car1->brand = "Toyota";
$car1->model = "Camry";
$car1->color = "Blue";

$car2 = new Car();
$car2->brand = "Honda";
$car2->model = "Accord";
$car2->color = "Red";

// Using objects
echo $car1->startEngine(); // Output: The Toyota Camry's engine is starting!
echo "<br>";
echo $car2->startEngine(); // Output: The Honda Accord's engine is starting!
?> -->


<?php
// inheritanec
class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function speak() {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Woof!";
    }
}

$dog = new Dog("Buddy");
echo $dog->speak();
?>


<?php
//encapsulation
class BankAccount {
    private $balance = 0;
    
    public function deposit($amount) {
        $this->balance += $amount;
    }
    
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
    
    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->withdraw(50);
echo $account->getBalance();
?>



<?php
//polymorphism
interface Shape {
    public function area();
}

class Circle implements Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape {
    private $side;
    
    public function __construct($side) {
        $this->side = $side;
    }
    
    public function area() {
        return pow($this->side, 2);
    }
}

$shapes = [new Circle(3), new Square(4)];

foreach ($shapes as $shape) {
    echo $shape->area() . "\n";
}
?>



