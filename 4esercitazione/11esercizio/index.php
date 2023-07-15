<?php

class Student {
    public static $students = [];

    public function __construct($student, $name, $email, $age)
    {
        self::$students[$student] = [
            "Name" => $name,
            "Email" => $email,
            "Age" => $age,
        ];
    }
}

$student1 = new Student("student1", "Aldo", "aldobaglio@gmail.com", 64);
$student2 = new Student("student2", "Giovanni", "giovannistori@gmail.com", 66);
$student3 = new Student("student3", "Giacomo", "giacomoporetti@gmail.com", 67);

print_r(Student::$students);

echo Student::$students["student1"]["Name"] . "\n";
echo Student::$students["student2"]["Name"] . "\n";
echo Student::$students["student2"]["Email"] . "\n";
echo Student::$students["student3"]["Age"] . "\n";