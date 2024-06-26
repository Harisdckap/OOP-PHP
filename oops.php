<?php

// --------------------------------------Constructor --------------------------------

// class Fruit {
//     public $name;
//     public $color;

//     function __construct($name) {
//       $this->name = $name; 
//     }
//     function get_name() {
//       return $this->name;
//     }
//   }

//   $apple = new Fruit("Apple");
//   echo $apple->get_name();



// ----------------------------------------Public Access Modifiers------

// class Animal {
//     public $name;  // Public property

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function makeSound() {  // Public method
//         return "$this->name makes a sound";
//     }
// }

// // Accessing public properties and methods
// $dog = new Animal("Dog");
// echo $dog->name;  // Output: Dog
// echo $dog->makeSound();  // Output: Dog makes a sound



// ----------------------------------------Protected Access Modifiers---------


// class Animal {
//     protected $name;  // Protected property

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     protected function makeSound() {  // Protected method
//         return "$this->name makes a sound";
//     }
// }

// class Dog extends Animal {
//     public function bark() {
//         return "$this->name barks";
//     }
// }

// // Accessing protected properties and methods
// $dog = new Dog("Dog");
// echo $dog->bark();  // Output: Dog barks
// // echo $dog->name;  // Error: Cannot access protected property
// // echo $dog->makeSound();  // Error: Cannot access protected method





// ---------------------------------------Private Access Modifiers

// class Animal {
//     private $name;  // Private property

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     private function makeSound() {  // Private method
//         return "$this->name makes a sound";
//     }

//     public function revealSound() {  // Public method to access private method
//         return $this->makeSound();
//     }
// }

// // Accessing private properties and methods
// $dog = new Animal("Dog");
// // echo $dog->name;  // Error: Cannot access private property
// // echo $dog->makeSound();  // Error: Cannot access private method
// echo $dog->revealSound();  // Output: Dog makes a sound





// -------------------------------------------Parent Contructor OOPS

// class Fruit {
//   public $name;
//   public $color;

//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }

//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public $weight;

//   public function __construct($name, $color, $weight) {
//     // Call the parent constructor
//     parent::__construct($name, $color);
//     $this->weight = $weight;
//   }

//   public function intro() {
//     // Optionally call the parent's intro method
//     parent::intro();
//     echo " The weight is {$this->weight} grams.";
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red", 50);
// $strawberry->intro();



// ---------------------------------  : : scope resolution operator    --------------

// Accessing Static Methods and Properties

// class MyClass {
//     public static $myStaticProperty = 10;

//     public static function myStaticMethod() {
//         echo "Static method called!";
//     }
// }

// // Accessing a static property
// echo MyClass::$myStaticProperty; // Outputs: 10

// // Calling a static method
// MyClass::myStaticMethod(); // Outputs: Static method called!


// Accessing Constants

// class MyClass {
//     const MY_CONSTANT = "Hello, world!";
//     const Hari="world!";
// }

// echo MyClass::MY_CONSTANT; // Outputs: Hello, world!
// echo MyClass::Hari; // Outputs: world!

// Calling Overridden Methods

// class ParentClass {
//     public function myMethod() {
//         echo "Method in parent class";
//     }
// }

// class ChildClass extends ParentClass {
//     public function myMethod() {
//         parent::myMethod(); // Calling overridden method from parent class
//         echo "Method in child class";
//     }
// }

// $obj = new ChildClass();
// $obj->myMethod(); // Outputs: Method in parent class Method in child class




// --------------------------------------Inheritance---------------
// Inheritance allows a class to inherit the properties and methods of another class.

// class Car {
//     // Properties
//     public $make;
//     public $model;

//     // Constructor
//     public function __construct($make, $model) {
//         $this->make = $make;
//         $this->model = $model;
//     }

//     // Method
//     public function displayInfo() {
//         return "This car is a " . $this->make . " " . $this->model;
//     }
// }

// // Create an object
// // $myCar = new Car("Toyota", "Corolla");
// // echo $myCar->displayInfo();


// class ElectricCar extends Car {
//     // Additional property
//     public $batteryCapacity;

//     // Constructor
//     public function __construct($make, $model, $batteryCapacity) {
//         parent::__construct($make, $model);
//         $this->batteryCapacity = $batteryCapacity;
//     }

//     // Overriding method
//     public function displayInfo() {
//         return parent::displayInfo() . " with a battery capacity of " . $this->batteryCapacity . " kWh";
//     }
// }

// // Create an object
// $myElectricCar = new ElectricCar("Tesla", "Model 3", 75);
// echo $myElectricCar->displayInfo();





// 3. Encapsulation
// Encapsulation involves restricting access to certain components of an object.
// This is typically done using access modifiers like public, protected, and private.

// class BankAccount {

//     // Properties
//     private $balance;

//     // Constructor
//     public function __construct($initialBalance) {
//         $this->balance = $initialBalance;
//     }

//     // Method to deposit money
//     public function deposit($amount) {
//         if ($amount > 0) {
//             $this->balance += $amount;
//         }
//     }

//     // Method to get balance
//     public function getBalance() {
//         return $this->balance;
//     }
// }

// // Create an object
// $myAccount = new BankAccount(1000);
// $myAccount->deposit(500);
// echo $myAccount->getBalance();



// 4. Polymorphism
// Polymorphism allows objects of different classes to be treated as objects of a common super class. 
// It is typically achieved through method overriding.

// class Shape {

//     public function area() {
//         return 0;
//     }
// }

// class Circle extends Shape {
//     private $radius;

//     public function __construct($radius) {
//         $this->radius = $radius;
//     }

//     public function area() {
//         return pi() * pow($this->radius, 2);
//     }
// }

// class Rectangle extends Shape {
//     private $width;
//     private $height;

//     public function __construct($width, $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function area() {
//         return $this->width * $this->height;
//     }

// }

// // Create objects
// // $shape=new Shape();
// // echo $shape->area(3);


// $circle = new Circle(5);
// $rectangle = new Rectangle(4, 6);

// echo "Circle area: " . $circle->area() . "\n";
// echo "Rectangle area: " . $rectangle->area() . "\n";


// -----------------------------------Abstract 


// Define an abstract class
// abstract class Animal {
//     // Abstract method (must be implemented by subclasses)
//     abstract public function makeSound();

//     // Concrete method
//     public function sleep() {
//         echo "Sleeping...";
//     }
// }



// Abstract Example.

// abstract class Animal{
//       // abstract public function makesound();
//       public function sleep(){
//          echo "sleeping";
//       }
// }

// class Dog extends Animal{
//        public function makesound(){
//           echo "how how ";
//        }

// }

// class Cat extends Dog{
//        public function makesound(){
//           echo "meow meow";
//        }
// }

// Using the subclasses
// $dog = new Dog();
// $cat = new Cat();
// $animal= new Animal();
// echo $animal->sleep();

// $dog->makeSound(); // Output: Woof!
// echo "<br>";
// $dog->sleep();     // Output: Sleeping...
// echo "<br>";

// $cat->makeSound(); // Output: Meow!
// echo "<br>";
// $cat->sleep();     // Output: Sleeping...

// Example 2 --------------abstract


// abstract class Car {
//       protected $name;

//       public function __construct($name) {
//         $this->name = $name;
//       }

//       abstract public function intro() : string;
//     }

//     // Child classes
//     class Audi extends Car {
//       public function intro() : string {
//         return  $this->name; 
//       }
//     }

//   class Volvo extends Car {
//     public function intro() : int {
//       return  $this->name; 
//     }
//   }

//   class Citroen extends Car {
//     public function intro() : int {
//       return "French extravagance! I'm a $this->name!"; 
//     }
//   }

//  class Benz extends Car{
//       public function intro() : int{
//           return "Proud to be French! I'm a $this->name!";
//       }
//  }

// Create objects from the child classes
// $audi = new Audi(868);
// echo $audi->intro();
// echo "<br>";

//   $volvo = new volvo("Volvo");
//   echo $volvo->intro();
//   echo "<br>";

//   $citroen = new citroen("Citroen");
//   echo $citroen->intro();
//  echo "<br>";



// ----------------------------------------Interface
// Interface example LoggerInterface implementing to class fileLogger and DatabaseLogger

// interface LoggerInterface {
//     public function log($message);
// }

// class FileLogger implements LoggerInterface {
//     public function log($message) {
//         echo "Logging to a file: $message ";
//     }
// }

// class DatabaseLogger implements LoggerInterface {
//     public function log($message) {
//         echo "Logging to a database: $message ";
//     }
// }

// function logMessage(LoggerInterface $logger, $message) {
//     print_r($logger);
//     $logger->log($message);
// }

// // Initializing the loggers
// $fileLogger = new FileLogger();
// $databaseLogger = new DatabaseLogger();

// // Logging messages with proper HTML line breaks
// logMessage($fileLogger, "File log message."); // Output: Logging to a file: File log message<br>
// logMessage($databaseLogger, "Database log message."); // Output: Logging to a database: Database log message<br>


// Interface example 2 ------serialize and unserialize
// interface Serialize{
//     public function serialize();
//     public function unserialize($dt);
// }


// class userSerializer implements Serialize{

//     private $name;
//     private $email;

//     public function __construct($name, $email){
//       $this->name =$name;
//       $this->email=$email;
//     }

//     public function serialize(){
//          return json_encode(
//              [
//                  "name"=>$this->name,
//                  "email"=>$this->email
//              ]
//          );
//     }

//     public function unserialize($dt){

//       $data=json_decode($dt);

//       $this->name=$data->name;
//       $this->email=$data->email;
//     }

//     public function display(){
//      echo "name:" .$this->name. ",Email:".$this->email."";
//     }
// }


// $class = new userSerializer("hari","hari@gmail.com");
// $dt=$class->serialize();
// echo $dt;

// $class->unserialize($dt);

// echo $class->display();
