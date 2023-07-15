<?php

class Student
{
    public $name;
    public $email;
    private $age;
    private $classes = [];
    const CLASSES_MAX = 3;
    private static $students = 0;

    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        self::$students++;
    }

    private function getAge()
    {
        // echo $this->age;
        if ($this->age > 17 && $this->age < 31) {
            return "18 - 30";
        } elseif ($this->age > 31 && $this->age < 51) {
            return "31 - 50";
        } elseif ($this->age > 50) {
            return "50+";
        }
    }

    public function ageRange()
    {
        echo "Lo studente si trova nella fascia di età: " . $this->getAge() ."\n";
    }

    public function addClass($elementoDaAggiungere)
    {
        if (count($this->classes) == self::CLASSES_MAX) {
            echo "Hai raggiunto il numero massimo di corsi!\n";
        } else {
            $this->classes[] = $elementoDaAggiungere;
        }
    }

    public function printClasses() 
    {
        echo "Lo studente $this->name segue i corsi:";

        foreach ($this->classes as $corso) {
            echo "\n$corso";
        };
    }

    public static function printStudents()
    {
        echo "\nStudenti: " . self::$students;
    }
}

$student1 = new Student("Aldo", "aldobaglio@gmail.com", 64);
$student2 = new Student("Giovanni", "giovannistori@gmail.com", 66);
$student3 = new Student("Giacomo", "giacomoporetti@gmail.com", 67);

echo $student1->name . "\n";
echo $student2->name . "\n";
echo $student2->email . "\n";
// echo $student3->age . "\n";

// $student1->getAge();

$student1->ageRange();
$student1->addClass("PHP");
$student1->addClass("JS");
$student1->addClass("HTML");
$student1->addClass("PHP");

$student1->printClasses();

// echo "\nStudenti: " . Student::$students;
Student::printStudents();