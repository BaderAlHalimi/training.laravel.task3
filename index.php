<?php
namespace school;
require_once './Course.php';
require_once './Student.php';
require_once './Manager.php';
use \school\Manager;
use \school\Course;
use \school\Student;

$c1 = new Course('Java');
$c2 = new Course('laravel');
$s1 = new Student('Bader', 'bader.halimi.2003@gmail.com', [$c1, $c2]);
$s2 = new Student('Ali', 'Ali@gmail.com');
$s2->addCourse($c1);


$m1 = new Manager();
$m1->addStudent($s1);
$m1->addStudent($s2);
echo $m1->updateStudent(2, 'Mohammed', 'mohammed@gmail.com') . "<br>";
echo $m1->retrieveStudent(2) . "<br>";
echo $m1->deleteStudent(1);

exit;