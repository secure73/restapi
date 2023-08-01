<?php
header("Content-Type:application/json");

class User{
    public int $id;
    public string $fName;
    public string $lName;
    public int $age;
}


$student = new User();
$student->id = 1;
$student->fName = "Jens";
$student->lName = "Kutz";
$student->age = 32;

$student2 = new User();
$student2->id = 2;
$student2->fName = "Maria";
$student2->lName = "Peterson";
$student2->age = 55;

$students = array();
$students[] = $student;
$students[] = $student2;


echo json_encode($students);

?>